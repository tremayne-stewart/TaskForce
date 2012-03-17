<?
	require("classes/node.php");
	
	require("engine.php");
	$test  = new Node();
	
	echo "<br>";
	$test->set("index",3);
	print_r($test->data);
	
/*	$db = new DatabaseEngine("localhost","root","kingdom");
	echo "ff";
	$a = array
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
	$db->insert("Nodes",$a);
	
	echo "<br><br>";
	$db->getRows("Nodes");
	echo "<br><br>";
	$db->getRows("Nodes","index","0");
	
	 $n2=Node::queryToNode($a);
	print_r($n2->data);
	*/
	$engine = new Engine();
	$engine->queryToNodes("Nodes");
?>
