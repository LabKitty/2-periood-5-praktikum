<?php
	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
	}
	if (!isset($username) || $username ==""){
	 	$usernameMessage = "Palun sisesta kasutajanimi";
	 } else {
	 	$usernameMessage = "Kasutajanimi sobis";

	 }
 ?>