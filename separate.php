<?php include("header.php"); ?>

<div class="underline"></div>
	<ul class="nav nav-pills">
 		<li role="presentation"><a href="index.php">Home</a></li>
 		<li role="presentation"><a href="view.php?dir=<?php echo($_GET['dir']); ?>"><?php echo($_GET['dir']); ?></a></li>
 		<li role="presentation"><a href="listitems.php?dir=<?php echo($_GET['dir']); ?>">List items</a></li>
 		<li role="presentation"><a href="deletefile.php?res=<?php echo($_GET['res']); ?>&dir=<?php echo($_GET['dir']); ?>">Delete</a></li>
	</ul>

<img src="<?php echo $_GET['res']; ?>"/><br>
<?php echo $_GET['res']; ?>