<?php
require_once("cabecalho.php");
require_once("class/ProdutoDAO.php");

$categoria = new Categoria();
$categoria->setId($_POST['categoria_id']);


$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];

if(array_key_exists('usado', $_POST)) {
	$usado = "true";
} else {
	$usado = "false";
}

$produtoDao = new ProdutoDao($conexao);
$produto = new Produto($nome, $preco, $descricao, $categoria, $usado);
$produto->setId($_POST['id']);


if($produtoDao->alteraProduto($produto)) { ?>
	<p class="text-success">O produto <?= $produto->getNome() ?>, <?= $produto->getPreco() ?> foi alterado.</p>
<?php 
} else {
	$msg = mysqli_error($conexao);
?>
	<p class="text-danger">O produto <?= $produto->getNome() ?> não foi alterado: <?= $msg?></p>
<?php
}
?>

<?php include("rodape.php"); ?>