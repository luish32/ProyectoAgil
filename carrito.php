<?php
/* se recupera el carrito de la variable de sesión */
$carrito = $_SESSION['carrito'];
/* acá se harian las operaciones de agregar/quitar del carrito */
/* se guardan las modificaciones en la variable de sesión */
$_SESSION['carrito'] = $carrito;
?>

<html>
...

<table>
 <th>
   <td>ID</td>
   <td>Cantidad</td>
 </th>
 <?php
  /* Se recorre los item del carrito y se muestran */
  foreach($carrito as $id_producto => $cantidad)
  {
 ?>
    <tr>
    <td><?php print $id_producto; ?></td>
    <td><?php print $cantidad; ?></td>
    </tr>
 <?php
  }
 ?>