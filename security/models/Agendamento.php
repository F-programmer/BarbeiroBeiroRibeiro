<?php

class Agendamento
{
	private $idCliente;
	private $idServico;
	private $dtAgendamento;
	private $horarioAgendamento;

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
	
	public function getHorarioAgendamento()
	{
		return $this->horarioAgendamento;
	}

	public function setHorarioAgendamento($horarioAgendamento)
	{
		$this->horarioAgendamento = $horarioAgendamento;
	}


	public function __construct(
		$idCliente,
		$idServico,
		$dtAgendamento,
		$horarioAgendamento
	) {
		$this->idCliente = $idCliente;
		$this->idServico = $idServico;
		$this->dtAgendamento = $dtAgendamento;
		$this->horarioAgendamento = $horarioAgendamento;
	}

	public function cadastrar()
	{
		$conexao = Conexao::pegarConexao();

		$stmt = $conexao->prepare(
			"INSERT INTO tbagendamento (idCliente, idServico, dtAgendamento,horarioAgendamento)
			VALUES(?,?,?,?)
			"
		);

		$stmt->bindValue(1, $this->idCliente);
		$stmt->bindValue(2, $this->idServico);
		$stmt->bindValue(3, $this->dtAgendamento);
		$stmt->bindValue(4, $this->horarioAgendamento);

		$stmt->execute();
		
	}
}