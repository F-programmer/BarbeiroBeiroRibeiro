<?php

class Servico
{
	private $idServico;
	private $descricaoServico;

	public function getIdServico()
	{
		return $this->idServico;
	}

	public function setIdCliente($idServico)
	{
		$this->idServico = $idServico;
	}


	public function getDescricaoServico()
	{
		return $this->descricaoServico;
	}

	public function setDescricaoServico($descricaoServico)
	{
		$this->descricaoServico = $descricaoServico;
	}

	public function __construct(
		$descricaoServico
	) {
		$this->setDescricaoServico($descricaoServico);
	}

	public function cadastrar()
	{
		$conexao = Conexao::pegarConexao();

		$stmt = $conexao->prepare(
			"INSERT INTO tbservico
      (descricaoServico)
			VALUES(?)
			"
		);

		$stmt->bindValue(1, $this->getDescricaoServico());
		$stmt->execute();
	}
}
