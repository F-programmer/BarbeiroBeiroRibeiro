<?php
class Imagen
{
	private $nome;
	private $url;
	private $descricao;

	public function setNome($nome)
	{
		$this->nome = $nome;
	}
	public function getNome()
	{
		return $this->nome;
	}
	public function setUrl($url)
	{
		$this->url = $url;
	}
	public function getUrl()
	{
		return $this->url;
	}
	public function setDescricao($descricao)
	{
		$this->descricao = $descricao;
	}
	public function getDescricao()
	{
		return $this->descricao;
	}

	public function __construct(
		$nome,
		$url,
		$descricao
	) {
		$this->setNome($nome);
		$this->setUrl($url);
		$this->setDescricao($descricao);
	}

	public function cadastrar($idServico)
	{
		$connection = Conexao::pegarConexao();
		$stmt = $connection->prepare(
			"INSERT INTO tbImagens (nomeImagem, urlImagem, descImagem)
			VALUES(?, ?, ?)
		"
		);

		$stmt->bindValue(1, $this->getNome());
		$stmt->bindValue(2, $this->getUrl());
		$stmt->bindValue(3, $this->getDescricao());

		if ($stmt->execute()) return $this->cadastrarForeignKey($idServico);
	}

	public function cadastrarForeignKey($idServico)
	{
		// pegando o ultimo item cadastrado
		$connection = Conexao::pegarConexao();
		$lastIdServico = $connection->query("SELECT MAX(idImagem) FROM tbImagens");
		$item = $lastIdServico->fetchAll();

		$stmt = $connection->prepare(
			"INSERT INTO tbServicoImagen(idServico, idImagem)
			VALUES(?, ?)
		");
		$stmt->bindValue(1, $idServico);
		$stmt->bindValue(2, $item[0][0]);

		return $stmt->execute();
	}
}


