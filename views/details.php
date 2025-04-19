<?php
include '../controller/productc.php';
include '../model/product.php';
$productc = new productc();

$product = $productc->showDetails($_GET['id']);

?>
 <!-- CSS only -->
 <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous" />
    <title>product</title>
  </head>
  <body>

    <table class="table">
      <tr>
        <center>
<th> product name </th>
<th> description</th>
<th> image</th> 
<th> points</th>
<th> category</th>

</center>

</tr>
<tr>

<th> <?=$product['name'];?> </th>
<th> <?=$product['description'];?> </th>
<th><img src=<?=$product['image'];?>> </th>
<th> <?=$product['points'];?> </th>
<th> <?=$product['category'];?> </th>








</tr>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


