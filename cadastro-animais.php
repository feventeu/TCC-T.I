<?php

include_once('conexao.php');

session_start();

                if ($_SESSION['log'] != "ativo")
                  {
                  session_destroy();
                  header("location:errocadastro2.php");
                  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Adopt Me | Cadastro Animais</title>
    <link rel="stylesheet" href="assets/style.css" />

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  </head>
  <body>



  <style>

main form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

main form label {
    display: flex;
    flex-direction: column;
}

main form label span {
    font-size: 1.1rem;
    margin-top: 2rem;
}

main form input {
    background: #161923;
    width: 300px;
    height: 50px;
    padding: 0 0.5rem;
    margin-top: 1rem;
    outline: none;
    color: rgba(166, 166, 166);
    font-size: 1rem;
    border: 1px solid #040B18;
    border-radius: 8px;
}

main form input[type="submit"] {
    cursor: pointer;
    width: 50%;
    margin-top: 4rem;
    border: none;
    border-radius: 32px;
    background: #E1738C;
    color: white;
    font-size: 1.1rem;
    transition: all .3s ease-in-out;
}

main form input[type="submit"]:hover {
    background: #E1738C;
}
  </style>
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
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header><br><br>

        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
        <center> <h1>Cadastrar Animal</h1> </center> 
              </div>

              <form action="cad_ani.php" method="POST"  enctype="multipart/form-data">

                <p class="nome"> <label for="name">
                <span>Nome</span> 
                    <input type="text" id="nome" name="nome">
                </label>    
    
                <p class="descricao">     <label for="password">
                  <span>Descrição</span>
                  <input type="text" id="descricao" name="descricao">
              </label>    

                <label for="raca">
                <span>Raça</span>
                <input type="text" id="raca" name="raca">
            </label>   

            <label for="imagem">
                <span>Imagem</span>
                <input type="file" id="imagem" name="imagem">
            </label>
          </p>
                <input type="submit" value="Cadastrar" id="button">
              </form>
  
            </div>

            

            <div class="right">
              <img src="assets/img/cadasani.svg" alt="Person Image" class="person" />
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