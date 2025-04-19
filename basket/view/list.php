<?php 
include '../controller/basketc.php';
$basketc = new basketc();
$list = $basketc->listbasket();
?> 
<a href="add.php">Add basket </a> 
<h1>List of baskets </h1>
<table> 
    <tr> 
        <th> Id basket </th>
        <th> id user  </th>
        <th> id product </th> 
        <th> first name </th>
        <th> last name </th> 
        <th> id point </th> 
        <th> Details </th> 
        <th> Delete </th> 
</tr>

<?php 
foreach($list as $c) {
    ?>
    <tr> 
    <td> <?=$c['idbasket']; ?> </td> 
        <td> <?= $c['iduser']; ?> </td> 
        <td> <?= $c['idproduct']; ?> </td>
        <td> <?= $c['firstname']; ?> </td> 
        <td> <?= $c['lastname']; ?> </td>
        <td> <?= $c['idpoint']; ?> </td>
        <td> <a href="detail.php?id=<?= $c['idbasket']; ?>"> View Details</a> </td>
        <td> <a href="delete.php?id=<?= $c['idbasket']; ?>">Delete</a> </td>

</tr> 
<?php 
} ?>
</table>