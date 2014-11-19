<?php
	class Controller
	{
		private $action;
		private $id;
		private $daten = array();
		private $template;
	
		public function __construct($action, $id, $template='site')
		{
			$this->action=$action;
			$this->id=$id;
			$this->template=$template;
		}
		public function display()
		{
			$view = new View($this->daten,$this->template);
			$contentView = new View();
			
			switch($this->action)
			{
				case "view":
					$this->daten['content']=Model::getDaten();
					$this->daten['menu']=Model::getMenu();
					$contentView->setDaten($this->daten['content']);
					$contentView->setTemplate("default");
					break;
				case "delete":
					echo "Delete";
					break;
				case "default":
					echo "Default";
					break;
			}
			$view->setDaten(array("content"=>$contentView->loadTemplate(),"menu"=>$this->daten['menu']));
			$output = $view->loadTemplate();
			if($output)
				echo $output;
			else
				echo "Fehler!";
		}
	}
?>
