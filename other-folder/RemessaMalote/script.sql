CREATE DATABASE RemessaMalote;

USE RemessaMalote;

CREATE TABLE malotes (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  descricao TEXT,
  criado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  modificado_em DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE solicitacoes (
  id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  cd_solicitacao INT(11) NOT NULL,
  cd_usuario INT(11) NOT NULL,
  cd_malote INT(11) NOT NULL,
  dt_envio DATE NOT NULL,
  cd_destino INT(11) NOT NULL,
  fg_destino CHAR(1) NOT NULL,
  ds_observacoes TEXT,
  dt_solicitacao DATE NOT NULL,
  dt_conclusao DATE,
  fg_conclusao CHAR(1),
  dt_ultima_modificacao DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (cd_malote) REFERENCES malotes(id) ON DELETE CASCADE
);
