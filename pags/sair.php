<?php
ob_start();
@session_start();

	$_SESSION["login"] = "";
	$_SESSION["senha"] = "";
 echo '<meta http-equiv="refresh" content=0;url="../index.php">';
?>