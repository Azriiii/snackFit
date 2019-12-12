<?php
    require_once "../core/OrderC.php";
    $OrderC=new OrderC();
    if(isset($_GET['idR']))
    $liste=$OrderC->displayOrders_ADDIP($_GET['idR']);
    else
    $liste=$OrderC->displayOrders();
    echo $_GET['idR'];
    ?>
<div class="tile-body" id="DataTableR">
</br>
<table class="table table-hover table-bordered" >
<thead>
<tr>
<th>Order</th>
<th>Client</th>
<th>Product</th>
<th>Qty</th>
<th>Price</th>
<th>Date Creation</th>
<th>Date Expiration</th>
<th>State</th>
<th></th>
</tr>
</thead>
<tbody>
<?php
    foreach($liste as $row)
    { echo '
        
        <tr>
        <td>'.$row['id_commande'].'</td>
    <td>ID: '.$row['id_client'].'</br> '.$row['Cord'].'</td>
        <td>'.$row['id_produit'].'</td>
        <td>'.$row['Qty'].'</td>
        <td>'.$row['Prix'].'</td>
        <td>'.$row['date_creation'].'</td>
        <td>'.$row['date_expiration'].'</td>
        <td><form method="POST" action="form-updateOrder.php">
        <input type="submit" class="btn btn-warning" value= "'.$row["etat_commande"].'">
        <input type="hidden" value="'.$row['id_commande'].'" name="updateID">
        </form>
        <td><form method="POST" action="deleteOrder.php">
        <input type="submit" class="btn btn-danger" value= "Supprimer" >
        <input type="hidden" value="'.$row['id_commande'].'" name="deleteID">
        <input type="hidden" value="'.$row['date_expiration'].'" name="OED">
        </form>
        </td>
        </tr>
        '; } ?>
</tbody>
</table>
</div>
