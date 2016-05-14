<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Mar de Sabores - O Portal dos Confeiteiros</title>

        <!-- CSS -->
        <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="../bootstrap/css/nivo-lightbox.css" rel="stylesheet" />
        <link href="../bootstrap/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
        <link href="../bootstrap/css/owl.carousel.css" rel="stylesheet" media="screen" />
        <link href="../bootstrap/css/owl.theme.css" rel="stylesheet" media="screen" />	
        <link href="../bootstrap/css/animate.css" rel="stylesheet" />
        <link href="../bootstrap/css/style.css" rel="stylesheet">
        <link href="../bootstrap/color/default.css" rel="stylesheet">

    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-custom">

        <!-- Section: intro -->
        <section id="intro" class="intro-pages">
            <h4>Olá <?= $_SESSION['nome'] ?>, Seja bem vindo!</h4>

            <div class="slogan">
                <a href="index.html"><img src="../bootstrap/img/logo.png" alt="" /></a>
                <h3>Os melhores bolos e doces na sua casa!</h3>
            </div>

        </section>
        <!-- /Section: intro -->




        <!-- Section: Area confeiteiro -->
        <section id="about" class="home-section">


            <div id="navigation">
                <nav class="navbar navbar-custom" role="navigation">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">


                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse" id="menu">
                                    <ul class="nav navbar-nav">
                                        <li><a href="../confeiteiro/confeiteiro.php">[Alterar cadastro]</a></li>
                                        <li><a href="">[Cadastrar produto]</a></li>
                                        <li><a href="">[Alterar produto]</a></li>                                                                         <li><a href="">[Deletar produto]</a></li>
                                    </ul>
                                </div>


                            </div>
                        </div>
                    </div>

                </nav>
            </div> 


        </section>
        <!-- /Section: Area confeiteiro -->

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <p>&copy;Copyright 2016 . Mar de Sabores - O Portal do Confeiteiros</p>
                    </div>  
                </div>	
            </div>
        </footer>

        <!-- Core JavaScript Files -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.easing.min.js"></script>	
        <script src="js/jquery.sticky.js"></script>
        <script src="js/jquery.scrollTo.js"></script>
        <script src="js/stellar.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/nivo-lightbox.min.js"></script>
        <!-- Custom Theme JavaScript -->
        <script src="js/custom.js"></script>

    </body>

</html>
