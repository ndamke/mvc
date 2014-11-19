<?php
	class View {
		private $daten;
		private $template='default';
		
		public function __construct ($daten='',$template='default') {
			$this->daten = $daten;
			$this->template = $template;
		}
		
		public function setDaten($daten) {
			$this->daten=$daten;
		}
		
		public function setTemplate($template) {
			$this->template=$template;
		}
		
		public function loadTemplate() {
			$tpl = $this->template; // default
			$file = './templates/'.$tpl.'.php';
			if(file_exists($file)) {
				ob_start();
				include $file; // Template wird in Puffer geladen
				$output = ob_get_contents(); // Puffer wird gelesen
				ob_end_clean(); // Puffer wird gelöscht
				return $output; // Rückgabe
			}
			else
				return false; // Template nicht gefunden
		}
		
		/*	public function show() {
			// Template wird ausgegeben
			$str = "<table>";
			foreach($this->daten as $key=>$value) {
				$str .= "<tr><td>$key</td><td>$value</td></tr>";
			}
			$str .= "</table>";
			return $str;
		}*/
	}
?>
