<?
require("databaseEngine.php");
class Engine
{
	private $de;
	function __construct()
	{
		$this->de=new DatabaseEngine("localhost","root","kingdom","TaskForce");
	}
	function get(&$request)
	{
		//$request[0] = control
		//$request[1] = index
		if($request[0]=="list")
		{
			if($request[1]=="all")
			{
				
			}
			else if(is_numeric($request[1]))
			{
				
			}
		}
		else if($request[0]=="node");
		else if($request[0]=="note");
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
		$result=$this->de->getRows($table);
		while($row = mysql_fetch_array($result))
			$ret[]=Node::queryToNode($row);					
		return $ret;
	}
}
?>
