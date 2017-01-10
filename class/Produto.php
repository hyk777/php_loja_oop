<?php

class Produto {

	public $id;
	public $nome;
	public $preco;
	public $descricao;
	public $categoria;
	public $usado;

	public function precoComDesconto($valor){
		return $this->preco - ($this->preco * $valor);
	}
}

?>