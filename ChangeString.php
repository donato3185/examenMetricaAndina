<?php

/**
*
*/
class ChangeString
{
	var $item;
	var $itemAscii;
	var $nuevaFrase='';

	function __construct() {}

	public function build($vFrase)
	{
		$vLen= strlen($vFrase);
		echo "Esta es tu frase original: " . $vFrase ."<br/>";
		for ($i=0; $i < $vLen; $i++)
		{
			$item = substr($vFrase, $i,1 );

			// Solo abecedario
			if ( preg_match("/^[A-z]$/", $item) )
			{
				$itemAscii = ord($item);

				if ( preg_match("/^[A-Z]$/", $item) )
				{
					$item= ($itemAscii==90) ? 'A' : chr($itemAscii+1) ;
				}

				if ( preg_match("/^[a-z]$/", $item) )
				{
					$item= ($itemAscii==122) ? 'a' : chr($itemAscii+1) ;
				}

				#echo $itemAscii . '<br/>' ;

			}

			$this->nuevaFrase .= $item ;
		}

		echo "Esta es tu Nueva frase : " .  $this->nuevaFrase  ."<br/>";
	}
}

$obj = new ChangeString;

$obj->build('"**Casa 52"');