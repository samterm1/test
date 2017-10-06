<?php include("header.php"); ?>

<div class="underline"></div>
	<ul class="nav nav-pills">
		<li role="presentation" class="active"><a href="#">Home</a></li>
		<li role="presentation"><a href="listfolder.php">List</a></li>
		<li role="presentation"><a href="create.php">Create new album</a></li>
	</ul>

<?php include("engine/script.php"); ?>	
<?php 
	seekAlbum("base");
?>

</body>
</html>