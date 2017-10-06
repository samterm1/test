<?php include("header.php"); ?>

<div class="underline"></div>
<ul class="nav nav-pills">
  <li role="presentation"><a href="index.php">Home</a></li>
  <li role="presentation" class="active"><a href="#">Create new album</a></li>
</ul>

<FORM method="POST" id="createForm">
      <p>Name:<br>
      <input name="name" type="text" id="name"></p>
      <p>Description:<br>
      <textarea name="description" rows="5" cols="50" id="description"></textarea>
      </p>
      <p>
      <input name="Create" type="submit" class="button" value="Create">
      </p>
</FORM>

<?php include("engine/script.php"); ?>
<?php
	if (isset($_POST["name"])) {
		create();
	}


?>