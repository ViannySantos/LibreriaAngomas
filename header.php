<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>LibreriaAngomas</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
  </head>
  <body>

    <!-- ***** Preloader Start ***** -->
    <section id="preloader">
        <section class="jumper">
            <section></section>
            <section></section>
            <section></section>
        </section>
    </section>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <section class="sub-header">
      <section class="container">
        <section class="row">
          <section class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><a href="#"><i class="fa fa-envelope"></i>LibreriaAngomas@company.com</a></li>
              <li><a href="#"><i class="fa fa-phone"></i>123-456-7890</a></li>
            </ul>
          </section>
          <section class="col-md-4">
            <ul class="right-icons">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </section>
        </section>
      </section>
    </section>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <section class="container">
          <a class="navbar-brand" href="?p=inicio"><h2>Libreria<em> Angomas</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <section class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item <?php echo $pagina == 'inicio' ? 'active' : ''; ?>">
                <a class="nav-link" href="?p=inicio">inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item <?php echo $pagina == 'book-table' ? 'active' : ''; ?>">
                <a class="nav-link" href="?p=book-table">Pedidos</a>
              </li>
              <li class="nav-item <?php echo $pagina == 'menu' ? 'active' : ''; ?>">
                <a class="nav-link" href="?p=menu">Catalogo</a>
              </li>
              <li class="nav-item dropdown <?php echo $pagina == 'about' ? 'active' : ''; ?> <?php echo $pagina == 'blog' ? 'active' : ''; ?> <?php echo $pagina == 'testimonials' ? 'active' : ''; ?>">
                <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Acerca de</a>
              
                <section class="dropdown-menu">
                    <a class="dropdown-item <?php echo $pagina == 'about' ? 'active' : ''; ?>" href="?p=about">Acerca de</a>
                    <a class="dropdown-item <?php echo $pagina == 'testimonials' ? 'active' : ''; ?>" href="?p=testimonials">Autores</a>
                </section>
              </li>
              <li class="nav-item <?php echo $pagina == 'contact' ? 'active' : ''; ?>">
                <a class="nav-link" href="?p=contact">Contacto</a>
              </li>
            </ul>
          </section>
        </section>
      </nav>
    </header>