<?php
	session_start();
	//print_r($_SESSION["logged"]);

	if (isset($_SESSION["logged"]["last_activity"])){
		//echo $_SESSION["logged"]["last_activity"];
		$lastActivityTime = $_SESSION["logged"]["last_activity"];
		$currentTime = time();
		$sessionTimeout = 60; //1 minuta

		if ($currentTime - $lastActivityTime <= $sessionTimeout){
			echo "Sesja użytkownika aktywna";
		}else{
			echo "Sesja użytkownika wygasła!";
		}
	}else{
		echo "Sesja użytkwonika wygasła lub nie jest aktywna!";
}

