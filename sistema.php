<?php
$host = "localhost";
$database = "projeto";
$username = "root";
$password = "root";
$conexao = mysqli_connect($host, $username, $password, $database);
session_start();
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){

  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  header('Location: login.php');
}
$logado = $_SESSION['email'];
$sql = "SELECT * FROM empresa ORDER BY cnpj DESC";
$resultado = mysqli_query($conexao, $sql);
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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
              <form class="form-inline ">
                <input type="search" placeholder="Pesquisar">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
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
          sistema
        </h2>
      </div>

      <div class="img-box">
      </div>
      <div class="detail-box">
        <div class="m-5">
          <table class="table text-dark table-bg">
              <thead>
                  <tr>
                      <th scope="col">CNPJ</th>
                      <th scope="col">Nome</th>
                      <th scope="col">Telefone</th>
                      <th scope="col">Rua</th>
                      <th scope="col">Bairro</th>
                      <th scope="col">N°</th>
                      <th scope="col">E-mail</th>
                      <th scope="col">Senha</th>
                      <th scope="col"> .....</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                      while($user_data = mysqli_fetch_assoc($resultado)) {
                          echo "<tr>";
                          echo "<td>".$user_data['cnpj']."</td>";
                          echo "<td>".$user_data['nome']."</td>";
                          echo "<td>".$user_data['telefone']."</td>";
                          echo "<td>".$user_data['rua']."</td>";
                          echo "<td>".$user_data['bairro']."</td>";
                          echo "<td>".$user_data['numero_estabelecimento']."</td>";
                          echo "<td>".$user_data['email']."</td>";
                          echo "<td>".$user_data['senha']."</td>";
                          echo "<td> 
                                  <a class='btn btn-sm btn-primary' href='atualizar_empresa.php?cnpj=$user_data[cnpj]' title='Editar'>
                                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                    </svg>
                                  </a> 
                                </td>"; 
                          echo "<td>";
                      }
                      ?>
              </tbody>
          </table>
        </div>
      
        

        
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5">Sair</a>
        </div>
        <div class="d-flex">
            <a href="sistema_produto.php" class="btn btn-danger me-5">Produtos</a>
        </div>
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
                    Rafael Castro de Souza
                  </span>
                </li>
              </ul>
            </ul>
            <ul class="navbar-nav">
              <li>
                Alunos
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