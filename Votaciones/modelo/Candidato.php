<?php



class Candidato{
	
	private $id;
	private $Ntarjeton;
	private $totalVotos;
	private $foto;
	private $usuario;
	
	function __construct() {
		$this->id = null;
		$this->Ntarjeton = null;
		$this->totalVotos = null;
		$this->foto = null;
		$this->usuario = null;
	}
	
	
	public function setId($id){
        $this->id = $id;
    }
    
    public function getId(){
        return $this->id;
    }
	
	public function setNtarjeton($Ntarjeton){
        $this->Ntarjeton = $Ntarjeton;
    }
    
    public function getNtarjeton(){
        return $this->Ntarjeton;
    }
	
	public function setTotalVototos($totalVotos){
        $this->totalVotos = $totalVotos;
    }
    
    public function getTotalVotos(){
        return $this->totalVotos;
    }
	
	public function setFoto($foto){
        $this->foto = $foto;
    }
    
    public function getFoto(){
        return $this->foto;
    }
	
	public function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    
    public function getUsusario(){
        return $this->usuario;
    }
}
?>