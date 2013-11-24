
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Fabrique</title>

    <!-- Bootstrap core CSS -->
    <link href="stylesheets/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="../../assets/js/html5shiv.js"></script>
<script src="../../assets/js/respond.min.js"></script>
<![endif]-->

<!-- Custom styles for this template -->
<link rel="stylesheet" href="stylesheets/css/carousel.css">
<link rel="stylesheet" href="stylesheets/css/slider.css">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="stylesheets/css/ensembly.css">
</head>
<!-- NAVBAR
    ================================================== -->
    <body class="bg">
        <div class="navbar-wrapper">
            <div class="container" >
                <ul class="nav nav-pills" id="nav">
                    <li class="biz-logo"><a href="#"><!--img src="images/logo.png" alt="logo"  class="logo"-->Fabrique</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Brands<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/products">ATL</a></li>
                            <li><a href="/products">GTP</a></li>
                            <li><a href="/products">Woodin</a></li>
                            <li><a href="/products">Printex</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Type<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="/products">Wax</a></li>
                            <li><a href="/products">Linen</a></li>
                            
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Occassions<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Funeral</a></li>
                            <li><a href="#">Engagement</a></li>
                            <li><a href="/products">Work</a></li>
                        </ul>
                    </li>
                    <li><a href="products.php">Gallery</a></li>
                </ul> 
                <ul class="nav nav-pills" id="nav2">
                    <li>
                        <form class="navbar-form" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </li>
                    <li><a href="#">Sign In</a></li>
                    <li>
                      <a href="#">
                        <span class="glyphicon glyphicon-shopping-cart"></span>
                        <span class="badge">0</span>
                      </a>
                    </li>
                </ul>




            </div>
        </div>


<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img class="carousel" src="stylesheets/images/front.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <p class="caption">The best collection of 100% authentic African designer prints.</p>
                        <p><a class="btn btn-lg btn-default button btns" href="products.php"><b>GALLERY</b></a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/image3.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-large btn-primary btns" href="#"><b>Learn more</b></a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="images/image1.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-large btn-primary btns" href="#"><b>Browse gallery</b></a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"></a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next"></a>
    </div><!-- /.carousel -->



<!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <h2>Featured Brands</h2>

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img src="stylesheets/images/Woodin.jpg" class="shops">
                
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="stylesheets/images/atl.jpeg" class="shops" id="middle">
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img src="stylesheets/images/gtp.jpg" class="shops">
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->

        <hr class="featurette-divider">
        <!-- /END THE FEATURETTES -->


        <!-- FOOTER -->
        <footer>
            <p class="pull-right"><a href="#">Back to top</a></p>
            <p>&copy; 2013 Ensembly, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>

    </div><!-- /.container -->


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="stylesheets/js/jquery-1.9.0.min.js"></script>
    <script src="stylesheets/js/bootstrap.min.js"></script>
    <script src="stylesheets/js/holder.js"></script>
    <script src="stylesheets/js/slider.js"></script>
</body>
</html>