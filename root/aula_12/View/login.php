<?php include './includes/head.php'; ?>

<title>Enlatados Juarez</title>
</head>

<body>
  <form action="" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-display-middle" style="width: 30%;">
    <input type="hidden" name="nome_form" value="frmLogin" />

    <h2 class="w3-center">Login</h2>
    <div class="w3-row w3-section">
      <div class="w3-col" style="width:11%"><i class="w3-xxlarge fas fa-user"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtLogin" type="text" placeholder="Login CPF (ex.: 33333333333)">
      </div>
    </div>
    <div class="w3-row w3-section">
      <div class="w3-col" style="width:11%"><i class="w3-xxlarge fas fa-lock"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border w3-round-large" name="txtSenha" type="password" placeholder="Senha">
      </div>
    </div>


    <div class="w3-row w3-section">
      <div class="w3-half" style="">
        <button name="btnLogin" class="w3-button w3-block w3-margin w3-blue w3-cell w3-roundlarge" style="width: 90%;">Entrar</button>
      </div>
      <div class="w3-half">
        <button name="btnPrimeiroAcesso" class="w3-button w3-block w3-margin w3-blue w3-cell w3-round-large" style="width: 90%;">
          Primeiro Acesso?
        </button>
      </div>
    </div>
  </form>

  <?php include './includes/foot.php'; ?>