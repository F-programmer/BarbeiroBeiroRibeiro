<?php

class Conexao
{
	public static function pegarConexao()
	{
		//conexão local
		$conexao = new PDO(
			/*	"mysql:host=localhost;dbname=bdbarbearia",
			"root",    fdb30.awardspace.net
			""*/
			"mysql:host=localhost;
			dbname=bdBarbearia",
			"root",
			""
		);

		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexao->exec("SET CHARACTER SET utf8");

		return $conexao;
	}
}