<?
require("classes/node.php");
require("engine.php");
require("view.php");
$engine = new Engine();
$view = new View();
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    // …
}
else
{
	$req[]=$_GET["control"];
	$req[]=$_GET["index"];
	$fields=
	$fields=$_GET["fields"];
	$viewVars[]=$fields.explode("-");
	$viewVars[]=$engine->get($req);
	$viewVars[]=$_GET["idPrefix"];
	$view->get($viewVars);
	
}

?>
