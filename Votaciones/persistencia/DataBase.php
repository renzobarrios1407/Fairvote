<?php

/* Clase encargada de gestionar las conexiones a la base de datos */
require_once realpath(dirname(__FILE__)) ."/Conf_Persistence.php";

class DataBase {

    private $server;
    private $user;
    private $password;
    private $DataBase_Persistence;
    private $link;
    private $stmt;
    private $array;
    private static $_instance;

    /* La funci?n construct es privada para evitar que el objeto pueda ser creado mediante new */

    private function __construct() {
        $this->setConection();
        $this->conect();
		
    }

    /* M?todo para establecer los par?metros de la conexi?n */

    private function setConection() {
        $conf = Conf_Persistence::getInstance();
        $this->server = $conf->getHostDB();
        $this->DataBase_Persistence = $conf->getDB();
        $this->user = $conf->getUserDB();
        $this->password = $conf->getPassDB();
    }

    /* Evitamos el clonaje del objeto_ Patr?n Singleton */

    private function __clone() {
        
    }

    /* Funci?n encargada de crear, si es necesario, el objeto_ Esta es la funci?n que debemos llamar desde fuera de la clase para instanciar el objeto, y as?, poder utilizar sus m?todos */

    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /* Realiza la conexi?n a la base de datos_ */

    private function conect() {
        if (!($this->link = mysqli_connect($this->server, $this->user, $this->password))) {
            echo "Error connecting to DataBase_Persistence";
            exit();
        }
        if (!mysqli_select_db($this->link,$this->DataBase_Persistence)) {
            echo "Error selecting DataBase_Persistence";
            exit();
        }
    }

    /* M?todo para ejecutar una sentencia sql */

    
    
    public function run($sql) {    	
    	//@mysqli_query("SET NAMES 'utf8'");
    	
        $this->stmt = mysqli_query($this->link, $sql);    
        return $this->stmt;
    }

    /* Metodo para obtener el numero de filas de una sentencia sql */

    public function getNumRows($stmt) {
        return mysqli_num_rows($stmt);
    }

    /* M?todo para obtener una fila de resultados de la sentencia sql */

    public function getRow($stmt, $fila) {
        if ($fila == 0) {
            $this->array = mysqli_fetch_array($stmt);
        } else {
            mysqli_data_seek($stmt, $fila);
            $this->array = mysqli_fetch_array($stmt);
        }
        return $this->array;
    }

}

?>