<?php include("header.php"); ?>

<div class="underline"></div>
	<ul class="nav nav-pills">
		<li role="presentation"><a href="index.php">Home</a></li>
		<li role="presentation" class="active"><a href="#">List</a></li>
		<li role="presentation"><a href="create.php">Create new album</a></li>
	</ul>
<?php include("engine/script.php"); ?>	
<?php listAlbum("base"); ?>