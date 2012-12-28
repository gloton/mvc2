<?php 
	include_once("controller/Controller.php");
#inicio# a esto se le llama handler segun http://www.youtube.com/watch?v=ei3WxF55r8c
	$controller = new Controller();
	$controller->invoke();
#fin# a esto se le llama handler
?>