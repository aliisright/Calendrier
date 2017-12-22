<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../resources/assets/css/index/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../resources/assets/sass/index/style.css">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Marck+Script" rel="stylesheet">

        <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Calendrier de l'avent</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Calendrier Zen</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li><a href="{{ route('image.form') }}">Calendrier</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

<header class="header">
        <h1 class="title">Bienvenu sur notre calendrier édition spéciale zen !</h1>
        <h2 class="subtitle">Celui qui est le maître de lui-même <br>
            est plus grand que celui qui est le maître du monde <br>
        <strong>-Bouddha</strong>
        </h2>
    </header>

    <div class="container-fluid">
        <div class="row">
            <main class="carousel col-md-8">
                <section class="carousel">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">

                        <div class="item active">
                          <img src="../resources/assets/images/index/matin.jpg" alt="le matin">
                          <div class="carousel-caption">
                            <h3 class="title-carousel">Le matin</h3>
                            <p class="subtitle-carousel">Je n'ai qu'une chose à mon planning aujourd'hui : être heureux(se)</p>
                          </div>
                        </div>

                        <div class="item">
                          <img src="../resources/assets/images/index/confiance.jpg" alt="confiance en soi">
                          <div class="carousel-caption">
                            <h3 class="title-carousel">La confiance en soi</h3>
                            <p class="subtitle-carousel">Je brille par ma présence, mon charme et ma grâce</p>
                          </div>
                        </div>

                        <div class="item">
                          <img src="../resources/assets/images/index/zen.jpg" alt="calme intérieur">
                          <div class="carousel-caption">
                            <h3 class="title-carousel">Le calme intérieur</h3>
                            <p class="subtitle-carousel">J'inspire le calme, j'expire le stress</p>
                          </div>
                        </div>

                        <div class="item">
                          <img src="../resources/assets/images/index/futur.jpg" alt="le futur">
                          <div class="carousel-caption">
                            <h3 class="title-carousel">Le futur</h3>
                            <p class="subtitle-carousel">Je suis l'architecte de ma vie. Je construis ses fondations et je choisis son contenu</p>
                          </div>
                        </div>

                      </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                </section>
            </main>

            <section class="button-area col-md-4">
                <h3 class="presentation">Notre calendrier de l'avent Zen</h3>
                <p>Envie de prendre les commandes et de faire vous même votre calendrier de l'avent interactif ?<br>
                  Découvrez chaque jour une citation zen, un exercice de méditation, une vidéo de bien-être et bien plus encore !<br>
                  Choisissez-vous même votre texte et vos animations et faîtes vous plaisir tous les jours pendant un mois.</p>
                <a href="exemple/index.html">Essayer la version gratuite !</a>
                <!-- <button class="btn btn-custom btn-try"></button>-->
            </section>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; Copyright 2017 calendrierzen.com</p>
    </footer>

    <!-- Scripts Js -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.11/vue.js"></script>
</body>

</html>
