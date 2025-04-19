<?php


session_start();

if(!isset($_SESSION['login']))
{

    header("location: LoginAdmin.php");
}

include '../Controller/UserC.php';
$userC = new UserC();
$list = $userC->listUsers();
?>
<html>

<head>    <link rel="stylesheet" href="user.css">
</head>

<body>
<?php include 'navBarAdmin.php'; ?>
  <!-- ======= Navbar ======= -->
    <center>
        <h1>List of users</h1>
        <div class="list-group">
                    <h3>Recherche</h3>
                    <div style="height: 180px; overflow-y: auto; overflow-x: hidden;">
                        <form>
                          <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Recherche..."  id="rech">
                            <div class="input-group-append">
                              <div class="input-group-text">
                                <i class="now-ui-icons ui-1_zoom-bold"></i>
                              </div>
                            </div>
                          </div>
                        </form>
                    </div>
                </div>            

    </center>
    <div  >

    <table border="1" align="center" width="70%" style="background-color:#026670ff"  >
        <thead>

        <tr>
            <th>Id User</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Password</th>
            <th>Image</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody  id="tableau">

        </body>

    </table>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type = "text/javascript">
        $(document).ready(function(){
            load_data();
            function load_data(str)
            {
                $.ajax({
                    url:"AjaxUser.php",
                    method:"post",
                    data:{str:str},
                    success:function(data)
                    {
                        $('#tableau').html(data);
                    }
                });
            }

            $('#rech').keyup(function(){
                var recherche = $(this).val();
                if(recherche != '')
                {
                    load_data(recherche);
                }
                else
                {
                    load_data();
                }
            });
        });
    </script>
</body>

</html>