
<?php
$caption = $_POST['caption'];

$source = $_FILES['image']['tmp_name'];
$loc = "images/".$_FILES['image']['name'];
move_uploaded_file($source, $loc);

$postsFile = fopen('post.txt', 'a');
$posts = $caption."|".$loc."\n";
fwrite($postsFile, $posts);
header('Location: newsfeed.php');


?>