<?php
if(empty($_POST['email']) || empty($_POST['password'])) {
	header("Location: index.html?error=emptyfields");
	exit();
}

header("Location: index.html?error=invalidlogin");
exit();
?>