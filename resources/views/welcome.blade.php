<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>GLOMA S.R.L</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/">

    
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
        padding-top: 3rem;
        padding-bottom: 3rem;
        color: #5a5a5a;
        }


        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
        margin-bottom: 4rem;
        }
        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
        bottom: 3rem;
        z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
        height: 32rem;
        }


        /* MARKETING CONTENT
        -------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
        }
        .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
        }


        /* Featurettes
        ------------------------- */

        .featurette-divider {
        margin: 5rem 0; /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */

        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 40em) {
        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
        }

        @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
        }

            body {
        padding-top: 3rem;
        padding-bottom: 3rem;
        color: #5a5a5a;
        }


        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
        margin-bottom: 4rem;
        }
        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
        bottom: 3rem;
        z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
        height: 32rem;
        }


        /* MARKETING CONTENT
        -------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
        .marketing .col-lg-4 {
        margin-bottom: 1.5rem;
        text-align: center;
        }
        /* rtl:begin:ignore */
        .marketing .col-lg-4 p {
        margin-right: .75rem;
        margin-left: .75rem;
        }
        /* rtl:end:ignore */


        /* Featurettes
        ------------------------- */

        .featurette-divider {
        margin: 5rem 0; /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        /* rtl:begin:remove */
        .featurette-heading {
        letter-spacing: -.05rem;
        }

        /* rtl:end:remove */

        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 40em) {
        /* Bump up size of carousel content */
        .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
        }

        .featurette-heading {
            font-size: 50px;
        }
        }

        @media (min-width: 62em) {
        .featurette-heading {
            margin-top: 7rem;
        }
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>
    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">GLOMA S.R.L</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        <nav class="nav nav-masthead justify-content-center">
            @if (Route::has('login'))
              @auth
              <a href="{{ route('/home') }}" class="nav-link fw-bold py-1 px-0" href="#">Casa</a>
              @else
              <a href="{{ route('login') }}" class="nav-link fw-bold py-1 px-20" href="#">Ingresa</a>
              @if (Route::has('register'))
              <a href ="{{ route('register') }}" class="nav-link fw-bold py-1 px-0" href="#">Registrate</a>
              @endif
              @endauth
           @endif
        </nav>
      </div>
    </div>
  </nav>
</header>

<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="bd-placeholder-img" width="100%" height="100%" src="data:image/jpeg;base64,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" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Todo tipo de transporte</h1>
            <p>Llevamos mercaderia pesada y tambien ligera</p>
            <p><a class="btn btn-lg btn-primary" href="#">Registrate</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ54QVxUruHysdddkAmcR6NQCfKGEbjMLY6LA&usqp=CAU" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="true"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Envia tu mercaderia con GLOMA</h1>
            <p>Envia con nosotros de una Forma segura y confiable al 100%</p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="bd-placeholder-img" width="100%" height="100%" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWclYFxmQ0xdIMvl2jVBOK0wZcdc5WvOEOlA&usqp=CAU" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Contactanos al numero *******</h1>
            <p>Ahora contamos con mas de 5 caminones a tu disposicion y en buen estado</p>
            <p><a class="btn btn-lg btn-primary" href="#">Llamanos</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://www.google.com/imgres?imgurl=https%3A%2F%2Flatin-america.internationalcamiones.com%2F-%2Fmedia%2FProject%2FInternational-Trucks%2FInternational-Trucks%2FLatinAmerica%2FCamiones%2FSERIE-LT%2F2023%2FSERIE-LT-Card.jpg%3Fh%3D261%26iar%3D0%26w%3D400%26rev%3D9182375979004636845f5ab430d1e5ac%26hash%3DDF3C0515C45EE17C8CEFB64E57E754A9&tbnid=1VPbFskbF-PRvM&vet=12ahUKEwj2lZKd1KL_AhWkDtQKHS8MBcsQMygXegUIARCQAg..i&imgrefurl=https%3A%2F%2Flatin-america.internationalcamiones.com%2Fcamiones&docid=OIedzXZGjuVc6M&w=400&h=261&q=camion&ved=2ahUKEwj2lZKd1KL_AhWkDtQKHS8MBcsQMygXegUIARCQAg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Promicion 20% de descuento </h2>
        <p>Por 10 viajes llevate un viaje con el 20% de descuento</p>
        <p><a class="btn btn-secondary" href="#">Ver más &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fstatic.retail.autofact.cl%2Fblog%2Fc_url_original.4kmjx7kgtkmztx.jpg&tbnid=HdqzgsGRgdTvHM&vet=12ahUKEwj2lZKd1KL_AhWkDtQKHS8MBcsQMygIegUIARDyAQ..i&imgrefurl=https%3A%2F%2Fwww.autofact.pe%2Fblog%2Fcomprar-auto%2Fcaracteristicas%2Ftipos-camiones&docid=NUttoG2Tl--jlM&w=1280&h=854&q=camion&ved=2ahUKEwj2lZKd1KL_AhWkDtQKHS8MBcsQMygIegUIARDyAQ" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Promocion por tonelada </h2>
        <p>Envie con nosotros y obten un 10% de descuento </p>
        <p><a class="btn btn-secondary" href="#">Ver más &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <img class="bd-placeholder-img rounded-circle" width="140" height="140" src="/https://musicopolix.com/blog/wp-content/uploads/2021/12/cuales-son-las-mejores-marcas-de-baterias-acusticas-portada.jpg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"></text></svg>

        <h2 class="fw-normal">Camiones</h2>
        <p>Tenemos 5 camiones a su dispocion </p>
        <p><a class="btn btn-secondary" href="#">Ver más &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Descuentos en los viajes por el uso de nuestra pagina web <span class="text-muted">¡INTENTALO!</span></h2>
        <p class="lead">Por el debut de nuestra pagina web otorgamos un 10% de descuento en nuestros transportes</p>
      </div>
      <div class="col-md-5">
        <image src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-KJPvRkaoVZ77ZRt_iSqShw8whI7lptqSww&usqp=CAU" height="500" width="500"/>

      </div>
    </div>

    <hr class="featurette-divider">


    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <p class="float-end"><a href="#">Back to top</a></p>
    <p>&copy; 2020–2023 GLOMA S.R.L &middot; <a href="#">Privacidad</a> &middot; <a href="#">Terminos y condiciones</a></p>
  </footer>
</main>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>
