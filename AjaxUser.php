<?php

include  "../Controller/UserC.php";

$userC= new UserC();

if(!isset($_POST['str'])){
    $liste=$userC->listUsers();
}
else{
    $liste = $userC->rechercherTicket($_POST['str']);
}

                foreach ($liste as $row) {
                    ?>
                    <tr>
                <td><?= $row['iduser']; ?></td>
                <td><?= $row['firstName']; ?></td>
                <td><?= $row['lastName']; ?></td>
                <td><?= $row['address']; ?></td>
                <td><?= $row['phonenumb']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['password']; ?></td>
                <td><img src="<?php echo $row['image']; ?>" heigth="200" width=150></td>

                <td align="center">
                    <form method="POST" action="updateUser.php?id=<?PHP echo $row['iduser']; ?>">
                        <input type="submit" name="update" value="Update">
                        <input type="hidden" value=<?PHP echo $row['iduser']; ?> name="iduser">
                    </form>
                </td>
                <td>
                    <a href="deleteuser.php ?iduser=<?php echo $row['iduser']; ?>">Delete</a>
                </td>  
                </tr>

                <?php
                }

?>