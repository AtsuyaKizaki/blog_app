<?php

require_once(__DIR__ . '/blog.php');
$blogs = $_POST;


  $blog = new Blog();
  $blog->blogValidate($blogs);

  $blog->blogupdate($blogs);


?>
<p><a href="index.php">戻る</a></p>