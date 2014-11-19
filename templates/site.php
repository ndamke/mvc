<!Doctype html>
<html>
	<head>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<style>
		
		</style>
	</head>
	<body>
		<div =id"header" class="col-md-12 bg-primary">
			<h1><u><?php echo "Mein MVC-System"; ?></u></h1>
		</div>
		
		<div =id"menu" class="col-md-2">
			<ul class="nav nav-pills">
			<?php 
				foreach ($this->daten["menu"] as $key=>$eintrag)
				{
					echo "<li><a href='".$eintrag['link']."'>".$eintrag['text']."</a></li>"; 
				}
			
			?>
			</ul>
		</div>
		
		<div =id"content" class="col-md-10">
			<?php echo $this->daten["content"]; ?>
		</div>
		
		<div =id"footer" class="col-md-12 bg-primary">
			<?php echo "Mein MVC-System 2014"; ?>
		</div>
	
	</body>
</html>
