<?
class Node
{
	public $data;
	
	function __construct()
	{
		$this->data=array
					(
						"index"=>-1,
						"label"=>"",
						"children"=>array(),
						"parent"=>-1,
						"completed"=>false,
						"prerequisites"=>array(),
						"deadline"=>NULL,
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
	
	public static function arrayToNode(&$array) 
	{
		
		$ret = new Node();
		foreach (array_keys($ret->data) as $key) 
			if($key=="notes" || $key=="prerequisites" || $key=="children")
				$ret->set($key,unserialize($array[$key]));
			else
				$ret->set($key,$array[$key]);
		return $ret;
	}
	public function getData(){return $this->data;}
	public static function getFields()
	{
		return array("index","label","children","parent","completed","prerequisites","dealine","notes");
	}
}
?>
