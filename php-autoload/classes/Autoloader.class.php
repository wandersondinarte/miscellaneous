<?php 

class Autoloader {

	private $diretorio;
		
	public function __construct($diretorio){
		$this->diretorio = $diretorio;
	}
	
	public function autoload($class) { 

		$arquivo = $this->getDiretorio().$class.'.class.php';

		if (file_exists($arquivo)) {
            include ($arquivo);
		} else {
            return false;
        }

	}

	function getDiretorio() {
		return $this->diretorio;
	}

}

?>