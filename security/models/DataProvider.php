<?php
class DataProvider {
	// pegar todos os servico
	public static function listarServicos() {
		$connection = Conexao::pegarConexao();
		$query = $connection->query("SELECT * FROM tbServico");
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
			 tbServico.descricaoServico
			 FROM tbImagens
				INNER JOIN tbServicoImagen
					ON tbImagens.idImagem = tbServicoImagen.idImagen
						INNER JOIN tbServico
							ON tbServicoImagen.idServico = tbServico.idServico
								GROUP BY tbImagens.nomeImagem
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