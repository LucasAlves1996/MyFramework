<?php

	namespace App;

	class Application
	{
		public function execute(){
			$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';

			$url = ucfirst($url);
			$url.= "Controller";
			if (file_exists('Controllers/'.$url.'.php'))
			{
				$className = 'Controllers\\'.$url;
				$controller = new $className;
				$controller->execute();
			}
			else
			{
				die("<h1>Essa página não existe!</h1>");
			}
		}
	}

?>