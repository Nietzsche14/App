<?php
	session_start();
?>	
<!DOCTYPE html>
<html>
<body>
<script src="vue/jquery.js"></script>
<h2>
<?php

	echo 'blableu';
	$listeVideos=$_SESSION['listeVideos'];
	echo $listeVideos;
	echo $listeVideos[0];
	echo $_SESSION['nom'];
?>
</h2>
</body>
</html>