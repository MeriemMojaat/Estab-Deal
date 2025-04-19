<?php

include_once '../Model/points.php';
include_once '../Controller/pointsp.php';

$error = "";

// create basket
$user = null;

// create an instance of the controller
$userc= new pointsp();
if (
    isset($_POST["id_user"]) &&
    isset($_POST["nb_points"]) &&
    isset($_POST["idexchange"]) 
) {
    if (
        !empty($_POST["id_user"]) &&
        !empty($_POST["nb_points"]) &&
        !empty($_POST["idexchange"])
    ) {
        $user = new points (
            $_POST['id_user'],
            $_POST['nb_points'],
            $_POST['idexchange']
        );
        $userc->update($user, $_POST["id_point"]);
        header('Location:listpoints.php');
    } else
        $error = "Missing information";
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
</head>

<body>
<link href="style.css" rel="stylesheet">
 <img class="d-block mx-auto mb-4 center" src="logo.png" alt="" width="100" height="65">
 <a href="listpoints.php"><h4> Go back</h4></a>
            <div class="container" > 
            <div class="testimonial-wrap">
                <div class="testimonial">
<blockquote>
    <button><a href="listpoints.php">Back to list</a></button>
    <hr>
    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['id_point'])) {
        $user = $userc->showDetails($_POST['id_point']);

    ?>

        <form action="" method="POST">
            <table >
                <tr>
                    <td>
                        <label for="id_user">Id user:
                        </label>
                    </td>
                    <td><input type="int" name="id_user" id="id_user" value="<?php echo $user['id_user']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="nb_points">number of points:
                        </label>
                    </td>
                    <td><input type="int" name="nb_points" id="nb_points" value="<?php echo $user['nb_points']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="idexchange">Id exchange:
                        </label>
                    </td>
                    <td><input type="int" name="idexchange" id="idexchange" value="<?php echo $user['idexchange']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Update">
                    </td>
                    <td>
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
    </blockquote>
</div>
</div>
</div>
</body>

</html>