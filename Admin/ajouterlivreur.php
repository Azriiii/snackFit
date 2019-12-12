<?PHP
include "../entities/livreur.php";
include "../core/livreurC.php";

if (isset($_POST['idlivreur']) and isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['disp']) and isset($_POST['remarque'])){
$livreur1=new Livr($_POST['idlivreur'],$_POST['nom'],$_POST['prenom'],$_POST['disp'],$_POST['remarque']);
$livreur1C=new LivreurC();
$livreur1C->ajouterlivreur($livreur1);
	//redirection
header('Location: afficherlivreur.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>