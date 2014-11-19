<?php
		class Model {
		private static $daten = 
			 array(
				array("nachname"=>"Diechköner", "vorname"=>"Christian", "alter"=>19),
				array("nachname"=>"Hartweg", "vorname"=>"Nicolas", "alter"=>18),
				array("nachname"=>"Schnurbus", "vorname"=>"Julien", "alter"=>20)
			 );
			 
		private static $menu =
			array(
				array("position"=>0,"text"=>"Home","link"=>"?action=view"),
				array("position"=>1,"text"=>"Erfassen","link"=>"?action=insert")
			);
			
		private $id;
		
		public static function getDaten() {
			return self::$daten;
		}	
		
		public static function getMenu() {
			return self::$menu;
		}	
	}
?>
