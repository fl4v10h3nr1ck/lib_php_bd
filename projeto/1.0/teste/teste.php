<?php

	

	
include_once 'teste.class.php';


$teste = new teste();
	
/*	
echo 
"id:     ".$teste->id."<br>".
"nome:   ".$teste->nome."<br>".
"email:  ".$teste->email."<br>".
"status: ".$teste->stts."<br>".
"data:   ".$teste->data_cad;

	
	
$teste->id  =1;
$teste->nome = "flávio henrique sousa";
$teste->email= "contato@mscsolucoes.com";
$teste->stts = 'b';
$teste->data_cad = "04/03/2017";	
	
	
echo 
"<br><br>
id:     ".$teste->id."<br>".
"nome:   ".$teste->nome."<br>".
"email:  ".$teste->email."<br>".
"status: ".$teste->stts."<br>".
"data:   ".$teste->data_cad;
*/

include_once $_SERVER['DOCUMENT_ROOT'].'/bd/projeto/1.0/BdUtil.class.php';


$bd = new BdUtil();



//$bd->altera($teste);

$re= $bd->getPorQuery(new teste(), null, null, null);



	if(count($re)>0){
		
	foreach($re as $teste){
			
			
		echo 
		"<br><br>
		id:     ".$teste->id."<br>".
		"nome:   ".$teste->nome."<br>".
		"email:  ".$teste->email."<br>".
		"status: ".$teste->stts."<br>".
		"data:   ".$teste->data_cad;	
		}
	}
	



?>