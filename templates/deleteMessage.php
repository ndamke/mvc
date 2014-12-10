<?php
	<script language="JavaScript" type="text/JavaScript"> 
		function confirmSubmit() { 
			var agree=confirm("Sind Sie sich sicher?"); 
		if (agree) 
			return true ; 
		else 
			return false ; 
		} 
	</script>
	<a onclick="return confirmSubmit()" href="liste_delete.php" class=link1>l&ouml;schen</a>
?>