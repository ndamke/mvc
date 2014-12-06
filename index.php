<?php
	// Klassen inkludieren
	require "classes/model.php";
	require "classes/view.php";
	require "classes/controller.php";
	
	// Controllerinstanz erzeugen und im Browser darstellen
	$controller = new Controller($_REQUEST);
	$controller->display();

?>