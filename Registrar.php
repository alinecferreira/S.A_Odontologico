<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="StyleLogin.css">
    <!-- <img src="img/fundo_login.jpg" /> -->
    <script src="JS/ValidacaoSenha.js"></script>
    <style type="text/css">
        
        body {
            font-family: Arial;
            height: 100vh; /* Altura total da tela */
            margin: 0;
            display: flex;
            justify-content: center; /* Centraliza horizontalmente */
            align-items: center; /* Centraliza verticalmente */
            background-color: grey;
        }

        label {
            display: inline-block;
            width: 60px;
        }
    </style>
</head>
<body>
    
    <div>
        <!-- <h1 align="center">RERISTRO</h1>
        <hr>
        <br> -->
        <form class="form" action="Cadastro.php" method="POST">
        <h3 id="senha-feedback"></h3>
            <p class="form-title"></p>
            <p class="form-title">Crie uma conta</p>
            <div class="input-container">
          <input type="text" name="nome" id="nome" placeholder="Nome:" required>
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="text" name="email" id="email" placeholder="Email:" required>
          <span>
          </span>
      </div>
        <div class="input-container">
          <input type="text" name="cpf" id="cpf" placeholder="CPF:" maxlength=14 required>
          <span>
          </span>
      </div>
      <div class="input-container">
          <input type="password" name="senha" id="senha" placeholder="Senha:" maxlength=12 required>
        </div>
         <button type="submit" class="submit">
        Registrar
      </button>

      <p class="signup-link">
        Possui conta?
        <a href="Index.php">Logar</a>
      </p>
   </form>
    </div>
    <script src="JS/ValidacaoSenha.js"></script>
</body>
</html>



