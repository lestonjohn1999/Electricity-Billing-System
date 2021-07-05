<?php 
session_start();
		$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "electricity";
        $conn = new mysqli($servername, $username, $password, $dbname);
session_unset();
session_destroy();
header("location:login.php");
exit();
?>