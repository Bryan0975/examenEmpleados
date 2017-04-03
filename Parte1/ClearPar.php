<?php 

class ClearPar
{
	function build($entrada){
		$indicador=array();
		$cadena = preg_split('//u',$entrada, -1, PREG_SPLIT_NO_EMPTY);
		for ($q=0; $q <count($cadena) ; $q++) { 
			$indicador[$q]=-1;
		}
		for ($i=0; $i < count($cadena) ; $i++) { 
			if ( $cadena[$i]=='(') {
				$indicador[$i]=0;
			}elseif ($cadena[$i]==')') {
				for ($j=$i-1; $j >=0 ; $j--) { 
					if ($indicador[$j]==0) {
						$indicador[$j]=1;
						$indicador[$i]=1;
						break;
					}
				}
				
			}
		}

		$resultado=array();
		$i=0;
		for ($m=0; $m <count($indicador) ; $m++) { 
			if ($indicador[$m]==1) {
				$resultado[$i]=$cadena[$m];
				$i++;
			}
			
		}
		return $resultado;
		
	}
	
}

?>


