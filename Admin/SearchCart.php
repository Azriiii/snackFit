<?php
    require_once "../core/OrderC.php";
    $CartC=new CartC();
    $idR="";
    if(isset($_GET['idR']))
    {
        if($_GET['idR']!="")
            $liste=$CartC->displayCarts_ADDIP($_GET['idR']);
        else
            $liste=$CartC->displayCarts();
        $idR=$_GET['idR'];
    }
    else
    $liste=$CartC->displayCarts();
    ?>

<div class="tile-body" id="DataTableR">

<table class="table table-hover table-bordered" >
<thead>
<tr>
<th>IP Adress</th>
<th>Product</th>
<th>Qty</th>
<th>Price</th>
<th></th>
</tr>
</thead>
<tbody>
<?php
    foreach($liste as $row)
    { echo '
        
        <tr>
        <td>'.my_simple_crypt($row["ADD_IP"],'d').'</td>
        <td>'.$row['id_produit'].'</td>
        <td>'.$row['Qty'].'</td>
        <td>'.$row['Prix'].'</td>
        <td><form method="POST" action="deleteCart.php">
        <input type="submit" class="btn btn-danger" value= "Supprimer">
        <input type="hidden" value="'.$row['ADD_IP'].'" name="deleteIP">
        <input type="hidden" value="'.$row['id_produit'].'" name="deletePID">
        </form>
        </tr>
        '; } ?>
</tbody>
</table>
</div>
