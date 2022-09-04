<?php
#Essa página será responsável por tratar as informações inseridas 
#na página de login e verificar se o usuário inseriu as informações 
#corretas, e logo em seguida redirecioná-lo.
if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $cadastrar = $_POST["submit"];
    $senha = md5($_POST["senha"]);

    $host = "localhost";
    $database = "projeto";
    $username = "root";
    $password = "root";

    $conexao = mysqli_connect($host, $username, $password, $database);
    $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'" or die("Erro ao selecionar");
    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha'])){

        $result = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($result) < 1){
                unset($_SESSION['email']);
                unset($_SESSION['senha']);
                echo"<script language='javascript' type='text/javascript'>
                alert('Não existe'); window.location.href='login.php'</script>";
            }else{
                $_SESSION['email'] = $email;
                $_SESSION['senha'] = $senha;
                header('Location: sistema.php');
            }

        }else{
            header('Location: login.php');
        }
}
?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Medion</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700|Roboto:400,700&display=swap" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <div class="top_contact-container">
          <div class="tel_container">
          </div>
          <div class="social-container"> 
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="">
            <span>
              PreçoBOM Parelhas
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex  flex-column flex-lg-row align-items-center w-100 justify-content-between">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> Sobre </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Contate a gente</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="visualizar_produto.php">Visualizar Ofertas</a>
                </li>
              </ul>
              <div class="login_btn-contanier ml-0 ml-lg-5">
                <a href="login.php">
                  <img src="images/user.png" alt="">
                  <span>
                    Login
                  </span>
                </a>
              </div>
            </div>
          </div>

        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>


  <!-- about section -->
  <section class="about_section layout_padding">
    <div class="container">
      <div class="custom_heading-container ">
        <h2>
          Página de Login
        </h2>
      </div>

      <div class="img-box">
      </div>
      <div class="detail-box">
        
        <form action="login.php" method="post">
          <label for="email">E-mail: </label>
          <input type="text" id="email" name="email"/>
          <label for="senha">Senha: </label>
          <input type="password" id="senha" name="senha"/>
          <input type="submit" value="Cadastrar" id="submit" name="submit">
          <a href="cadastro_login.php"> Criar conta</a>
        </form>
      </div>
    </div>
  </section>



  <!-- info section -->
  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h4>
              Contato
            </h4>
            <div class="box">
              <div class="img-box">
                <img src="images/telephone-symbol-button.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  (84) 996205253
                </h6>
              </div>
            </div>
            <div class="box">
              <div class="img-box">
                <img src="images/email.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  iran.f@escolar.ifrn.edu.br
                </h6>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_menu">
            <h4>
              Menu
            </h4>
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> Sobre </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contate a gente</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="visualizar.php"> Visualizar Ofertas </a>  
              </li>
              </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="info_menu">
            <h4>
             Projeto Integrador
            </h4>
            <ul class="navbar-nav">
              <li>
                <span>
                  Orientador
                </span>
              </li>
              <ul>
                <li>
                  <span>
                    Andouglas Gonçalves da Silva Junior
                  </span>
                </li>
              </ul>
            </ul>
            <ul class="navbar-nav">
              <li>
                <span>
                  alunos
                </span>
              </li>
              <ul>
                <li>
                  <span>
                    Iran Ferreira dos Santos
                  </span>
                </li>
                <li>
                  <span>
                    Armison Carlos dos Santos Silva
                  </span>
                </li>
                <li>
                  <span>
                    Johnnata Gabriel dos Santos
                  </span>
                </li>
              </ul>
            </ul>
          </div>
        </div>
  </section>


  <!-- end info section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy; 2019 All Rights Reserved. Design by
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
  </script>
  <script type="text/javascript">
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
  <script type="text/javascript">
    $(".owl-2").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      navText: [],
      autoplay: true,

      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 4
        }
      }
    });
  </script>
</body>

</html>