<?php
  // Conexão com o banco de dados
  include 'conexao.php';

  // Recebe o ID da solicitação a ser excluída
  $cdSolicitacao = $_GET['id'];

  // Prepara a query de exclusão
  $stmt = $pdo->prepare('DELETE FROM solicitacoes WHERE cdSolicitacao = :cdSolicitacao');

  // Substitui o parâmetro na query e executa
  $stmt->bindParam(':cdSolicitacao', $cdSolicitacao);
  $stmt->execute();

  // Redireciona para a página de listagem de solicitações
  header('Location: listar_solicitacoes.php');
?>
