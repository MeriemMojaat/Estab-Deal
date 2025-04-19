<?php 
include_once '../Controller/billC.php';
$billc = new billc();
$list = $billc->listbill();
?> 
<a href="addbill.php">Add bill </a> 
<h1>List of bills </h1>
<table> 
    <tr> 
        <th> Id bill </th>
        <th> id user  </th>
        <th> id product </th> 
        <th> First Name </th>
        <th> Last Name </th>
        <th> Email</th>
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
        <td> <?= $c['firstname']; ?> </td>
        <td> <?= $c['lastname']; ?> </td>
        <td> <?= $c['email']; ?> </td>
        <td> <a href="detailbill.php ?id=<?= $c['idbill']; ?>"> View Details</a> </td>
        <td> <a href="deletebill.php ?idbill=<?= $c['idbill']; ?>">Delete</a> </td>

</tr> 
<?php 
} ?>
</table>