<?PHP
include "../config.php";
class LivreurC {
function afficherlivreurs ($Livr){
		echo "id livreur: ".$Livr->getIdlivreur()."<br>";
		echo "nom : ".$Livr->getNom()."<br>";
		echo "prenom : ".$Livr->getPrenom()."<br>";
		echo "disponibilite: ".$Livr->getDisp()."<br>";
		echo "remarque: ".$Livr->getRemarque()."<br>";
	}
	function ajouterlivreur($Livr){
		$sql="insert into livreur (idlivreur,nom,prenom,disp,remarque) values (:idlivreur, :nom,:prenom,:disp,:remarque)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		
        $idlivreur=$Livr->getIdlivreur();
        $nom=$Livr->getNom();
		$prenom=$Livr->getPrenom();
        $disp=$Livr->getDisp();
        $remarque=$Livr->getRemarque();
       
		$req->BindValue(':idlivreur',$idlivreur);
		$req->BindValue(':nom',$nom);
		$req->BindValue(':prenom',$prenom);
		$req->BindValue(':disp',$disp);
		$req->BindValue(':remarque',$remarque);
		
		
            $req->execute();
            return true ;
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	function afficherlivreur(){
		
		$sql="SElECT * From livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerlivreur($idlivreur){
		$sql="DELETE FROM livreur where idlivreur= :idlivreur";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idlivreur',$idlivreur);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierlivreur($Livr,$idlivreur){
		$sql="UPDATE livreur SET idlivreur=:idlivreur, nom=:nom,prenom=:prenom,disp=:disp,remarque=:remarque WHERE idlivreur=:idlivreur";
		$db = config::getConnexion();
		
try{		
        $req=$db->prepare($sql);
        $idlivreur=$Livr->getIdlivreur();
        $nom=$Livr->getNom();
		$prenom=$Livr->getPrenom();
        $disp=$Livr->getDisp();
        $remarque=$Livr->getRemarque();
       $datas = array( ':idlivreur'=>$idlivreur, ':nom'=>$nom,':prenom'=>$prenom,':disp'=>$disp,':remarque'=>$remarque);
		$req->BindValue(':idlivreur',$idlivreur);
		$req->BindValue(':nom',$nom);
		$req->BindValue(':prenom',$prenom);
		$req->BindValue(':disp',$disp);
		$req->BindValue(':remarque',$remarque);
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
		
	}

	function recupererlivreur($idlivreur){
		$sql="SELECT * from livreur where idlivreur=$idlivreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	function rechercherListelivreur($idlivreur){
		$sql="SELECT * from livreur where idlivreur=$livreur";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
}

?>

