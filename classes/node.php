<?
class Node
{
	public $data;
	function __construct()
	{
		$this->data=array
					(
						"index"=>-1,
						"label"=>"testLabwl",
						"children"=>array(),
						"parent"=>-1,
						"completed"=>false,
						"prerequisites"=>array(),
						"date"=>NULL,
						"notes"=>array()
						
					);
	}
	function set($field,$value)
	{
		if(in_array($field,array_keys($this->data)))
		{
			$this->data[$field]=$value;	
			return true;
		}	
		return false;
	}
	function get($field)
	{
		return $this->data[$field];
	}
}
?>
