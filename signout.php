<?php
session_start();
session_destroy();
header("location: homeuser.php");
?>