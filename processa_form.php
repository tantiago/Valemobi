<?php

// requerer db.php
require 'db.php';

// verificar se é POST
if('POST' === $_SERVER['REQUEST_METHOD']) {

	$db = new DB;
	$mercadoria_id = $db->insereMercadoria($_POST['tipo_mercadoria'], $_POST['nome_mercadoria']);

	$transacao_id = $db->insereTransacao($_POST['quantidade'],$_POST['preco'],$_POST['tipo_negocio'], date('Y-m-d H:i:s'),$mercadoria_id);

	if($transacao_id > 0) {

		header("Location: sucesso.php");
		exit;

	}

}
