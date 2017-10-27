<?php

// FAZENDO A CONEXAO
	$conexao=mysql_connect('localhost','root','bcd127');

	mysql_select_db('db_smartgames');
	mysql_set_charset('utf8');
	session_start();

?>
