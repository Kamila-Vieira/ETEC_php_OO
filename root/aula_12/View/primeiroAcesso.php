<?php include './includes/head.php'; ?>

<title>Primeiro Acesso</title>
</head>

<body>
  <form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle" style="width: 30%;">
    <h2 class="w3-center">Primeiro Acesso</h2>
    <div class="w3-row w3-section">
      <div class="w3-col" style="width:11%;">
        <i class="w3-xxlarge fas fa-user"></i>
      </div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtNome" type="text" placeholder="Nome Completo">
      </div>
    </div>
    <div class="w3-row w3-section">
      <div class="w3-col" style="width:11%;">
        <i class="w3-xxlarge fas fa-drivers-license"></i>
      </div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtCPF" type="text" placeholder="CPF: 33333333333">
      </div>
    </div>
    <div class="w3-row w3-section">
      <div class="w3-col" style="width:11%;">
        <i class="w3-xxlarge fas fa-envelope-o"></i>
      </div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtEmail" type="text" placeholder="Email">
      </div>
    </div>
    <div class="w3-row w3-section">
      <div class="w3-col" style="width:11%">
        <i class="w3-xxlarge fas fa-lock"></i>
      </div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtSenha" type="password" placeholder="Senha">
      </div>
    </div>

    <div class="w3-row w3-section">
      <div class="w3-center">
        <button name="btnCadastrar" class="w3-button w3-block w3-margin w3-blue w3-cell w3-roundlarge" style="width: 90%;">Cadastrar</button>
      </div>
    </div>
  </form>

  <?php include './includes/foot.php'; ?>