<?
	require("classes/node.php");
	
	require("engine.php");
	/*$test  = new Node();
	
	echo "<br>";
	$test->set("index",3);
	//print_r($test->data);
	
	$db = new DatabaseEngine("localhost","root","kingdom","TaskForce");
	
	$a = array
		(
			"index"=>"NULL",
			"label"=>"'testLabel'",
			"parent"=>"'0'",
			"completed"=>"'0'",
			"children"=>array(1,2,3,4),
			"prerequisites"=>array(5,6,7,8),
			"deadline"=>"''",
			"notes"=>array(9,10,11,12)
		);
	//$db->insert("Nodes",$a);
	/*
	echo "<br><br>";
	$db->getRows("Nodes");
	echo "<br><br>";
	$db->getRows("Nodes","index","0");
	
	 $n2=Node::queryToNode($a);
	print_r($n2->data);
	*/
	
	
	$engine = new Engine();
	
	$req[]="list";
	$req[]="1";
	$list=$engine->get($req);
	//$list=$engine->queryToNodes("Nodes","index",1);
	print_r($list);
	$root=$list[0];

	if(sizeof($root->get("children"))==0)
		echo "NO CHILDREN";
		
?>
