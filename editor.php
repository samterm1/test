<?php include("header.php"); ?>

<div class="underline"></div>
<?php include("engine/script.php"); ?>

	<ul class="nav nav-pills">
  		<li role="presentation"><a href="index.php">Home</a></li>
  		<li role="presentation" class="active "><a href="editor.php?dir=<?php echo($_GET['dir']); ?>">Edit</a></li>
  		<li role="presentation"><a href="view.php?dir=<?php echo($_GET['dir']); ?>"><?php echo($_GET['dir']); ?></a></li>
	</ul>

<FORM method="POST" id="editFolderForm">
    <p>Description:<br>
    <textarea name="description" rows="5" cols="50" id="description"><?php editAlbum(); ?>	</textarea>
    </p>
    <p>
    <input name="Update" type="submit" class="button" value="Update">
    </p>
</FORM>
<?php updateInfo(); ?>


