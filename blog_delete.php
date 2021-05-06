<?php

require_once(__DIR__ . '/blog.php');

$blog = new Blog();
$result = $blog->delete($_GET['id']);


?>

<p><a href="index.php">戻る</a></p>