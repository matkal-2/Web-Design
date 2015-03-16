<?php
require_once 'core/App.php';
echo "heyo init";
try{
	require_once 'core/Controller.php';
}
catch (Exception $e){
 echo $e->getMessage();
}


$app = new App;