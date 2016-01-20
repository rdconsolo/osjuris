<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="<?= base_url();?>assets/img/favicon.ico">

  <title>OSJuris</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="<?= base_url();?>assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url();?>assets/css/dashboard.css" rel="stylesheet">

  <!-- desabilita a tecla ENTER/RETRUN nos formulários -->
  <script type="text/javascript">
    function stopRKey(evt) {
      var evt = (evt) ? evt : ((event) ? event : null);
      var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
      if ((evt.keyCode == 13) && (node.type=="text"))  {return false;}
    }
    document.onkeypress = stopRKey;
  </script>
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Ativar navegação</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?=base_url()?>">OSJuris CE <?=COSJVERSAO?></a>
      </div>

      <div id="navbar" class="navbar-collapse collapse">

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              <?=$this->session->userdata['logged_in']['nome'];?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?=base_url()?>perfil">Perfil</a></li>
              <li><a href="<?=base_url()?>logon/logout">Sair</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Configurações</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Ajuda</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle"
              data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Tabelas
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="<?=base_url()?>localizacoes">Localizações</a></li>
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?=base_url()?>dashboard">Dashboard</a></li>
          <li><a href="#">Perquisar</a></li>
          <li><a href="<?=base_url()?>processos">Processos</a></li>
          <li><a href="<?=base_url()?>pessoas">Pessoas</a></li>
          <li><a href="<?=base_url()?>eventosnovo">Novo Evento</a></li>
        </ul>

      </div>

    </div>

  </nav>
