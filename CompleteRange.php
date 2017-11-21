<?php

/**
*
*/
class CompleteRange
{
	var $serieFinal="";
	
	function __construct()
	{
		# code...
	}

	public function build($vLista)
	{
		$sw=0;
		echo "Esta es la Serie ingresada: ".$vLista . "<br/>";
		$list= split(",", $vLista) ;
		$countList = count($list);
		for ($i=0; $i < $countList; $i++) 
		{
			// solo numeros positivos
			if ( !preg_match("/^[0-9]*$/", $list[$i]) )
			{
				$sw=1;
				echo "Aviso: Favor de ingresar sólo Números positivos.";
				exit;
			}
		}
		
		// Verifica Lista Ascendente
		if ($sw==0) 
		{
			$j=0;
			for ($i=0; $i < $countList; $i++) 
			{
				$item = $list[$i];
				$j = $i+1;
				if ( $j >= $countList ) 
				{
					$j=$countList-1 ;
					break;
				}
				
				$itemSig= $list[$j];
				
				if ( $item >= $itemSig )
				{
					echo "Aviso: Favor de ingresar una lista Ascendente.";
					$sw=0;
					break;
				}
				while ( $item < $itemSig ) 
				{
					if ( $item >= $itemSig )
					{
						echo "Aviso: Favor de ingresar una lista Ascendente.";
						$sw=0;
						break;
					}
					$j = $j+1;
					if ( $j >= $countList ) 
					{
						$j=$countList-1 ;
						break;
					}
					$itemSig= $list[$j];
				}
				$sw=1;
			}
			if ($sw==1) $sw=2;
		}
		
		// Genera Serie secuencial
		if ($sw==2) 
		{
			$ini = $list[0];
			$fin = $list[$countList-1];
			
			for ($i=$ini; $i<=$fin; $i++)
			{
				$this->serieFinal .= $i .",";
			}
			
			echo "Esta es la Serie Final: ";
			echo substr($this->serieFinal,0,strlen($this->serieFinal)-1) ; 
		}
	}
}

$obj = new CompleteRange;

$obj->build('55,58,60');