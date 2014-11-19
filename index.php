<?php
	//Get-Parameter speichern
	if(isset($_GET['action']))
		$action = $_GET['action'];
	else
		$action = "view"; //default
		
	if(isset($_GET['id']))
		$id = $_GET['id'];
	else
		$id = 0; //default
		
	//Klassen inkludieren
	require "classes/model.php";
	require "classes/view.php";
	require "classes/controller.php";
	
	//Controllerinstanz erzeugen und im Browser darstellen
	$controller = new Controller($action, $id);
	$controller->display();
?>
