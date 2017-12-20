<?php

// create table users (id INT AUTO_INCREMENT PRIMARY KEY, email VARCHAR(255), password VARCHAR(100));

require __DIR__ . '/vendor/autoload.php';

$pdo = new PDO('mysql:host=localhost;dbname=php_seguranca', 'root', '1234');

if (empty($_GET['email']) or empty($_GET['password'])) {
    die('Campos vazios');
}

$sql = 'INSERT INTO users (email, password) VALUES (:email, :password)';

var_dump($sql);

$sth = $pdo->prepare($sql);
var_dump($_GET);
$sth->bindValue(':email', $_GET['email']);
$sth->bindValue(':password', $_GET['password']);
$sth->execute();
