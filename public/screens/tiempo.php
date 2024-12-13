<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta
    name="description"
    content="Stay organized with our user-friendly Calendar featuring events, reminders, and a customizable interface. Built with HTML, CSS, and JavaScript. Start scheduling today!" />
  <meta
    name="keywords"
    content="calendar, events, reminders, javascript, html, css, open source coding" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <!-- Libraries Stylesheet -->
  <link href="../lib/animate/animate.min.css" rel="stylesheet" />
  <link
    href="../lib/owlcarousel/assets/owl.carousel.min.css"
    rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="../css/style.css" rel="stylesheet" />
  <link href="../css/tiempo.css" rel="stylesheet" />

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />
  <title>Lujos La Pava</title>
</head>

<body>
  <!-- Topbar Start -->
  <div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
      <div class="col-lg-6 d-none d-lg-block">
        <div class="d-inline-flex align-items-center h-100">
          <a class="text-body mr-3" href="contacto.php">Contacto</a>
          <a class="text-body mr-3" href="ayuda.php">Ayuda</a>
          <a class="text-body mr-3" href="Preguntas.php">Preguntas Frecuentes</a>
        </div>
      </div>
      <div class="col-lg-6 text-center text-lg-right">
        <div class="d-inline-flex align-items-center">
          <div class="btn-group">
            <button
              type="button"
              class="btn btn-sm btn-light dropdown-toggle"
              data-toggle="dropdown">
              Mi cuenta
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <button class="dropdown-item" type="button">
                <a class="text-body mr-3" href="login.php">Iniciar sesión</a>
              </button>
              <button class="dropdown-item" type="button">
                <a class="text-body mr-3" href="Inscribirse.php">Inscribirse</a>
              </button>
              <button class="dropdown-item" type="button">
                <a class="text-body mr-3" href="../php/perfil_usuario.php">Cuenta</a>
              </button>
            </div>
          </div>
        </div>
        </di>
      </div>
      <div
        class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-4">
          <a href="" class="text-decoration-none">
            <span class="h1 text-uppercase text-primary bg-dark px-2">Lujos</span>
            <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">LaPava</span>
          </a>
        </div>
        <div class="col-lg-4 col-6 text-left"></div>
        <div class="col-lg-4 col-6 text-right">
          <p class="m-0">Servicio al Cliente</p>
          <h5 class="m-0">+57 320 598 8335</h5>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <section>
      <div class="containerB">
        <div class="left">
          <div class="calendar">
            <div class="month">
              <i class="fas fa-angle-left prev"></i>
              <div class="date">december 2015</div>
              <i class="fas fa-angle-right next"></i>
            </div>
            <div class="weekdays">
              <div>D</div>
              <div>L</div>
              <div>M</div>
              <div>M</div>
              <div>J</div>
              <div>V</div>
              <div>S</div>
            </div>
            <div class="days"></div>
            <div class="goto-today">
              <div class="goto">
                <input type="text" placeholder="mm/yyyy" class="date-input" />
                <button class="goto-btn">IR</button>
              </div>
              <button class="today-btn">HOY</button>
            </div>
          </div>
        </div>
        <div class="right">
          <div class="today-date">
            <div class="event-day">wed</div>
            <div class="event-date">12th december 2022</div>
          </div>
          <div class="events"></div>
          <div class="add-event-wrapper">
            <div class="add-event-header">
              <div class="title">AGREGAR CITA</div>
              <i class="fas fa-times close"></i>
            </div>
            <div class="add-event-body">
              <div class="add-event-input">
                <input
                  type="text"
                  placeholder="Numero de Placa"
                  class="event-name" />
              </div>
              <div class="add-event-input">
                <input
                  type="text"
                  placeholder="Tiempo de inicio"
                  class="event-time-from" />
              </div>
              <div class="add-event-input">
                <input
                  type="text"
                  placeholder="Tiempo estimado de entraga"
                  class="Tiempo estimado de entrega" />
              </div>
            </div>
            <div class="add-event-footer">
              <button class="add-event-btn">Agregar</button>
            </div>
          </div>
        </div>
        <button class="add-event">
          <i class="fas fa-plus"></i>
        </button>
      </div>
    </section>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
      <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
          <h5 class="text-secondary text-uppercase mb-4">Lujos La Pava</h5>
          <p class="text-secondary mb-2">
            <i class="fa fa-map-marker-alt text-primary mr-3"></i>carrera 11
            #748, Zarzal, Valle del Cauca, Colombia
          </p>
          <p class="text-secondary mb-2">
            <i class="fa fa-envelope text-primary mr-3"></i>info@example.com
          </p>
          <p class="text-secondary mb-2">
            <i class="fa fa-phone-alt text-primary mr-3"></i>++57 320 598 8335
          </p>
        </div>
        <div class="col-lg-8 col-md-12">
          <div class="row">
            <div class="col-md-4 mb-5">
              <h5 class="text-secondary text-uppercase mb-4">Atajos</h5>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-secondary mb-2" href="../index.php"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                <a class="text-secondary mb-2" href="../screens/ProductosyRepuestos.php"><i class="fa fa-angle-right mr-2"></i>Productos y
                  Repuestos</a>
                <a class="text-secondary mb-2" href="../screens/Carrito.php"><i class="fa fa-angle-right mr-2"></i>Carrito de compra</a>

                <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Agenda tu cita</a>
                <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contactos</a>
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <h5 class="text-secondary text-uppercase mb-4">Mi cuenta</h5>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-secondary mb-2" href="../index.php"><i class="fa fa-angle-right mr-2"></i>Inicio</a>
                <a class="text-secondary mb-2" href="../screens/login.php"><i class="fa fa-angle-right mr-2"></i>Iniciar sesión</a>
                <a class="text-secondary mb-2" href="../screens/Inscribirse.php"><i class="fa fa-angle-right mr-2"></i>Inscribirse</a>
                <a class="text-secondary mb-2" href="../screens/servicosMacanicos.php"><i class="fa fa-angle-right mr-2"></i>Información de
                  servicios</a>
                <a class="text-secondary mb-2" href="../screens/Informaciónmecanicos.php"><i class="fa fa-angle-right mr-2"></i>Información de
                  mecanicos</a>
              </div>
            </div>
            <div class="col-md-4 mb-5">
              <h6 class="text-secondary text-uppercase mt-4 mb-3">SÍGANOS</h6>
              <div class="d-flex">
                <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div
        class="row border-top mx-xl-5 py-4"
        style="border-color: rgba(256, 256, 256, 0.1) !important">
        <div class="col-md-6 px-xl-0">
          <p class="mb-md-0 text-center text-md-left text-secondary">
            &copy; <a class="text-primary" href="#">Univalle</a>. Desarrollado
            con fines educativos por estudiantes de
            <a class="text-primary" href="#">Tecnologia en desarrollo de software</a>
          </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
          <img class="img-fluid-univalle" src="img/uni.jpg" alt="" />
        </div>
      </div>
    </div>
    <!-- Footer End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>

</body>

</html>