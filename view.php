<?
class View
{
	/*
	[0]= control (type of view)
	[1]= array() -> fields to view\
	[2]= data
	*/
	public function get(&$request)
	{
		$ret = "NONE";
		$fields=$request[0];
		$nodes = $request[1];
		$idPrefix=$request[2];
		
		if(isset($nodes))
		{
			$ret="";
			foreach($nodes as $node)
			{
			
				$ret.="<li id=\"".$idPrefix."_".$node->get("index")."\">".$node->get("label")."</li>";
			}	
		}
		echo $ret;
	}
}
?>
