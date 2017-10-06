<?php include("header.php"); ?>

<div class="underline"></div>
<ul class="nav nav-pills">
 	<li role="presentation"><a href="index.php">Home</a></li>
 	<li role="presentation"><a href="editor.php?dir=<?php echo($_GET['dir']); ?>">Edit</a></li>
 	<li role="presentation" class="active"><a href="#"><?php echo($_GET['dir']); ?></a></li>
  	<li role="presentation"><a href="confirm.php?dir=<?php echo($_GET['dir']); ?>">Delete Album</a></li>
	<form enctype="multipart/form-data" method="post">
		<input class="view" name="picture" type="file" />
		<input class="view" type="submit" value="Load" />
	</form>
</ul>
<?php include("engine/script.php"); ?>
<?php
	listPhoto();
?>
<script>
	$('img').each(function(){
		$(this).css('width','40px');
		$(this).css('height','30px');
		$(this).css('margin','5px');
	});

</script>