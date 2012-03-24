<?
require("databaseEngine.php");
class Engine
{
	private $de;
	function __construct()
	{
		$this->de=new DatabaseEngine("localhost","root","kingdom","TaskForce");
	}
	//$request[0] = control
    //$request[1] = index
	function get(&$request)
	{
		
		
		if($request[0]=="list")
		{
			if($request[1]=="all")
				return queryToNodes("Nodes");
			else if(is_numeric($request[1]))
				return $this->queryToNodes("Nodes","index","1");
				
			
			
		}
		else if($request[0]=="node");
			
		else if($request[0]=="note")
			return queryToNodes("Notes","index",$request[1]);
	}
	
	
	
	/*
		Quereies the database table with the given parameters, pareses and returns an array of Nodes that correspond with the array_keys
		@param $table String The name of the table
		@param $field String (Optional) For specifying a Column to filter
		@param $value String (Optional) For specifying a value fo the column to fulter
		@ret array(Node)
	*/
	function queryToNodes($table,$field="",$value="")
	{
		$result=$this->de->getRows($table,$field,$value);
		while($row = mysql_fetch_array($result))
		{
			
			$ret[]=Node::arrayToNode($row);				
		}	
		
		return $ret;
	}
}


?>
