<?php 
require_once('ClearPar.php');
$cadena=")(";
$clase=new ClearPar();
$resultado=$clase->build($cadena);
for ($i=0; $i <count($resultado) ; $i++) { 
	echo $resultado[$i];
}
?>