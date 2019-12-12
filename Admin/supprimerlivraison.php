<?PHP
include "../core/livraisonC.php";
$LivraisonC=new LivraisonC();
//suppression selon idlivraison
if (isset($_POST["idlivraison"])){
	$LivraisonC->supprimerlivraison($_POST["idlivraison"]);
	///redirection
	header('Location: page-invoice1.php');
	//header('Location: afficherlivraison.php');
}

?>