<?php
	$str = "Dies ist die Liste der Datensätze:";
	$str .= "<table class='table table-hover'>";
	foreach($this->daten as $key=>$datensatz) {
		$str .= "<tr><td>".$datensatz['id']."</td><td>".$datensatz->nachname."</td><td>".$datensatz->vorname."</td><td>".$datensatz->alter."</td></tr>";
	}
	$str .= "</table>";
	echo $str;
	
?>