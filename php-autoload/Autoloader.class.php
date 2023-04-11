<?php 

class Autoloader {

	private $diretorio;
		
	public function __construct($diretorio){
		$this->diretorio = $diretorio;
		echo '<div><p>Autoloader loaded...</p></di</div>';
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

//spl_autoload_register(array(new Autoloader('classes/'), 'autoload'));
//spl_autoload_register(array(new Autoloader('../classes/'), 'autoload'));

?>