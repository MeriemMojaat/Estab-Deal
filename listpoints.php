<?php 

include_once '../Controller/pointsp.php';

$pointsp = new pointsp ();
$list = $pointsp->listpoints();

?> 
<link href="style.css" rel="stylesheet">
<img class="d-block mx-auto mb-4 center" src="logo.png" alt="" width="100" height="65">
<a href="addpoints.php"><h4> Go back</h4></a>
            <div class="container text-center" > 
            <div class="testimonial-wrap">
                <div class="testimonial">
<blockquote style="color: red;">
<h1>List of points </h1>

<table > 
    <tr > 
        <th> Id point </th> 
        <th> Id user  </th>
        <th> Number of points </th>
        <th> id exchange </th>

        <th> Details </th> 
        <th> Update</th>
        <th> Delete </th> 
</tr>

<?php 
foreach($list as $c) {
    ?>
    <tr> 
    <td> <?=$c['id_point']; ?> </td> 
        <td> <?= $c['id_user']; ?> </td> 
        <td> <?= $c['nb_points']; ?> </td>
        <td> <?= $c['idexchange']; ?> </td>

        <td> <a href="detailspt.php ?id_point=<?= $c['id_point']; ?>"> View Details</a> </td>
        <td>
            <form method="POST" action="updatept.php">
                <input type="submit" name="update" value="Update">
                <input type="hidden" value=<?php echo $c['id_point']; ?> name="id_point">
            </form>
        </td>
        <td> <a href="deletept.php ?id_point=<?= $c['id_point']; ?>">Delete</a> </td>

</tr> 
<?php 
} ?>
</table>
</blockquote>
</div>
</div>
</div>
