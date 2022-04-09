<?php
  if (!isset($_SESSION)) {
    session_start();
  }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <title>Visualizar Usuário</title>
</head>

<body>
  <header class="w3-container w3-padding-32 w3-center ">
    <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">
    <?php
        include_once '../Model/Usuario.php';
        include_once '../Controller/UsuarioController.php';
        
        if(!isset($_SESSION))
        {
          session_start();
        }
        $usuario = new UsuarioController();
        $result = $usuario->visualizarUsuario($_POST['id']);
        if($result){
          echo ''.$result->nome.'';
        }
      ?>
    </h1>
  </header>
  
  <div class="w3-padding-128 w3-content w3-text-grey">
    <div class="w3-container w3-centered w3-margin" id="dPessoais">
      <?php
        include_once '../Model/Usuario.php';
        include_once '../Controller/UsuarioController.php';
        
        if(!isset($_SESSION))
        {
          session_start();
        }
        $usuario = new UsuarioController();
        $result = $usuario->visualizarUsuario($_POST['id']);
        if($result){
          echo '<h2 class="w3-text-white w3-panel w3-cyan w3-round-large">Nome: '.$result->nome.'<h2>';
          echo '<h2 class="w3-text-white w3-panel w3-cyan w3-round-large">CPF: '.$result->cpf.'<h2>';
          echo '<h2 class="w3-text-white w3-panel w3-cyan w3-round-large">E-mail: '.$result->email.'<h2>';
          echo '<h2 class="w3-text-white w3-panel w3-cyan w3-round-large">Data de nascimento: '.date('d/m/Y', strtotime($result->dataNascimento)).'<h2>';
        }
      ?>
    </div>

    <div class="w3-container w3-centered w3-margin" id="formacao">
      <h3 class="w3-text-cyan w3-center">Formação acadêmica</h3>
      <table class="w3-table-all">
          <thead>
            <tr class="w3-center w3-blue">
              <th>Início</th>
              <th>Fim</th>
              <th>Descrição</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include_once '../Controller/FormacaoAcadController.php';
              $fCon = new FormacaoAcadController();
              $results = $fCon->gerarLista($_POST['id']);
              if($results != null)
              
              while($row = $results->fetch_object()) {
                echo '<tr>';
                echo '<td >'.date('d/m/Y', strtotime($row->inicio)).'</td>';
                echo '<td >'.date('d/m/Y', strtotime($row->fim)).'</td>';
                echo '<td style="width: 70%;">'.$row->descricao.'</td>';
                echo '</tr>';
              }
            ?>
          </tbody>
      </table>
    </div>

    <div class="w3-container w3-centered w3-margin" id="eProfissional">
      <h3 class="w3-text-cyan w3-center">Experiência Profissional</h3>
      <table class="w3-table-all">
          <thead>
            <tr class="w3-center w3-blue">
              <th>Início</th>
              <th>Fim</th>
              <th>Empresa</th>
              <th>Descrição</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include_once '../Controller/ExperienciaProfissionalController.php';
              $ePro = new ExperienciaProfissionalController();
              $results = $ePro->gerarLista($_POST['id']);
              if($results != null)
              
              while($row = $results->fetch_object()) {
                echo '<tr>';
                echo '<td >'.date('d/m/Y', strtotime($row->inicio)).'</td>';
                echo '<td >'.date('d/m/Y', strtotime($row->fim)).'</td>';
                echo '<td style="width: 20%;">'.$row->empresa.'</td>';
                echo '<td style="width: 50%;">'.$row->descricao.'</td>';
                echo '</tr>';
              }
            ?>
          </tbody>
      </table>
    </div>

    <div class="w3-container w3-centered w3-margin" id="oFormacoes">
      <h3 class="w3-text-cyan w3-center">Outras Formações</h3>
      <table class="w3-table-all">
          <thead>
            <tr class="w3-center w3-blue">
              <th>Início</th>
              <th>Fim</th>
              <th>Descrição</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include_once '../Controller/OutrasFormacoesController.php';
              $oFor = new OutrasFormacoesController();
              $results = $oFor->gerarLista($_POST['id']);
              if($results != null)
              
              while($row = $results->fetch_object()) {
                echo '<tr>';
                echo '<td >'.date('d/m/Y', strtotime($row->inicio)).'</td>';
                echo '<td >'.date('d/m/Y', strtotime($row->fim)).'</td>';
                echo '<td style="width: 70%;">' . $row->descricao . '</td>';
                echo '</tr>';
              }
            ?>
          </tbody>
      </table>
    </div>
  </div>

  <div class="w3-padding-128 w3-content w3-text-grey">
    <form action="/Controller/Navegacao.php" method="post" class="w3-container w3-light-grey w3-textblue w3-margin w3-center" style="width: 30%;">
      <div class="w3-row w3-section">
        <div>
          <button name="btnVoltarLista" class="w3-button w3-block w3-margin w3-blue w3-cell w3-roundlarge" style="width: 90%;">
            Voltar
          </button>
        </div>
      </div>
    </form>
  </div>
</body>