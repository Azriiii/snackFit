<?PHP
class Livr{
	private $idLivreur;
	private $nom;
	private $prenom;
	private $disp;
	private $remarque;
	function __construct($idLivreur,$nom,$prenom,$disp,$remarque){
		$this->idLivreur=$idLivreur;
		$this->nom=$nom;
		$this->prenom=$prenom;
		$this->disp=$disp;
		$this->remarque=$remarque;
	}
	
	function getIdlivreur(){
		return $this->idLivreur;
	}
	function getNom(){
		return $this->nom;
	}
	function getPrenom(){
		return $this->prenom;
	}
	function getDisp(){
		return $this->disp;
	}
	function getRemarque(){
		return $this->remarque;
	}

	function setIdlivreur($idLivreur){
		$this->idLivreur=$idLivreur;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPrenom($prenom){
		$this->prenom=$prenom;
	}
	function setDisp($disp){
		$this->disp=$disp;
	}
	function setRemarque($remarque){
		$this->remarque=$remarque;
	}
	
}

?>