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
  <title>Usuários Cadastrados</title>
</head>

<body>
  <header class="w3-container w3-padding-32 w3-center ">
    <h1 class="w3-text-white w3-panel w3-cyan w3-round-large">
      Lista de Usuários Cadastrados no Sistema
    </h1>
  </header>
  
  <div class="w3-padding-128 w3-content w3-text-grey">
    <div class="w3-container">
      <table class="w3-table-all w3-centered">
        <thead>
          <tr class="w3-center w3-blue">
            <th>Código</th>
            <th>Nome</th>
            <th>Visualizar</th>
          </tr>
          </thead>
          <tbody>
            <?php
              include_once '../Model/Usuario.php';
              include_once '../Controller/UsuarioController.php';
              if(!isset($_SESSION))
              {
                session_start();
              }
              $usuario = new UsuarioController();
              $results = $usuario->gerarLista();
              if($results != null)

              while($row = $results->fetch_object()) {
              echo '<tr>';
              echo '<td style="width: 1%;">'.$row->idusuario.'</td>';
              echo '<td style="width: 50%;">'.$row->nome.'</td>';
              echo '<td style="width: 5%;">
              <form action="/Controller/Navegacao.php" method="post">
                <input type="hidden" name="id" value="'.$row->idusuario.'">
                <button name="btnVisualizarCadastro" class="w3-button w3-block w3-blue w3-cell w3-roundlarge">
                <i class="fas fa-eye"></i> </button></td>
              </form>';
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
          <button name="btnVoltar" class="w3-button w3-block w3-margin w3-blue w3-cell w3-roundlarge" style="width: 90%;">
            Voltar
          </button>
        </div>
      </div>
    </form>
  </div>
</body>