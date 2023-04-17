<?php
  // Conexão com o banco de dados
  include 'conexao.php';

  // Prepara a query de busca
  $stmt = $pdo->prepare('SELECT * FROM solicitacoes');

  // Executa a query
  $stmt->execute();

  // Cria a tabela HTML para exibir as solicitações
  echo '<table class="table">';
  echo '<thead><tr><th>ID</th><th>Usuário</th><th>Malote</th><th>Data de Envio</th><th>Destino</th><th>Observações</th><th>Data de Solicitação</th><th>Data de Conclusão</th><th>Última Modificação</th><th>Ações</th></tr></thead>';
  echo '<tbody>';

  // Loop para exibir as solicitações
  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo '<tr>';
    echo '<td>' . $row['cdSolicitacao'] . '</td>';
    echo '<td>' . $row['cdUsuario'] . '</td>';
    echo '<td>' . $row['cdMalote'] . '</td>';
    echo '<td>' . $row['dtEnvio'] . '</td>';
    echo '<td>' . $row['cdDestino'] . ' - ' . $row['fgDestino'] . '</td>';
    echo '<td>' . $row['dsObservacoes'] . '</td>';
    echo '<td>' . $row['dtSolicitacao'] . '</td>';
    echo '<td>' . $row['dtConclusao'] . '</td>';
    echo '<td>' . $row['dtUltimaModificacao'] . '</td>';
    echo '<td>';
    echo '<a href="editar_solicitacao.php?id=' . $row['cdSolicitacao'] . '" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-pencil"></i> Editar</a> ';
    echo '<a href="excluir_solicitacao.php?id=' . $row['cdSolicitacao'] . '" class="btn btn-danger btn-xs" onclick="return confirm(\'Tem certeza que deseja excluir esta solicitação?\')"><i class="glyphicon glyphicon-trash"></i> Excluir</a>';
    echo '</td>';
    echo '</tr>';
  }

  // Fecha a tabela HTML
  echo '</tbody>';
  echo '</table>';
?>
