<?php
session_start();
session_destroy();
header("Location: exercicio13.php");
exit;
?>