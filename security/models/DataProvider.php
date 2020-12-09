<?php
class DataProvider {
	// pegar todos os servico
	public static function listarServicos() {
		$connection = Conexao::pegarConexao();
		$query = $connection->query("SELECT * FROM tbservico");
		$retorno = [];
		if ($query->rowCount() > 0) {
			foreach ($query->fetchAll() as &$line) {
				$item = [$line['idServico'], $line['descricaoServico']];
				$retorno[] = $item;
			}
		}
		return $retorno;
	}
	// pegar todas as imagens
	public static function listarImagens() {
		$connection = Conexao::pegarConexao();
		$query = $connection->query(
			"SELECT
			 nomeImagem,
			 urlImagem,
			 descImagem,
			 tbservico.descricaoServico
			 FROM tbimagens
				INNER JOIN tbservicoimagen
					ON tbimagens.idImagem = tbservicoimagen.idImagem
						INNER JOIN tbservico
							ON tbservicoimagen.idServico = tbservico.idServico
								GROUP BY tbimagens.nomeImagem
								");
		$result = array();
		foreach ($query->fetchAll() as &$item) {
			$line = array();
			$line['nomeImagem'] = $item['nomeImagem'];
			$line['urlImagem'] = $item['urlImagem'];
			$line['descImagem'] = $item['descImagem'];
			$line['descricaoServico'] = $item['descricaoServico'];
			$result[] = $line;
		}
		return $result;
	}
}