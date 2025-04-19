<?php


session_start();

if(!isset($_SESSION['login']))
{

    header("location: LoginAdmin.php");
}

?>

<html>

<head> 
       <link rel="stylesheet" href="user.css">
</head>

<body>

<?php include 'navBarAdmin.php'; ?>
  <!-- ======= Navbar ======= -->
    <div >


    </div>
</body>

</html>