<?php

require_once(__DIR__ . '/blog.php');

$blog = new Blog();
$result = $blog->getById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ブログ詳細</title>
</head>
<body>
<h2>ブログ詳細</h2>
<h3>タイトル:<?= $result['title']?></h3>
<p>投稿日時:<?= $result['post_at']?></p>
<p>カテゴリ:<?= $blog->setCategoryName($result['category'])?></p>
<hr>
<p>本文:<?= $result['content']?></p>
<p><a href="index.php">戻る</a></p>
</body>
</html>