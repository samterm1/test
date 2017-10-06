<?php include("header.php"); ?>

<div class="underline"></div>
<ul class="nav nav-pills">
 	<li role="presentation"><a href="index.php">Home</a></li>
 	<li role="presentation"><a href="editor.php?dir=<?php echo($_GET['dir']); ?>">Edit</a></li>
 	<li role="presentation" class="active"><a href="#"><?php echo($_GET['dir']); ?></a></li>
 	<li role="presentation"><a href="listitems.php?dir=<?php echo($_GET['dir']); ?>">List items</a></li>
  	<li role="presentation"><a href="confirm.php?dir=<?php echo($_GET['dir']); ?>">Delete Album</a></li>
	<form enctype="multipart/form-data" method="post">
		<input class="view" name="picture" type="file" />
		<input class="view" type="submit" value="Load" />
	</form>
</ul>
<?php include("engine/script.php"); ?>
<?php
	loadFile();
	scanPhoto();
?>

<script>
	$('img').each(function(){
		$(this).css('width','330px');
		$(this).css('height','200px');
		$(this).css('margin','5px');
	});
</script>