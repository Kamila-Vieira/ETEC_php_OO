<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

  <title>Enlatados Juarez</title>
  <style>
    /* Definimos que a sidebar terá uma largura de 120px e cor a cord de fundo #222 */
    .w3-sidebar {
      width: 120px;

    }

    /*Define Fonte para todas as tags listadas abaixo*/
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: "Montserrat", sans-serif
    }
  </style>
</head>

<body class="w3-light-grey">

  <?php
    include_once '../Model/Usuario.php';
    if(!isset($_SESSION))
    {
      session_start();
    }
  ?>
  <nav class="w3-sidebar w3-bar-block w3-center w3-blue ">
    <a href="#home" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hovertext-cyan w3-text-light-grey">
      <i class="fas fa-home w3-xxlarge"></i>
      <p>HOME</p>
    </a>
    <a href="#dPessoais" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
      <i class="fas fa-address-book w3-xxlarge"></i>
      <p>Dados Pessoais</p>
    </a>
    <a href="#formacao" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
      <i class="fas fa-mortar-board w3-xxlarge"></i>
      <p>Formação</p>
    </a>
    <a href="#eProfissional" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
      <i class="fas fa-user-tie w3-xxlarge"></i>
      <p>Experiência Profissional</p>
    </a>
    <a href="#oFormacoes" class="w3-bar-item w3-button w3-block n w3-cell w3-hover-light-grey w3-hover-text-cyan w3-text-light-grey">
      <i class="fas fa-user-graduate w3-xxlarge"></i>
      <p>Outras Formações</p>
    </a>
  </nav>

  <div class="w3-padding-large" id="main">
    <header class="w3-container w3-padding-32 w3-center " id="home">
      <h1>
        <img src="../img/Enlatados.png" alt="Logo" class="w3-image" width="50%">
        </br>
      </h1>
      <a class="w3-text-cyan" href="http://www.freepik.com">Designed by brgfx / Freepik</a>
      <br>
      <h2 class="w3-text-cyan">
        SISTEMA DE CURRICULOS
      </h2>
    </header>

    <div class="w3-padding-128 w3-content w3-text-grey" id="dPessoais">
      <h2 class="w3-text-cyan">Dados Pessoais</h2>

      <form action="/Controller/Navegacao.php" method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width: 70%;">
        <input class="w3-input w3-border w3-round-large" name="txtID" type="hidden" value="<?php echo unserialize($_SESSION['Usuario'])->getID();?>">
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fas fa-user"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo" value="<?php echo unserialize($_SESSION['Usuario'])->getNome();?>">
          </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fas fa-calendar-alt"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtData" type="date" placeholder="" value="<?php echo unserialize($_SESSION['Usuario'])->getDataNascimento();?>">
          </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fas fa-drivers-license"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text" placeholder="CPF: 33333333333" value="<?php echo unserialize($_SESSION['Usuario'])->getCPF();?>">
          </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-col" style="width:11%;">
            <i class="w3-xxlarge fas fa-envelope"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="Email" value="<?php echo unserialize($_SESSION['Usuario'])->getEmail();?>">
          </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-center">
            <button name="btnAtualizar" class="w3-button w3-block w3-blue w3-cellw3-round-large">Atualizar</button>
          </div>
        </div>
      </form>
    </div>

    <div class="w3-padding-128 w3-content w3-text-grey" id="formacao">
      <h2 class="w3-text-cyan">Formação</h2>

      <form action="/Controller/Navegacao.php" method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width: 70%;">
        <div class="w3-row w3-center">
          <div class="w3-col" style="width:50%;">
            Data Inicial
          </div>
          <div class="w3-res">
            Data Final
          </div>
        </div>
        <div class="w3-row w3-section">
          <div class="w3-row w3-section w3-col" style="width:45%;">
            <div class="w3-col" style="width:15%;">
              <i class="w3-xxlarge fas fa-calendar-alt"></i>
            </div>
            <div class="w3-rest">
              <input class="w3-input w3-border w3-round-large" name="txtInicioFA" type="date" placeholder="">
            </div>
          </div>
          <div class="w3-row w3-section w3-rest">
            <div class="w3-col w3-margin-left" style="width:13%;">
              <i class="w3-xxlarge fas fa-calendar-alt"></i>
            </div>
            <div class="w3-rest">
              <input class="w3-input w3-border w3-round-large" name="txtFimFA" type="date" placeholder="">
            </div>
          </div>

        </div>

        <div class="w3-row w3-section">
          <div class="w3-col" style="width:7%;">
            <i class="w3-xxlarge fas fa-align-justify"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtDescFA" type="text" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Centro Paula Souza">
          </div>
        </div>

        <div class="w3-row w3-section">
          <div class="w3-center">
            <button name="btnAddFormacao" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
              <i class="w3-xxlarge fas fa-user-plus"></i>
            </button>
          </div>
        </div>
      </form>

      <div class="w3-container w3-centered w3-margin" style="width: 70%;">
        <table class="w3-table-all">
          <thead>
            <tr class="w3-center w3-blue">
              <th>Início</th>
              <th>Fim</th>
              <th>Descrição</th>
              <th>Apagar</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include_once '../Controller/FormacaoAcadController.php';
              $fCon = new FormacaoAcadController();
              $results = $fCon->gerarLista(unserialize($_SESSION['Usuario'])->getID());
              if($results != null)
              
              while($row = $results->fetch_object()) {
                echo '<tr>';
                echo '<td >'.date('d/m/Y', strtotime($row->inicio)).'</td>';
                echo '<td >'.date('d/m/Y', strtotime($row->fim)).'</td>';
                echo '<td style="width: 55%;">'.$row->descricao.'</td>';
                echo '<td style="width: 5%;">
                  <form action="/Controller/Navegacao.php" method="post">
                    <input type="hidden" name="id" value="'.$row->idformacaoAcademica.'">
                    <button name="btnExcluirFA" class="w3-button w3-block w3-blue w3-cell w3-roundlarge">
                    <i class="fa fa-user-times"></i> </button></td>
                  </form>';
                echo '</tr>';
              }
            ?>
          </tbody>
        </table>
      </div>
    </div>

    <div class="w3-padding-128 w3-content w3-text-grey" id="eProfissional">
      <h2 class="w3-text-cyan">Experiência Profissional</h2>
      <form action="/Controller/Navegacao.php" method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width: 70%;">
        <div class="w3-row w3-center">
          <div class="w3-col" style="width:50%;">Data Inicial</div>
          <div class="w3-res">Data Final</div>
        </div>

        <div class="w3-row w3-section">
          <div class="w3-row w3-section w3-col" style="width:45%;">
            <div class="w3-col" style="width:15%;">
              <i class="w3-xxlarge fas fa-calendar-alt"></i>
            </div>
            <div class="w3-rest">
              <input class="w3-input w3-border w3-round-large" name="txtInicioEP" type="date" placeholder="">
            </div>
          </div>
          <div class="w3-row w3-section w3-rest">
            <div class="w3-col w3-margin-left" style="width:13%;">
              <i class="w3-xxlarge fas fa-calendar-alt"></i>
            </div>
            <div class="w3-rest">
              <input class="w3-input w3-border w3-round-large" name="txtFimEP" type="date" placeholder="">
            </div>
          </div>

        </div>

        <div class="w3-row w3-section">
          <div class="w3-col" style="width:7%;">
            <i class="w3-xxlarge fas fa-align-justify"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtEmpEP" type="text" placeholder="Centro Paula Souza">
          </div>
        </div>

        <div class="w3-row w3-section">
          <div class="w3-col" style="width:7%;">
            <i class="w3-xxlarge fas fa-align-justify"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtDescEP" type="text" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Desenvolvimento de Páginas WEB">
          </div>
        </div>

        <div class="w3-row w3-section">
          <div class="w3-center">
            <button name="btnAddEP" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
              <i class="w3-xxlarge fas fa-user-plus"></i>
            </button>
          </div>
        </div>

      </form>

      <div class="w3-container w3-centered w3-margin" style="width: 70%;">
        <table class="w3-table-all">
          <thead>
            <tr class="w3-center w3-blue">
              <th>Início</th>
              <th>Fim</th>
              <th>Empresa</th>
              <th>Descrição</th>
              <th>Apagar</th>
            </tr>
          </thead>

          <tbody>
              <?php
                include_once '../Controller/ExperienciaProfissionalController.php';
                $ePro = new ExperienciaProfissionalController();
                $results = $ePro->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                if ($results != null)

                  while ($row = $results->fetch_object()) {
                    echo '<tr>';
                    echo '<td >'.date('d/m/Y', strtotime($row->inicio)).'</td>';
                    echo '<td >'.date('d/m/Y', strtotime($row->fim)).'</td>';
                    echo '<td style="width: 20%;">' . $row->empresa . '</td>';
                    echo '<td style="width: 45%;">' . $row->descricao . '</td>';
                    echo '<td style="width: 5%;">
                      <form action="/Controller/Navegacao.php" method="post">
                      <input type="hidden" name="idEP" value="' . $row->idexperienciaprofissional . '">
                      <button name="btnExcluirEP" class="w3-button w3-block w3-blue w3-cell w3-
                      round-large">
                      <i class="fas fa-user-times"></i> </button></td>
                      </form>';
                    echo '</tr>';
                  }
              ?>
          </tbody>
        </table>
      </div>
    </div>

    <div class="w3-padding-128 w3-content w3-text-grey" id="oFormacoes">
      <h2 class="w3-text-cyan">Outras Formações</h2>
      <form action="/Controller/Navegacao.php" method="post" class=" w3-row w3-light-grey w3-text-blue w3-margin" style="width: 70%;">
        <div class="w3-row w3-center">
          <div class="w3-col" style="width:50%;">Data Inicial</div>
          <div class="w3-res">Data Final</div>
        </div>

        <div class="w3-row w3-section">
          <div class="w3-row w3-section w3-col" style="width:45%;">
            <div class="w3-col" style="width:15%;">
              <i class="w3-xxlarge fas fa-calendar-alt"></i>
            </div>
            <div class="w3-rest">
              <input class="w3-input w3-border w3-round-large" name="txtInicioOF" type="date" placeholder="">
            </div>
          </div>
          <div class="w3-row w3-section w3-rest">
            <div class="w3-col w3-margin-left" style="width:13%;">
              <i class="w3-xxlarge fas fa-calendar-alt"></i>
            </div>
            <div class="w3-rest">
              <input class="w3-input w3-border w3-round-large" name="txtFimOF" type="date" placeholder="">
            </div>
          </div>

        </div>

        <div class="w3-row w3-section">
          <div class="w3-col" style="width:7%;">
            <i class="w3-xxlarge fas fa-align-justify"></i>
          </div>
          <div class="w3-rest">
            <input class="w3-input w3-border w3-round-large" name="txtDescOF" type="text" placeholder="Descrição: Ex.: Técnico em Desenvolvimento de Sistemas - Desenvolvimento de Páginas WEB">
          </div>
        </div>

        <div class="w3-row w3-section">
          <div class="w3-center">
            <button name="btnAddOF" class="w3-button w3-block w3-blue w3-cell w3-round-large" style="width: 20%;">
              <i class="w3-xxlarge fas fa-user-plus"></i>
            </button>
          </div>
        </div>

      </form>

      <div class="w3-container w3-centered w3-margin" style="width: 70%;">
        <table class="w3-table-all">
          <thead>
            <tr class="w3-center w3-blue">
              <th>Início</th>
              <th>Fim</th>
              <th>Descrição</th>
              <th>Apagar</th>
            </tr>
          </thead>
          <tbody>
              <?php
                include_once '../Controller/OutrasFormacoesController.php';
                $ePro = new OutrasFormacoesController();
                $results = $ePro->gerarLista(unserialize($_SESSION['Usuario'])->getID());
                if ($results != null)

                  while ($row = $results->fetch_object()) {
                    echo '<tr>';
                    echo '<td >'.date('d/m/Y', strtotime($row->inicio)).'</td>';
                    echo '<td >'.date('d/m/Y', strtotime($row->fim)).'</td>';
                    echo '<td style="width: 65%;">' . $row->descricao . '</td>';
                    echo '<td style="width: 5%;">
                      <form action="/Controller/Navegacao.php" method="post">
                      <input type="hidden" name="idOF" value="' . $row->idoutrasformacoes . '">
                      <button name="btnExcluirOF" class="w3-button w3-block w3-blue w3-cell w3-
                      round-large">
                      <i class="fas fa-user-times"></i> </button></td>
                      </form>';
                    echo '</tr>';
                  }
              ?>
          
          </tbody>
        </table>
      </div>
    </div>

  </div>

</body>

</html>