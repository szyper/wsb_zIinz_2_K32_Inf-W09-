<?php
session_start();
	echo "<pre>";
		print_r($_POST);
	echo "</pre>";

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
			echo "zalogowany";
		}else{
			echo "niezalogowany!";
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

echo "success";
//header("location: ../pages");