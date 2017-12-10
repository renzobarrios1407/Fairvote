<?php


class Usuario {

    
	private $id;
	private $usuario;
	private $password;
	private $tipo;
	private $nombre;
	private $curso;
	private $foto;
	private $isvoto;
	private $institucion;
    
	
	function __construct() {
		$this->id = null;
		$this->usuario = null;
		$this->password = null;
		$this->tipo = null;
		$this->nombre = null;
		$this->curso = null;
		$this->foto = null;
		$this->isvoto = null;
		$this->institucion = null;
		
	}
	
	public function setId($id){
        $this->id = $id;
    }
    
    public function getId(){
        return $this->id;
    }
	
	public function setUsuario($usuario){
        $this->usuario = $usuario;
    }
    
    public function getUsuario(){
        return $this->usuario;
	}
	
	public function setPassword($password){
        $this->password = $password;
    }
    
    public function getPassword(){
        return $this->password;
	}
	
	public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    
    public function getTipo(){
        return $this->tipo;
	}
	
	public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    
    public function getNombre(){
        return $this->nombre;
	}
	
	public function setCurso($curso){
        $this->curso = $curso;
    }
    
    public function getCurso(){
        return $this->curso;
	}
	
	public function setFoto($foto){
        $this->foto = $foto;
    }
    
    public function getFoto(){
        return $this->foto;
	}
	
	public function setIsvoto($isvoto){
        $this->isvotosvoto = $isvoto;
    }
    
    public function getIsvoto(){
        return $this->isvoto;
	}
	
	public function setInstitucion($Institucion){
        $this->institucion = $institucion;
    }
    
    public function getInstitucion(){
        return $this->institucion;
		}
	
	
	
	
	
		}



?>