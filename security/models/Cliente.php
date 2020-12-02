<?php

class Cliente
{
	private $idCliente;
	private $nomeCliente;
	private $cpfCliente;
	private $emailCliente;
	private $foneCliente;

	public function getIdCliente()
	{
		return $this->idCliente;
	}

	public function setIdCliente($idCliente)
	{
		$this->idCliente = $idCliente;
	}

	public function getNomeCliente()
	{
		return $this->nomeCliente;
	}

	public function setNomeCliente($nomeCliente)
	{
		$this->nomeCliente = $nomeCliente;
	}

	public function getCpfCliente()
	{
		return $this->cpfCliente;
	}

	public function setCpfCliente($cpfCliente)
	{
		$this->cpfCliente = $cpfCliente;
	}

	public function getEmailCliente()
	{
		return $this->emailCliente;
	}

	public function setEmailCliente($emailCliente)
	{
		$this->emailCliente = $emailCliente;
	}

	public function getFoneCliente()
	{
		return $this->foneCliente;
	}

	public function setFoneCliente($foneCliente)
	{
		$this->foneCliente = $foneCliente;
	}

	public function cadastrar($cliente)
	{
		$conexao = Conexao::pegarConexao();

		$stmt = $conexao->prepare(
			"INSERT INTO tbcliente (nomecliente, cpfCliente, emailCliente, foneCliente)
			VALUES(?,?,?,?)
			");

		$stmt->bindValue(1, $cliente->getNomeCliente());
		$stmt->bindValue(2, $cliente->getCpfCliente());
		$stmt->bindValue(3, $cliente->getEmailCliente());
		$stmt->bindValue(4, $cliente->getFoneCliente());
		$stmt->execute();

		return 'Cadastro realizado com sucesso';
	}
}
