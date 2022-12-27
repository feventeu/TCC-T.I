<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Adopt Me | Início</title>
    <link rel="stylesheet" href="assets/style.css" />

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </head>
  <body>
    <main>
      <div class="big-wrapper light">
        

        <header>
          <div class="container">
            <div class="logo">
              <img src="assets/img/logo.png" alt="Logo" />
              <h3>Adopt Me</h3>
            </div>

            <div class="links">
              <ul>
                <li><a href="pagina-adm.php">Início</a></li>
                <li><a href="cadastro-animais.php">Cadastro de Animais</a></li>
                <li><a href="controle-adocao.php">Controle Adoção</a></li>
                <li><a href="mensagens.php">Mensagens</a></li>
                <li><a href="usuarios.php">Usuários</a></li>
                <li><a href="log-session-adm.php" class="btn">Logout</a></li>
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>
        <div>

       <center> <p class="text">
        <?php
                session_start();

                if ($_SESSION['admin1'] == 0)
                  {
                  session_destroy();
                  header("location:errocadastro2.php");
                  }
                  echo "Olá<b> ".$_SESSION['nome']."</b>,
                 Seja Bem-Vindo(a)</b>";		
                ?> 
                </p>
                </div></center>

        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>Pagina do</h1>
                <h1>Administrador</h1>
              </div>
              <p class="text">
                Esta página está destinada para manutenção, melhorias, e levantamento de dados.
              </p>
            </div>

            <div class="right">
              <img src="assets/img/admpage.svg" alt="Person Image" class="person" />
            </div>
          </div>
        </div>

        <div class="bottom-area">
          <div class="container">
            <button class="toggle-btn">
              <i class="far fa-moon"></i>
              <i class="far fa-sun"></i>
            </button>
          </div>
        </div>
      </div>
    </main>

    <!-- JavaScript Files -->

    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="app.js"></script>
  </body>
</html>