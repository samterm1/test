<?php include("header.php"); ?>

<div class="underline"></div>
<ul class="nav nav-pills">
	<li role="presentation"><a href="index.php">Home</a></li>
</ul>
<!--вставить валидатор файлов-->
<?php 
	$folder = "base/".$_GET['dir'];
	if (is_dir($folder)) {
    	$objects = scandir($folder);
    	foreach ($objects as $object) {
    		if ($object != "." && $object != "..") {
    		if (filetype($folder."/".$object) != "dir") unlink($folder."/".$object);
    		}
    	}
	rmdir($folder);
	$say = "Album ".$_GET['dir']." is deleted!";
	echo ('<div class="alert alert-success" role="alert">'.$say.'</div>');
   	}
	?>
