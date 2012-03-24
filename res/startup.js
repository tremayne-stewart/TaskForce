$(document).ready(function()
{
	
	//$("#viewport").css("display","none");
	$.get("engine.php",{control:"list",index:"1"}, function(data)
	{
		$("#viewport").html(data);
		alert(data);	
	});
	
	
	
	
	
});
