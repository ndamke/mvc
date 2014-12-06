<?php
	$str = "<form action='?action=inputformprocessing' method='post'>";
	$str .="<table class='table table-hover'>";
	$str .= "<tr><td><label for='nachname'>Nachname:</label></td>";
	$str .= "<td><input type='text' id='nachname' name='nachname'></td></tr>";
	$str .= "<tr><td><label for='vorname'>Vorname:</label></td>";
	$str .= "<td><input type='text' id='vorname' name='vorname'></td></tr>";
	$str .= "<tr><td><label for='alter'>Alter:</label></td>";
	$str .= "<td><input type='text' id='alter' name='alter'></td></tr>";
	$str .= "<tr><td><input type='submit' value='Speichern' name='submit'></tr></td>";
	$str .="</table>";
	$str .= "</form>";
	echo $str;
?>