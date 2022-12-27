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
                <li><a href="pagina-inicio.php">Início</a></li>
                <li><a href="sobre-logado.html">Sobre Nós</a></li>
                <li><a href="doações-inicio.html">Doações</a></li>
                <li><a href="adote.php">Adote</a></li>
                <li><a href="log-session-ini.php" class="btn">Logout</a></li>
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

                if ($_SESSION['log'] != "ativo")
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
                <h1>Descubra</h1>
              </div>
              <p class="text">
                Como uma organização de adoção de animais dedicada desde 2022, a Adopt Me descobriu 
                inúmeras maneiras de fazer uma diferença positiva na vida e bem-estar dos animais. Em um mundo ideal, todo ser 
                humano seria compassivo o suficiente para dar uma mão amiga. Existem muitas maneiras de se envolver como: voluntariado, doações e adoções.
              </p>
              <div class="cta">
                <a href="see-inicio.html" class="btn">Ver Mais</a>
              </div>
            </div>

            <div class="right">
              <img src="assets/img/imglanding.svg" alt="Person Image" class="person" />
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