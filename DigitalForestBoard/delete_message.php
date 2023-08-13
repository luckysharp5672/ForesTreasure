<?php
require 'dbconnect.php';

// POSTデータを取得
$id = $_POST['id'];

// 掲示板を削除
$query = "DELETE FROM boards WHERE id = :id";
$statement = $pdo->prepare($query);
$statement->execute([
    'id' => $id
]);
