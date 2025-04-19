<?php

include '../controller/billC.php';

$error = "";

// create bill
$bill = null;

// create an instance of the controller
$billc= new billc();
if (
    isset($_POST["idbill"]) &&
    isset($_POST["iduser"]) &&
    isset($_POST["idproduct"]) &&
    isset($_POST["firstname"])&& 
    isset($_POST["lastname"])&& 
    isset($_POST["email"])
) {
    if (
        !empty($_POST["idbill"]) &&
        !empty($_POST['iduser']) &&
        !empty($_POST["idproduct"])&&
        !empty($_POST["firstname"])&&
        !empty($_POST["lastname"])&&
        !empty($_POST["email"])
    ) {
        $bill = new bill(
            $_POST['iduser'],
            $_POST['idproduct'],
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['email']
        );
        $billc->updatebill($bill, $_POST["idbill"]);
        header('Location:listbill.php');
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
    <button><a href="listbill.php">Back to list</a></button>
    <hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idbill'])) {
        $bill = $billc->showDetailsBill($_POST['idbill']);

    ?>

        <form action="" method="POST">
            <table border="1" align="center">
                <tr>
                    <td>
                        <label for="idbill">Id bill:
                        </label>
                    </td>
                    <td><input type="int" name="idbill" id="idbill" value="<?php echo $bill['idbill']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="iduser">Id User:
                        </label>
                    </td>
                    <td><input type="int" name="iduser" id="iduser" value="<?php echo $bill['iduser']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="idproduct">Id product:
                        </label>
                    </td>
                    <td><input type="int" name="idproduct" id="idproduct" value="<?php echo $bill['idproduct']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="firstname">First Name:
                        </label>
                    </td>
                    <td><input type="text" name="firstname" id="firstname" value="<?php echo $bill['firstname']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="lastname">Last Name:
                        </label>
                    </td>
                    <td><input type="text" name="lastname" id="lastname" value="<?php echo $bill['lastname']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="email">Email:
                        </label>
                    </td>
                    <td><input type="text" name="email" id="email" value="<?php echo $bill['email']; ?>" maxlength="20"></td>
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
</body>

</html>