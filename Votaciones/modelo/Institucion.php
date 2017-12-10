<?php

/**
 * 
 */
class Institucion {
	
	private $nombre;
	private $nit;
	private $direccion;
	private $email;
	private $telefono;
	private $foto;
	private $user;
	private $password;
	
	function __construct() {
		$this->nombre = null;
		$this->nit = null;
		$this->direccion = null;
		$this->email = null;
		$this->telefono = null;
		$this->foto = null;
		$this->user = null;
		$this->password = null;
	}
	
	public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function getNombre(){
        return $this->nombre;
    }
	
	public function setNit($nit){
        $this->nit = $nit;
    }
    
    public function getNit(){
        return $this->nit;
    }
	
	public function setDireccion($direccion){
        $this->direccion = $direccion;
    }
    
    public function getDireccion(){
        return $this->direccion;
    }
	
	public function setEmail($email){
        $this->email = $email;
    }
    
    public function getEmail(){
        return $this->email;
    }
	
	public function setTelefono($telefono){
        $this->telefono = $telefono;
    }
    
    public function getTelefono(){
        return $this->telefono;
    }
	
	public function setFoto($foto){
        $this->foto = $foto;
    }
    
    public function getFoto(){
        return $this->foto;
    }
	
	public function setUser($user){
        $this->user = $user;
    }
    
    public function getUser(){
        return $this->user;
    }
	
	public function setPassword($password){
        $this->password = $password;
    }
    
    public function getPassword(){
        return $this->password;
    }
}

?>
