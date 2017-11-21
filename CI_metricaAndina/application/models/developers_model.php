<?php
class Developers_model extends CI_Model
{
	var $dataJson;
	var $dataArray;
	var $listResult;

    /**
    * Responsable for auto load the database
    * @return void
    */
    public function __construct()
    {
        /*$this->dataJson = file_get_contents('https://drive.google.com/file/d/0B8NYMqSaJBAmdmpZYVBIdzlHVEk/view');

        $this->dataArray = json_decode($this->dataJson);

        return $this->dataArray;*/
    }

    public function getData($search_string=null)
    {
        //$this->dataJson = file_get_contents('https://drive.google.com/file/d/0B8NYMqSaJBAmdmpZYVBIdzlHVEk/view/employees.json');
        $this->dataJson = file_get_contents('data/employees.json');

        $this->dataArray = json_decode($this->dataJson, true);

        //print_r($this->dataArray[0]["name"]);

        if($search_string)
        {
        	$arrayResult;
        	$i=0;
			foreach(  $this->dataArray as $obj ) {

		    	if ($obj['email']== trim($search_string) )
		    	{
		    		$arrayResult[$i]['name'] =$obj['name'];
		    		$arrayResult[$i]['email'] =$obj['email'];
		    		$arrayResult[$i]['position'] =$obj['position'];
		    		$arrayResult[$i]['salary'] =$obj['salary'];
		    		$i++;
		    	}

		  	}
		  	$this->listResult = $arrayResult ;

		} else {
			$this->listResult = $this->dataArray ;
		}

        return $this->listResult;
    }


}
?>