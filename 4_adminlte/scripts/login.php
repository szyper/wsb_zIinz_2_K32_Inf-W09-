<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	session_start();
	//	echo "<pre>";
	//		print_r($_POST);
	//	echo "</pre>";

	foreach ($_POST as $value){
		if (empty($value)){
			$_SESSION["error"] = "Wypełnij wszystkie dane!";
			echo "<script>history.back();</script>";
			exit();
		}
	}

	require_once "./connect.php";

	try {
		$stmt = $conn->prepare("SELECT * FROM users WHERE email=?");

		$stmt->bind_param("s", $_POST["email"]);

		$stmt->execute();

		$result = $stmt->get_result();

		$user = $result->fetch_assoc();

	//	echo $user["firstName"];
		if ($result->num_rows != 0){
			//porównanie hasła
			if (password_verify($_POST["pass"], $user["pass"])){
				//echo "zalogowany";
				$_SESSION["logged"]["firstName"] = $user["firstName"];
				$_SESSION["logged"]["lastName"] = $user["lastName"];
				$_SESSION["logged"]["role_id"] = $user["role_id"];
				$_SESSION["logged"]["session_id"] = session_id();
				//echo $_SESSION["logged"]["session_id"];
				//echo "<br>".session_status();
				//exit();
				$_SESSION["logged"]["last_activity"] = time();
				//echo $_SESSION["logged"]["last_activity"];

				//adres ip
				$address_ip = $_SERVER["REMOTE_ADDR"];

				//echo $user["id"];
				//echo $address_ip;
				$status = 1;
				//exit();
				$sql = "INSERT INTO `logs` (`user_id`, `status`, `address_ip`) VALUES ( ?, ?, ?);";
				$stmt = $conn->prepare($sql);

				$stmt->bind_param("iss", $user["id"], $status,  $address_ip);
				$stmt->execute();

				header("location: ../pages/view/logged.php");
				//header("location: ../pages/view/logged_test.php");
				exit();
			}else{
				//echo "niezalogowany!";
				$_SESSION["error"] = "Błędny login lub hasło!";
				echo "<script>history.back();</script>";
				exit();
			}
		}else{
			$_SESSION["error"] = "Nie udało się zalogować!";
			echo "<script>history.back();</script>";
			exit();
		}

	} catch(mysqli_sql_exception $e) {
		$_SESSION["error"] = $e->getMessage();
		echo "<script>history.back();</script>";
		exit();
	}
}
$conn->close();
header("location: ../pages/register.php");