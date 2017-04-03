<?php 

class CompleteRange
{
	function build($array){
		$arreglo=array();
		for ($i=0; $i+1 <count($array) ; $i++) { 
			for ($j=$array[$i]; $j<$array[$i+1] ; $j++) { 
				array_push($arreglo,$j);
			}
		}
		array_push($arreglo,($array[count($array)-1]));
		return $arreglo;
	}
	
}

?>


