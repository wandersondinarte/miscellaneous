<?php
  // Conexão com o banco de dados
  include 'conexao.php';

  // Verifica se o formulário foi submetido
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtém os dados do formulário
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $malote = $_POST['malote'];
    $data_envio = $_POST['data_envio'];
    $destino = $_POST['destino'];
    $observacoes = $_POST['observacoes'];
    $data_solicitacao = $_POST['data_solicitacao'];
    $data_conclusao = $_POST['data_conclusao'];
    $ultima_modificacao = date('Y-m-d H:i:s');

    // Prepara a query de atualização
    $stmt = $pdo->prepare('UPDATE solicitacoes SET cdUsuario = :usuario, cdMalote = :malote, dtEnvio = :data_envio, cdDestino = :destino, dsObservacoes = :observacoes, dtSolicitacao = :data_solicitacao, dtConclusao = :data_conclusao, dtUltimaModificacao = :ultima_modificacao WHERE cdSolicitacao = :id');

    // Preenche os parâmetros da query
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':usuario', $usuario);
    $stmt->bindParam(':malote', $malote);
    $stmt->bindParam(':data_envio', $data_envio);
    $stmt->bindParam(':destino', $destino);
    $stmt->bindParam(':observacoes', $observacoes);
    $stmt->bindParam(':data_solicitacao', $data_solicitacao);
    $stmt->bindParam(':data_conclusao', $data_conclusao);
    $stmt->bindParam(':ultima_modificacao', $ultima_modificacao);

    // Executa a query
    $stmt->execute();

    // Redireciona para a página de listagem de solicitações
    header('Location: listar_solicitacoes.php');
    exit();
  } else {
    // Se o formulário não foi submetido, redireciona para a página de listagem de solicitações
    header('Location: listar_solicitacoes.php');
    exit();
  }
?>
