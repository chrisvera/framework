<?php 
/**
 * metodo autoload
 * @param type $className 
 * @return type
 */
function __autoload($className){
	require_once(ROOT."libs".DS.$className.".php");
}
 ?>