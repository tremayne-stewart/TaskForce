<?
	require("classes/node.php");
	$test  = new Node();
	
	echo "<br>";
	$test->set("index",3);
	print_r($test->data);
	
?>
