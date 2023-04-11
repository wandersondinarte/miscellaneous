<?php 

class Autoloader {

	private $diretorio;
	
	//Carrega a classe e recebe o diretório de onde estão localizadas as classes
	public function __construct($diretorio){
		$this->diretorio = $diretorio;
	}
	
	//Monta o caminho da classe e verifica se mesmo existe, se existe adiciona a classe com a função include()
	public function autoload($class) { 

		$arquivo = $this->getDiretorio().$class.'.class.php';

		if (file_exists($arquivo)) {
            include ($arquivo);
		} else {
            return false;
        }

	}

	//Retorna o caminho do diretório da classe
	function getDiretorio() {
		return $this->diretorio;
	}

}

?>