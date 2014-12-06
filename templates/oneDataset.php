<?php
	echo "Sie haben gerade diesen Datensatz eingefügt:";
	$str = "<table class='table table-hover'>";
	$str .= "<tr><td>Nachname:</td><td>".$this->daten->nachname."</td></tr>";
	$str .= "<tr><td>Vorname:</td><td>".$this->daten->vorname."</td></tr>";
	$str .= "<tr><td>Alter:</td><td>".$this->daten->alter."</td></tr>";
	/*foreach($this->daten as $key=>$datensatz) {
		$str .= "<tr><td>".$datensatz['id']."</td><td>".$datensatz->nachname."</td><td>".$datensatz->vorname."</td><td>".$datensatz->alter."</td></tr>";
	}*/
	$str .= "</table>";
	echo $str;
	
?>