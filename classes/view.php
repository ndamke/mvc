<?php
	class View 
	{
		private $data;
		private $template;
		
		function __construct ($data, $template = "default") {
			$this->data 	= 	  $data;
			$this->template = $template;
		}
		
		function loadTemplate()
		{
			$tpl 	= 										$this->template;
			$file 	= $_SERVER["DOCUMENT_ROOT"]."/mvc/templates/{$tpl}.php";
			$exists = 		 							 file_exists($file);
			
			if($exists)
			{
				ob_start();
				
				include($file);
				$output = ob_get_contents();
				
				ob_end_clean();
				
				return $output;
			}
			else
			{
				return false;
			}
		}
	}
?>
