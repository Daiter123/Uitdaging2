<!DOCTYPE html>
<html lang="nl">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
      <link rel="shotcut icon" type="image" href="Afbeeldingen/favicon.png">


    <title>3A Design</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css
" integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"
          rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="css/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/freelancer.min.css" rel="stylesheet">


  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">3A Desgign</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>

      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">

        <h1 class="text-uppercase mb-0">Contactformulier</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">   <?php
                                           		if (isset($_POST["gebruikersnaam"]) && $_POST["gebruikersnaam"] != "") {
                                           			echo "<p> Naam: " . $_POST["gebruikersnaam"] . "</p>\n";
                                           		} else {
                                           			echo "<p> Gebruikersnaam werd niet ingevuld </p>\n";
                                           		}


                                           		if (isset($_POST["feedback"]) && $_POST["feedback"] != "") {
                                           			echo "<p> Opmerking: " . $_POST["feedback"] . "</p>\n";
                                           		} else {
                                           			echo "<p> Opmerkingen werd niet ingevuld </p>\n";
                                           		}

                                           		if (isset($_POST["email"]) && $_POST["email"] != "") {
                                           			echo "<p> Mail: " . $_POST["email"] . "</p>\n";
                                           		} else {
                                           			echo "<p> Mail werd niet ingevuld </p>\n";
                                           		}



                                           	?></h2>
        <h2 class="font-weight-light mb-0">
        <br>
        <a href="index.html"style="color: #ffffff">Ga terug naar de beginpagina
        </h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->

    <!-- About Section -->




    <!-- Bootstrap core JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="j"></script>s/contact_me.js

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>

