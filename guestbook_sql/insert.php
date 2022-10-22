<?php
require_once('db.php');

$sql = 'INSERT INTO `comment` (`author`, `content`, `date`) VALUES (:author, :content, :date)';
$stmt = $pdo->prepare($sql);

$inserted = $stmt->execute([
    'author' => $_POST['user'],
    'content' => $_POST['message'],
    'date' => $_POST['date'],
  ]);

  header('Location: index.php');