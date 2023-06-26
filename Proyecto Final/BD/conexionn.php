
<?php
class conexionn extends PDO{
private $tipo_de_base='mysql';
private $host='localhost';
private $nombre_base='appweb';
private $usuario='root';
private $contrasena='';

public function __construct(){
try{
parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_base,$this->usuario,$this->contrasena);

//Cierre del try
}
catch(PDOException $e){
echo 'Ha surgido un error y no se puede conectar a la BD :'.$e->getMessage();
//Cierre del catch	
}



//Cierre del constructor
}

//Cierre de la clase
}
?>