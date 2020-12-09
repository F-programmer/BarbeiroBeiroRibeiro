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

	public function __construct(
		$nomeCliente,
		$cpfCliente,
		$emailCliente,
		$foneCliente
	) {
		$this->idCliente = 0;
		$this->nomeCliente = $nomeCliente;
		$this->cpfCliente = $cpfCliente;
		$this->emailCliente = $emailCliente;
		$this->foneCliente = $foneCliente;
	}

	public function cadastrar()
	{
		$connection = Conexao::pegarConexao();

		$stmt = $connection->prepare(
			"INSERT INTO tbcliente (nomecliente, cpfCliente, emailCliente)
			VALUES(?,?,?)
			"
		);


		$stmt->bindValue(1, $this->getNomeCliente());
		$stmt->bindValue(2, $this->getCpfCliente());
		$stmt->bindValue(3, $this->getEmailCliente());
		$results = $stmt->execute();

		if ($results == 1) {
			$query = $connection->query("SELECT MAX(idCliente) FROM tbcliente");
			$idCliente = $query->fetchAll()[0][0];

			return $this->cadastrarTelefone($idCliente);
		}

		return false;
	}

	public function cadastrarTelefone($idCliente)
	{
		$connection = Conexao::pegarConexao();
		$stmt = $connection->prepare(
			"INSERT INTO tbTelefoneCliente (idCliente, numTelefone)
			VALUES(?,?)
			"
		);

		$stmt->bindValue(1, $idCliente);
		$stmt->bindValue(2, $this->foneCliente);

		$results =  $stmt->execute();

		return $results == 1 ? true : false;
	}
}