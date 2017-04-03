<?php 

class ChangeString
{
	function build($entrada){
		$salida="";
		$cadena = preg_split('//u',$entrada, -1, PREG_SPLIT_NO_EMPTY);
		for ($i=0; $i <count($cadena) ; $i++) { 
				$letra=(integer)(ord($cadena[$i]));
				$letra+=1; // la siguiente letra del abecedario
				if ($letra==111) { // n + 1 posicion
					$salida.="ñ"; // se muestra ñ
				}elseif ($letra==79) {// N + 1 posicion
					$salida.="Ñ"; // se muestra ñ
				}elseif ((64<$letra && $letra <91)||(96<$letra && $letra <123) ) {
					$salida.=chr($letra);
				}elseif ($letra==91) {//Z + 1 posicion
					$salida.=chr(65); // se muestra A
				}elseif ($letra==123) {//z + 1 posicion
					$salida.=chr(97); // se muestra a
				}elseif ($letra==196) { // ñ,Ñ + 1 posicion
					if ($cadena[$i]=='Ñ') {
						$salida.=chr(79); // se muestra O
					}else{// ñ
						$salida.=chr(111); // se muestra o 
					}
				}else {
					$salida.=$cadena[$i];
				}
			 
		}
		return $salida;
	}
}

?>