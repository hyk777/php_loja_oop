<?php
require_once("cabecalho.php");
require_once("banco-produto.php"); 
require_once("logica-usuario.php");
require_once("class/ProdutoDAO.php");

$produtoDao = new ProdutoDao($conexao);
$id = $_POST['id'];
$produtoDao->removeProduto($id);
$_SESSION["success"] = "Produto removido com sucesso.";
header("Location: produto-lista.php");
die();

?>