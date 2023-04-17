<?php
  // Conexão com o banco de dados
  include 'conexao.php';

  // Recebe os dados do formulário
  $cdUsuario = $_POST['cdUsuario'];
  $cdMalote = $_POST['cdMalote'];
  $dtEnvio = $_POST['dtEnvio'];
  $cdDestino = $_POST['cdDestino'];
  $fgDestino = $_POST['fgDestino'];
  $dsObservacoes = $_POST['dsObservacoes'];
  $dtSolicitacao = date('Y-m-d'); // Data atual
  $dtConclusao = null; // Ainda não concluído
  $fgConclusao = 'N'; // Ainda não concluído
  $dtUltimaModificacao = date('Y-m-d H:i:s'); // Data atual

  // Prepara a query de inserção
  $stmt = $pdo->prepare('INSERT INTO solicitacoes (cdUsuario, cdMalote, dtEnvio, cdDestino, fgDestino, dsObservacoes, dtSolicitacao, dtConclusao, fgConclusao, dtUltimaModificacao) VALUES (:cdUsuario, :cdMalote, :dtEnvio, :cdDestino, :fgDestino, :dsObservacoes, :dtSolicitacao, :dtConclusao, :fgConclusao, :dtUltimaModificacao)');

  // Substitui os parâmetros na query e executa
  $stmt->bindParam(':cdUsuario', $cdUsuario);
  $stmt->bindParam(':cdMalote', $cdMalote);
  $stmt->bindParam(':dtEnvio', $dtEnvio);
  $stmt->bindParam(':cdDestino', $cdDestino);
  $stmt->bindParam(':fgDestino', $fgDestino);
  $stmt->bindParam(':dsObservacoes', $dsObservacoes);
  $stmt->bindParam(':dtSolicitacao', $dtSolicitacao);
  $stmt->bindParam(':dtConclusao', $dtConclusao);
  $stmt->bindParam(':fgConclusao', $fgConclusao);
  $stmt->bindParam(':dtUltimaModificacao', $dtUltimaModificacao);
  $stmt->execute();

  // Redireciona para a página de listagem de solicitações
  header('Location: listar_solicitacoes.php');
?>
