<?php
include '../controller/basketc.php';
include '../model/basket.php';
$error = "";

// create product
$basket = null;

// create an instance of the controller
$basketc = new basketc();
if (    isset($_POST["idbasket"]) &&
    isset($_POST["iduser"]) &&
    isset($_POST["idproduct"])&& 
    isset($_POST["firstname"])&&
    isset($_POST["lastname"])&&
    isset($_POST["idpoint"])
) {
    if (        !empty($_POST["idbill"]) &&
        !empty($_POST["iduser"]) &&
        !empty($_POST["idproduct"])&&
        !empty($_POST["firstname"])&&
        !empty($_POST["lastname"])&&
        !empty($_POST["idpoint"])
    ) {
        $basket = new basket(
            $_POST["idbasket"],
            $_POST["iduser"],
            $_POST["idproduct"],
            $_POST["firstname"],
            $_POST["lastname"],
            $_POST["idpoint"]

        );
        $basketc->update($basket, $_POST["idbasket"]);
        header('Location:list.php');
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


<hr>

    <div id="error">
        <?php echo $error; ?>
    </div>

    <?php
    if (isset($_POST['idbasket'])) {
        $basket = $basketc->showDetails($_POST['idbasket']);

    ?>

        <form action="" method="POST">
            <table class="table" align="center">
                <tr>
                    <td>
                        <label for="idbasket">Id basket:
                        </label>
                    </td>
                    <td><input type="int" name="idbasket" id="idbasket" value="<?php echo $basket['idbasket']; ?>" maxlength="20" readonly></td>
                </tr>
                <tr>
                    <td>
                        <label for="iduser">id user:
                        </label>
                    </td>
                    <td><input type="int" name="iduser" id="iduser" value="<?php echo $basket['iduser']; ?>" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="idproduct">id product:
                        </label>
                    </td>
                    <td><input type="int" name="idproduct" id="idproduct" value="<?php echo $basket['idproduct']; ?>" maxlength="20"></td>
                </tr>
                <td>
                        <label for="firstname">first name:
                        </label>
                    </td>
                    <td><input type="text" name="firstname" id="firstname" value="<?php echo $basket['firstname']; ?>" maxlength="20"></td>
                </tr>
                <td>
                        <label for="lastname">last name : 
                        </label>
                    </td>
                    <td><input type="text" name="lastname" id="lastname" value="<?php echo $basket['lastname']; ?>" maxlength="20"></td>
                </tr>
                <td>
                        <label for="idpoint">id point:
                        </label>
                    </td>
                    <td><input type="int" name="idpoint" id="idpoint" value="<?php echo $basket['idpoint']; ?>" maxlength="20"></td>
                </tr>
                    <td>
                        <input class="btn btn-success" type="submit" value="Update">
                    </td>
                    <td>
                        <input class="btn btn-danger" type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
    <a class="btn btn-primary mt-2" href="list.php">Back to list</a>