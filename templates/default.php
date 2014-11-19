<?php
	echo "Dies ist das Default-Template";
	$str = "<table class='table table-hover'>";
	foreach($this->daten as $key=>$datensatz) {
		$str .= "<tr><td>$key</td><td>".$datensatz['nachname']."</td><td>".$datensatz['vorname']."</td><td>".$datensatz['alter']."</td></tr>";
	}
	$str .= "</table>";
	echo $str;
?>
