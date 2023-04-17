<?php

class RemessaMaloteSolicitacoes {
  private $cdSolicitacao;
  private $cdUsuario;
  private $cdMalote;
  private $dtEnvio;
  private $cdDestino;
  private $fgDestino;
  private $dsObservacoes;
  private $dtSolicitacao;
  private $dtConclusao;
  private $fgConclusao;
  private $dtUltimaModificacao;
  public $malotes = array();

  // construtor
  public function __construct($cdSolicitacao, $cdUsuario, $cdMalote, $dtEnvio, $cdDestino, $fgDestino, $dsObservacoes, $dtSolicitacao, $dtConclusao, $fgConclusao, $dtUltimaModificacao, $malotes) {
    $this->cdSolicitacao = $cdSolicitacao;
    $this->cdUsuario = $cdUsuario;
    $this->cdMalote = $cdMalote;
    $this->dtEnvio = $dtEnvio;
    $this->cdDestino = $cdDestino;
    $this->fgDestino = $fgDestino;
    $this->dsObservacoes = $dsObservacoes;
    $this->dtSolicitacao = $dtSolicitacao;
    $this->dtConclusao = $dtConclusao;
    $this->fgConclusao = $fgConclusao;
    $this->dtUltimaModificacao = $dtUltimaModificacao;
    $this->malotes = $malotes;
  }

  // getters
  public function getCdSolicitacao() {
    return $this->cdSolicitacao;
  }

  public function getCdUsuario() {
    return $this->cdUsuario;
  }

  public function getCdMalote() {
    return $this->cdMalote;
  }

  public function getDtEnvio() {
    return $this->dtEnvio;
  }

  public function getCdDestino() {
    return $this->cdDestino;
  }

  public function getFgDestino() {
    return $this->fgDestino;
  }

  public function getDsObservacoes() {
    return $this->dsObservacoes;
  }

  public function getDtSolicitacao() {
    return $this->dtSolicitacao;
  }

  public function getDtConclusao() {
    return $this->dtConclusao;
  }

  public function getFgConclusao() {
    return $this->fgConclusao;
  }

  public function getDtUltimaModificacao() {
    return $this->dtUltimaModificacao;
  }

  public function getMalotes() {
    return $this->malotes;
  }

  // setters
  public function setCdSolicitacao($cdSolicitacao) {
    $this->cdSolicitacao = $cdSolicitacao;
  }

  public function setCdUsuario($cdUsuario) {
    $this->cdUsuario = $cdUsuario;
  }

  public function setCdMalote($cdMalote) {
    $this->cdMalote = $cdMalote;
  }

  public function setDtEnvio($dtEnvio) {
    $this->dtEnvio = $dtEnvio;
  }

  public function setCdDestino($cdDestino) {
    $this->cdDestino = $cdDestino;
  }

  public function setFgDestino($fgDestino) {
    $this->fgDestino = $fgDestino;
  }

  public function setDsObservacoes($dsObservacoes) {
    $this->dsObservacoes = $dsObservacoes;
  }

  public function setDtSolicitacao($dtSolicitacao) {
    $this->dtSolicitacao = $dtSolicitacao;
  }

  public function setDtConclusao($dtConclusao) {
    $this->dtConclusao = $dtConclusao;
  }

  public function setFgConclusao($fgConclusao) {
    $this->fgConclusao = $fgConclusao;
  }

  public function setDtUltimaModificacao($dtUltimaModificacao) {
    $this->dtUltimaModificacao = $dtUltimaModificacao;
  }

  public function setMalotes($malotes) {
    $this->malotes = $malotes;
  }

  // outros métodos
  public function adicionarMalote($malote) {
    array_push($this->malotes, $malote);
  }

  public function removerMalote($malote) {
    $index = array_search($malote, $this->malotes);
    if ($index !== false) {
      unset($this->malotes[$index]);
    }
  }
}

?>