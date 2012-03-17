<?
class DatabaseEngine
{
	private $connection;
	function __construct($server,$user,$pass,$db)
	{
		$this->connection = mysql_connect($server,$user,$pass);
		mysql_select_db($db, $this->connection);
		if (!$this->connection)
  			die('Could not connect: ' . mysql_error());
  		
		
	}
	function close()
	{
		if($this->connection)
			mysql_close($this->connection);
	}
	/*
		USE:
		$Table="Node"
		array
		(
			"index"=>"NULL",
			"label"=>"'testLabel'",
			"parent"=>"'0'",
			"completed"=>"'0'",
			"children"=>"''",
			"prerequisites"=>"''",
			"deadline"=>"''",
			"notes"=>"'testNote'"
		
		);
		
		yields
		
		INSERT INTO `TaskForce`.`Nodes` (`index`, `label`, `parent`, `completed`, `children`, `prerequisites`, `deadline`, `notes`) VALUES (NULL, 'testLabel', '0', '0', '', '', '', 'hjkjb');
	*/
	function insert($table,$array)
	{
		$q="INSERT INTO `".$table."` (`";
		$q.=implode("`, `",array_keys($array));
		$q.="`) VALUES (";
		$q.=implode(",",array_values($array));
		$q.=");";
		echo $q;
	}
	
	/*
		Quereies the database table with the given parameters and returns $result
		@param $table String The name of the table
		@param $field String (Optional) For specifying a Column to filter
		@param $value String (Optional) For specifying a value fo the column to fulter
		@ret array() : $result
	*/
	function getRows($table,$field="",$value="")
	{
		
		$q="SELECT * From ".$table;
		if(strlen($field)>0)
			$q.=" WHERE `".$field."`='".$value."'";
		echo $q;
		return mysql_query($q);
	}
}
?>
