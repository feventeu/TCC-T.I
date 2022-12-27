<?php

include_once('conexao.php');

session_start();

                if ($_SESSION['log'] != "ativo")
                  {
                  session_destroy();
                  header("location:errocadastro2.php");
                  }
    

$sql = "SELECT * FROM  cadastro_ani ORDER BY id DESC";

$result = mysqli_query($mysql,$sql);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adopt Me | Adote</title>
    <link rel="stylesheet" href="assets/style.css" />
  </head>
  <body>

    <style>


main.cards {
    display: flex;
    padding: 35px;
}

main.cards section.card {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background: white;
    padding: 1rem 1.5rem;
    border-radius: 8px;
    max-height: 700px;
    margin-left: 32px;
}


main.cards section.card:first-child {
    margin-left: 0;
}

main.cards section.card .icon {
    width: 150px;
    height: 140px;
}

main.cards section.card img {
    width: 100%;
}

main.cards section.card h3 {
    font-size: 100%;
    margin: 16px 0;
}

main.cards section.card span {
    font-weight: 300;
    max-width: 240px;
    font-size: 80%;
    margin-bottom: 16px;
}

main.cards section.card button {
    padding: 0.5rem 1rem;
    text-transform: uppercase;
    border-radius: 32px;
    border: 0;
    cursor: pointer;
    font-size: 80%;
    font-weight: 500;
    color: #fff;
    margin-bottom: 16px 0;
}

main.cards section.card.contact button {
    background: linear-gradient(to right, #9F66FF, #DFCBFF);
}
main.cards section.card.shop button {
    background: linear-gradient(to right, #3E8AFF, #BBDEFF);
}
main.cards section.card.about button {
    background: linear-gradient(to right, #FE5F8F, #FFC7D9);
}

main.cards section.card.contact {
    box-shadow: 20px 20px 50px -30px #DBC4FF;
}
main.cards section.card.shop {
    box-shadow: 20px 20px 50px -30px #AFD6FF;
}
main.cards section.card.about {
    box-shadow: 20px 20px 50px -30px #FFC1D5;
}

@media screen and (max-width: 720px) {
    main.cards {
        flex-direction: column;
    }

    main.cards section.card {
        margin-left: 0;
        margin-bottom: 32px;
    }

    main.cards section.card:last-child {
        margin-bottom: 0;
    }

    main.cards section.card button {
        font-size: 70%;
    }

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
                <li><a href="pagina-inicio.php">Início</a></li>
   
              </ul>
            </div>

            <div class="overlay"></div>

            <div class="hamburger-menu">
              <div class="bar"></div>
            </div>
          </div>
        </header>

        <div class="showcase-area">
          <div class="container">
            <div class="left">
              <div class="big-title">
                <h1>Adote</h1>
              </div>
            
            
              <main class="cards">
                <?php
                while($dados = mysqli_fetch_assoc($result))
                {
                ?>
                <section class="card about">

                <div class="icon">
                      <img src="./animals/<?php echo $dados["imagem"]; ?>" alt="Contact us."> 
                  </div><br><br><br>
                <h3><?php echo $dados["nome"]; ?></h3>
                  <span><?php echo $dados["descricao"]; ?></span>
                  <h3>Raça: <?php echo $dados["raca"]; ?></h3>
                  
                  <a href="form-contato.html" class="btn">Adote</a>
                
               </section> 

              <?php
                }
              

              ?>

<!--

              <section class="card about">
                <div class="icon">
                    <img src="assets/img/face.svg" alt="Contact us.">
                </div>
                <h3>Facebook</h3>
                <span>@adoptmeepetss_</span>
                <a href="form-contato.html" class="btn">Adote</a>
            </section>
              -->        
            </main>

   
              
            </div>

            <div class="right">
              <img src="assets/img/adote.svg" alt="Person Image" class="person" />
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
    <script src="./app.js"></script>
  </body>
</html>