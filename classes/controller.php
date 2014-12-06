<?php
	class Controller {
		private $action;
		private $id;
		private $daten = array();
		private $template="site"; // Template der gesamten Seite
		
		public function __construct($arrRequest) {
				$this->action = $arrRequest['action'];
		}
		
		public function display() {
			$view = new View(); // äussere View
			$contentView = new View();
			$this->daten['menu'] = Model::getMenu();
				switch($this->action) {
					case "liste":
						// Methode aus Model wird aufgerufen
						// ohne Instanz
						$this->daten['content'] = Model::getDaten();
						$contentView->setDaten($this->daten['content']); // gibt Daten an Innerview
						$contentView->setTemplate("liste"); // gibt Template an Innerview
						break;
					case "inputform":
						$contentView->setTemplate("inputform");
						break;
					case "inputformprocessing":
						$z = Model::setDaten($_REQUEST['vorname'],$_REQUEST['nachname'],$_REQUEST['alter']);
						$this->daten['content'] = Model::getDataset($z);
						$contentView->setDaten($this->daten['content']); 
						$contentView->setTemplate("oneDataset"); // gibt Template an Innerview
						break;
					case "delete":
						echo "delete";
						break;
					default:
						// Template "home" mit Text für Default
						// Textausgaben: "Programm zur Datenverwaltung
						$contentView->setTemplate("home");
						break;
			}
			// wir laden das Template der inneren View und schieben
			// die entstandenen Daten in die äußeren View
			$view->setDaten(
				   array("content"=>$contentView->loadTemplate(),"menu"=>$this->daten['menu'])
				);
			// wir laden das Template der äußeren View
			$output = $view->loadTemplate();
			if($output)				
				echo $output;
			else
				echo "Fehler";
			
		}
	}
?>
