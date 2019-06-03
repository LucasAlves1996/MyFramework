<?php

	namespace Controllers;

	class LoginController
	{
		public function execute(){
			$title = "Login";
			$content = "login.php";

			include "Template/template.php";
		}
	}

?>