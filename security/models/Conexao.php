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
			"mysql:host=fdb30.awardspace.net;
			dbname=3676945_bdbarbearia",
			"3676945_bdbarbearia",
			"3lB1g0d0n"); 

		$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conexao->exec("SET CHARACTER SET utf8");

		return $conexao;
	}
}
