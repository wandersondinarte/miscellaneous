<?php
  // Conexão com o banco de dados
  include 'conexao.php';

  // Verifica se o ID da solicitação foi informado
  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Busca os dados da solicitação no banco de dados
    $stmt = $pdo->prepare('SELECT * FROM solicitacoes WHERE cdSolicitacao = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $solicitacao = $stmt->fetch(PDO::FETCH_ASSOC);

    // Verifica se a solicitação foi encontrada
    if (!$solicitacao) {
      // Se a solicitação não foi encontrada, redireciona para a página de listagem de solicitações
      header('Location: listar_solicitacoes.php');
      exit();
    }
  } else {
    // Se o ID da solicitação não foi informado, redireciona para a página de listagem de solicitações
    header('Location: listar_solicitacoes.php');
    exit();
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Editar Solicitação - Sistema de Malotes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <h1>Editar Solicitação</h1>
      <form method="post" action="atualizar_solicitacao.php">
        <input type="hidden" name="id" value="<?php echo $solicitacao['cdSolicitacao']; ?>">
        <div class="form-group">
          <label for="usuario">Usuário:</label>
          <input type="text" class="form-control" id="usuario" name="usuario" value="<?php echo $solicitacao['cdUsuario']; ?>">
        </div>
        <div class="form-group">
          <label for="malote">Malote:</label>
          <input type="text" class="form-control" id="malote" name="malote" value="<?php echo $solicitacao['cdMalote']; ?>">
        </div>
        <div class="form-group">
          <label for="data_envio">Data de Envio:</label>
          <input type="date" class="form-control" id="data_envio" name="data_envio" value="<?php echo $solicitacao['dtEnvio']; ?>">
        </div>
        <div class="form-group">
          <label for="destino">Destino:</label>
          <input type="text" class="form-control" id="destino" name="destino" value="<?php echo $solicitacao['cdDestino']; ?>">
        </div>
        <div class="form-group">
          <label for="fg_destino">Flag de Destino:</label>
          <input type="text" class="form-control" id="fg_destino" name="fg_destino" value="<?php echo $solicitacao['fgDestino']; ?>">
        </div>
        <div class="form-group">
          <label for="observacoes">Observações:</label>
          <textarea class="form-control" id="observacoes" name="observacoes"><?php echo $solicitacao['dsObservacoes']; ?></textarea>
        </div>
        <div class="form-group">
          <label for="data_solicitacao">Data da Solicitação:</label>
          <input type="date" class="form-control" id="data_solicitacao" name="data_solicitacao" value="<?php echo $solicitacao['dtSolicitacao']; ?>">
        </div>
        <div class="form-group">
          <label for="data_conclusao">Data de Conclusão:</label>
          <input type="date" class="form-control" id="data_conclusao" name="data_conclusao" value="<?php echo $solicitacao['dtConclusao']; ?>">
        </div>
        <div class="form-group">
          <label for="fg_conclusao">Flag de Conclusão:</label>
          <input type="text" class="form-control" id="fg_conclusao" name="fg_conclusao" value="<?php echo $solicitacao['fgConclusao']; ?>">
        </div>
        <div class="form-group">
          <label for="data_ultima_modificacao">Data da Última Modificação:</label>
          <input type="date" class="form-control" id="data_ultima_modificacao" name="data_ultima_modificacao" value="<?php echo $solicitacao['dtUltimaModificacao']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="listar_solicitacoes.php" class="btn btn-default">Cancelar</a>
      </form>
    </div>
  </body>
</html>
