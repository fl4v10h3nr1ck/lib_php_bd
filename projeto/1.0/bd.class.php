<?php




class bd{


private 				$servidor;
private  				$usuario;
private  				$senha;
private  				$banco;
private  				$con;







	function __construct(){
	
	$this->servidor 					= 'localhost';
	$this->banco						= 'icart_bd';
	$this->usuario						= 'root';
	$this->senha						= '';
	}


	
	
	
	
	
	private final function conecta(){
	
	$this->con = mysql_connect($this->servidor,$this->usuario,$this->senha);
	
	if( !$this->con)
	return false;
	
	if(!mysql_select_db($this->banco))
	return false;
	
	//importante para a saída com acentuacao via BD
	mysql_query("SET NAMES 'utf8'");
	mysql_query('SET character_set_connection=utf8');
	mysql_query('SET character_set_client=utf8');
	mysql_query('SET character_set_results=utf8');
	return $this->con;
	}
	
	
	
	
	

	
	
	
	public final function getReferencia(){
	
	if($this->con==null)
	return $this->conecta();	
	
	return $this->con;
	}
	
	
	
	
	
	

	
	
	public final function desconecta(){
	
	if($this->con!=null)
	mysql_close($con);
	}
	
	
	
	
	
}
?>