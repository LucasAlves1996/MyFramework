<?php

	namespace Controllers;

	class HomeController
	{ 
		public function execute(){
			$title = "Início";
			$content = "inicio.php";

			include "Template/template.php";
		}
	}

?>