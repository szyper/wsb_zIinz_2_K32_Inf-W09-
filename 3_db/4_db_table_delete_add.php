<!doctype html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="../css/table.css">
	<title>Użytkownicy</title>
</head>
<body>
	<h4>Użytkownicy</h4>
  <?php
    if (isset($_GET["deleteUser"])){
      if ($_GET["deleteUser"] == 0){
        echo "<h4>Nie udało się usunąć rekordu!</h4>";
      }else{
	      echo "<h4>Udało się usunąć rekordu o id = $_GET[deleteUser]</h4>";
      }
    }

    if (isset($_GET["addUser"])){
      if ($_GET["addUser"] == 0){
        echo "<h4>Nie udało się dodać rekordu!</h4>";
      }else{
	      echo "<h4>Dodano rekord</h4>";
      }
    }

  ?>
	<table>
		<tr>
			<th>Imię</th>
			<th>Nazwisko</th>
			<th>Data urodzenia</th>
			<th>Miasto</th>
			<th>Województwo</th>
			<th>Państwo</th>
		</tr>

	<?php
		require_once "../scripts/connect.php";
	$sql = "SELECT `u`.`id` `userId`,`u`.`firstName` `imie`, `u`.`lastName`, `u`.`birthday`, `c`.`city`, `s`.`state`, `co`.`country` FROM `users` u JOIN `cities` c ON `u`.`city_id`=`c`.`id` JOIN `states` s ON `c`.`state_id`=`s`.`id` JOIN `countries` co ON `s`.`country_id`=`co`.`id`;";
		$result = $conn->query($sql);
    //echo $result->num_rows;

    if ($result->num_rows == 0){
      echo "<tr><td colspan='6'>Brak rekordów do wyświetlenia</td></tr>";
    }else{
	    while($user = $result->fetch_assoc()){
		    echo <<< TABLEUSERS
				<tr>
<!--					<td>$user[userId]</td>-->
					<td>$user[imie]</td>
					<td>$user[lastName]</td>
					<td>$user[birthday]</td>
					<td>$user[city]</td>
					<td>$user[state]</td>
					<td>$user[country]</td>
					<td><a href="../scripts/delete_user.php?userIdDelete=$user[userId]">Usuń</a></td>
				</tr>
TABLEUSERS;
	    }
    }
		echo "</table><hr>";
    if (isset($_GET["addUserForm"])){
      echo <<< ADDUSERFORM
        <h4>Dodawanie użytkownika</h4>
        <form action="../scripts/add_user.php" method="post">
          <input type="text" name="firstName" placeholder="Podaj imię" autofocus><br><br>
          <input type="text" name="lastName" placeholder="Podaj nazwisko"><br><br>
          <input type="date" name="birthday">Data urodzenia<br><br>
<!--          <input type="number" name="city_id" placeholder="Podaj id miasta"><br><br>-->
          <select name="city_id">
ADDUSERFORM;
          $sql = "SELECT id, city FROM cities";
          $result = $conn->query($sql);
          while($city = $result->fetch_assoc()){
            echo "<option value=\"$city[id]\">$city[city]</option>";
          }
	    echo <<< ADDUSERFORM
          </select><br><br>
          <input type="submit" value="Dodaj użytkownika">
        </form>
ADDUSERFORM;
    }else{
      echo '<a href="./4_db_table_delete_add.php?addUserForm=1">Dodaj użytkownika</a>';
    }
    $conn->close();
	?>

</body>
</html>
