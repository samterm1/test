<?php

function seekAlbum($dir) {
   $result = array();
   $cdir = scandir($dir);
   foreach ($cdir as $key => $value) {
      if (!in_array($value, array(".",".."))) {
         $result[] = $value;
         $info = file('base/'.$value.'/info.txt');
		   foreach ($info as $line_num => $words) {
		   $tooltip = htmlspecialchars($words);
         echo('<a href="view.php?dir='.$value.'"><div class="view" data-toggle="tooltip" data-placement="bottom" title="'.$tooltip.'"><div><img src="img/Album-Icon.png"/></div><div>'.$value.'</div></div></a>');
         }
      }
   }
	return $result;
}

function listAlbum($dir) {
   $dir = "base";
   if (is_dir($dir)) {
      if ($dh = opendir($dir)) {
         while (($file = readdir($dh)) !== false) {
            if ($file != '.' && $file != '..') {
            echo ("<p><a href='view.php?dir=".$file."'>".$file."</a></p>");
         }
         }
         closedir($dh);
      }
   }
}

function create() {
   $name = $_POST['name'];
   $des = $_POST['description'];
   if(!empty($_POST['name']) && !empty($_POST['description'])) {
      mkdir("base/".$name, 0777, true);
      chmod("base/".$name, 0777);
      file_put_contents("base/".$name."/info.txt", htmlspecialchars($des));
      chmod("base/".$name."/info.txt", 0777);
      header("Location: index.php");
   } else {
      echo ("Fill all fields.");
   }
}

function loadFile() {
   $path = 'base/'.$_GET['dir'].'/';
   $tmp_path = 'tmp/';
   $types = array('image/gif', 'image/png', 'image/jpeg');
   $size = 1024000;
   $time = time();
   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (!in_array($_FILES['picture']['type'], $types))
      die('Wrong type of file');
      if ($_FILES['picture']['size'] > $size)
      die('File is to big.');
      if (!@copy($_FILES['picture']['tmp_name'], $path.$time.$_FILES['picture']['name']))
      echo 'Error!';
         else
      chmod($path.$time.$_FILES['picture']['name'], 0777);
      //echo $path.$time.$_FILES['picture']['name'];
   }
}

function editAlbum() {
   $dir = $_GET['dir'];
   $textarea = file_get_contents("base/".$dir."/info.txt");
   echo $textarea;
}

function updateInfo() {
   $dir = $_GET['dir'];
   $des = $_POST['description'];
   if (!empty($_POST['description'])) { 
      file_put_contents("base/".$dir."/info.txt", htmlspecialchars($des));
      header ("Location: view.php?dir=".$dir);
   } 
}

function scanPhoto() {
   $dir = $_GET['dir'];
   $photoDir = 'base/'.$_GET['dir'].'/';
   $scan = scandir($photoDir);
   for ($i=0; $i<count($scan); $i++) {
      if ($scan[$i] != '.' && $scan[$i] != '..' && $scan[$i] != 'info.txt') {
      echo '<a href="separate.php?dir='.$dir.'&res='.$photoDir.$scan[$i].'"><img src="'.$photoDir.$scan[$i].'"></a>';
      }
   }
}

function listPhoto() {
   $dir = $_GET['dir'];
   $photoDir = 'base/'.$_GET['dir'].'/';
   $scan = scandir($photoDir);
   for ($i=0; $i<count($scan); $i++) {
      if ($scan[$i] != '.' && $scan[$i] != '..' && $scan[$i] != 'info.txt') {
         $view = $scan[$i];  
         echo '<a href="separate.php?dir='.$dir.'&res='.$photoDir.$scan[$i].'"><img src="'.$photoDir.$scan[$i].'"/></a>';
         echo '<script> var str = "'.$view.'"; document.write(str.substr(10));</script><br>';
      }
   }
}
?>
