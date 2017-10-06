<?php include("header.php"); ?>

<div class="underline"></div>
<div class="alert alert-danger" role="alert">
<h2>Are you shore?</h2>
<FORM method="POST">
	<input name="Yes" type="submit" class="button" value="Yes">
	<input name="No" type="submit" class="button" value="No">
</FORM>
</div>

<?php include("engine/script.php"); ?>
<?php
	if (isset($_POST["Yes"])) {
		unlink($_GET['res']);
		header("Location: view.php?dir=".$_GET['dir']);

	}
	if (isset($_POST["No"])) {
		header("Location: view.php?dir=".$_GET['dir']);
	}
?>