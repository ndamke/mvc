<!DOCTYPE HTML>
<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
<html>
	<head>
		<style>
			*{
				font-family: century gothic;
			}
		
			#header {
				margin-bottom: 10px;
			}
			
			.nav > li > a:hover {
				background-color: #428BCA;
				color: #fff;
			}
			
			.table td {
				padding: 4px !important;
			}
			
		</style>
	</head>
	<body>
		<div id="header" class="col-md-12 bg-primary">
			<h1><?php echo "Mein MVC-System"; ?></h1>
		</div>
		<div id="menu" class="col-md-2">
			<ul class="nav nav-pills nav-stacked">
			<?php foreach($this->daten['menu'] as $key=>$eintrag) {
				echo "<li><a href='".$eintrag['link']."'>".$eintrag['text']."</a></li>";
			} 
			?>
			</ul>
		</div>
		<div id="content" class="col-md-10">
			<?php echo $this->daten['content']; ?>
		</div>
		<div id="footer" class="col-md-12 bg-primary">
				<center><?php echo "© Christian Dieckhöner"; ?></center>
		</div>
	</body>
</html>

<?php
	
?>