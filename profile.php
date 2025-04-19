<!-- <img src="logo web copy1.png" alt="" width="80" height="40"> -->
<?php
session_start();
if($_SESSION)
echo "welcome ".$_SESSION["firstName"];
else
echo "bye";
?>

 <br>
 <a href="signout.php"> Sign Out </a>
