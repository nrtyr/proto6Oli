<?php 
error_reporting(E_ALL ^ E_DEPRECATED);
header('Content-Type: text/html; Charset=UTF-8');


$str = $_GET['term'];



if (strlen($str) > 6) {

	$db = new SQLite3("../data/tiempo.db");

	$cs = $db -> query("SELECT cCatastral FROM lineasMz WHERE cCatastral LIKE '%$_GET[term]%' ORDER BY cCatastral LIMIT 5;");
		    
	while($resul = $cs->fetchArray()) {
	  $return_arr[] =  $resul['cCatastral'];
	}
	echo json_encode($return_arr);

	$db -> close();

}







 ?>