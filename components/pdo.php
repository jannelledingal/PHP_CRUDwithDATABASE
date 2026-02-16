<?php
$pdo = new PDO(
  "mysql:host=localhost;dbname=usermnt;charset=utf8mb4", // Matches your screenshot
  "root",
  "",
  [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);
?>