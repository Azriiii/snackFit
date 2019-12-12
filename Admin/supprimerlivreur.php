<?PHP
include "../core/livreurC.php";
$LivreurC=new LivreurC();

if (isset($_POST["idlivreur"])){
	$LivreurC->supprimerlivreur($_POST["idlivreur"]);
	
	header('Location: afficherlivreur.php');
}

?>