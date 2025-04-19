<?php 
include '../controller/billc.php';
$billc = new billc();
$list = $billc->listbill();
?> 
<a href="add.php">Add bill </a> 
<h1>List of bills </h1>
<table> 
    <tr> 
        <th> Id bill </th>
        <th> id user  </th>
        <th> id product </th> 
        <th> first name </th>
        <th> Details </th> 
        <th> Delete </th> 
</tr>

<?php 
foreach($list as $c) {
    ?>
    <tr> 
    <td> <?=$c['idbill']; ?> </td> 
        <td> <?= $c['iduser']; ?> </td> 
        <td> <?= $c['idproduct']; ?> </td>
        <td> <a href="detail.php?id=<?= $c['idbill']; ?>"> View Details</a> </td>
        <td> <a href="delete.php?id=<?= $c['idbill']; ?>">Delete</a> </td>

</tr> 
<?php 
} ?>
</table>