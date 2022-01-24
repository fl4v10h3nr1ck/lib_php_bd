<?php



/** @AnotTabela(nome="teste", prefixo="tst") */
final class teste{


/** @AnotCampo(nome="id_teste", tipo="int", ehId=true) */
public $id;

/** @AnotCampo(nome="nome") */
public $nome;

/** @AnotCampo(nome="email") */
public $email;

/** @AnotCampo(nome="status", tipo="char") */
public $stts;

/** @AnotCampo(nome="data", tipo="data") */
public $data_cad;




}
?>