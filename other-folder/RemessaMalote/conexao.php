<?php
  // Configurações do banco de dados
  $host = 'localhost';
  $dbname = 'RemessaMalote';
  $user = 'username';
  $pass = 'password';

  // Conexão com o banco de dados usando PDO
  try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo 'Erro ao conectar com o banco de dados: ' . $e->getMessage();
  }
?>
