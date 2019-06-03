<?php

	namespace Controllers;

	class ContatoController
	{
		public function execute(){
			$title = "Contato";
			$content = "contato.php";

			include "Template/template.php";
		}
	}

?>