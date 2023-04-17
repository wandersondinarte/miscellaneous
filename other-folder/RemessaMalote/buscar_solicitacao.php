<?php
  // Conexão com o banco de dados
  include 'conexao.php';

  // Recebe o ID da solicitação a ser buscada
  $cdSolicitacao = $_GET['id'];

  // Prepara a query de busca
  $stmt = $pdo->prepare('SELECT * FROM solicitacoes WHERE cdSolicitacao = :cdSolicitacao');

  // Substitui o parâmetro na query e executa
  $stmt->bindParam(':cdSolicitacao', $cdSolicitacao);
  $stmt->execute();

  // Retorna os dados da solicitação em formato JSON
  echo json_encode($stmt->fetch(PDO::FETCH_ASSOC));
?>
