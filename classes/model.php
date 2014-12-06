<?php
		class Model {
		/* private static $daten = 
			array(
				array("nachname"=>"Dieckhöner","vorname"=>"Christian","alter"=>19),
				array("nachname"=>"Hartweg","vorname"=>"Nicolas","alter"=>18),
				array("nachname"=>"Schnurbus","vorname"=>"Julien","alter"=>20),
				array("nachname"=>"Dick","vorname"=>"Alexander","alter"=>22),
				array("nachname"=>"Reiz","vorname"=>"Edi","alter"=>19),
				array("nachname"=>"Richert","vorname"=>"Christian","alter"=>22),
				array("nachname"=>"Wieners","vorname"=>"Marleen","alter"=>19),
				array("nachname"=>"Drake","vorname"=>"Nina","alter"=>18),
				array("nachname"=>"Flüter","vorname"=>"Tobias","alter"=>19),
				array("nachname"=>"Heusener","vorname"=>"Sascha","alter"=>21)
			); */
		private static $menu = 
			array(
				array("position"=>0,"text"=>"Home","link"=>"?action=home"),
				array("position"=>0,"text"=>"Liste","link"=>"?action=liste"),
				array("position"=>1,"text"=>"Erfassen","link"=>"?action=inputform"),
				array("position"=>2,"text"=>"Löschen","link"=>"?action=delete")
			);
			
		private $id;
		
		private function xml2array ( $xmlObject, $out = array () ) {
			foreach ( (array) $xmlObject as $index => $node )
				$out[$index] = ( is_object ( $node ) ) ? xml2array ( $node ) : $node;
			return $out;
		}
		
		public static function getDaten() {
			//return self::$daten;
			$xml = simplexml_load_file('klassenliste.xml');
			return $xml;
		}	
		public static function getDataset($z) {
			//return self::$daten;
			$xml = simplexml_load_file('klassenliste.xml');
			//return xml2array($xml->eintrag[$z],array());
			return $xml->eintrag[$z]; // hier kommt ein Objekt
		}	
		
		public static function getMenu() {
			return self::$menu;
		}
		public static function setDaten($vorname,$nachname,$alter) {
			$dom = new DOMDocument("1.0");
			$dom->preserveWhiteSpace = false;
			$dom->formatOutput = true;	
			$xml = simplexml_load_file('klassenliste.xml');
			$z = count($xml->eintrag);
			$xml->eintrag[$z]['id'] = $z;
			$xml->eintrag[$z]->vorname = $vorname;
			$xml->eintrag[$z]->nachname = $nachname;
			$xml->eintrag[$z]->alter = $alter;
			$dom->loadXML($xml->asXML('klassenliste.xml'));
			echo $dom->saveXML();
			return $z;
		}
	}
?>