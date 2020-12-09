<?php

class Agendamento
{
	private $idCliente;
	private $idServico;
	private $dtAgendamento;
	private $valorAgendamento;

	public function getIdCliente()
	{
		return $this->idCliente;
	}

	public function setIdCliente($idCliente)
	{
		$this->idCliente = $idCliente;
	}

	public function getIdServico()
	{
		return $this->idServico;
	}

	public function setIdSevico($idServico)
	{
		$this->idServico = $idServico;
	}

	public function getDtAgendamento()
	{
		return $this->dtAgendamento;
	}

	public function setDtAgendamento($dtAgendamento)
	{
		$this->dtAgendamento = $dtAgendamento;
	}

	public function getValorAgendamento()
	{
		return $this->valorAgendamento;
	}

	public function setValorAgendamento($valorAgendamento)
	{
		$this->valorAgendamento = $valorAgendamento;
	}

	public function __construct(
		$idCliente,
		$idServico,
		$dtAgendamento,
		$valorAgendamento
	) {
		$this->idCliente = $idCliente;
		$this->idServico = $idServico;
		$this->dtAgendamento = $dtAgendamento;
		$this->valorAgendamento = $valorAgendamento;
	}

	public function cadastrar()
	{
		$conexao = Conexao::pegarConexao();

		$stmt = $conexao->prepare(
			"INSERT INTO tbagendamento (idCliente, idServico, dtAgendamento, valorAgendamento)
			VALUES(?,?,?,?)
			"
		);

		$stmt->bindValue(1, $this->idCliente);
		$stmt->bindValue(2, $this->idServico);
		$stmt->bindValue(3, $this->dtAgendamento);
		$stmt->bindValue(4, $this->valorAgendamento);

		$results = $stmt->execute();

		return $results == 1 ? true : false;
	}
}