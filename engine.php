<?
require("databaseEngine.php");
class Engine
{
	private $dE;
	function __construct()
	{
		$dE= new DatabaseEngine();
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
}
?>
