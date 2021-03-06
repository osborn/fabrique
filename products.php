
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
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans">
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
                    <li class="active"><a href="/products">Gallery</a></li>
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

        <div class="container" id="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">Gallery</li>
            </ol>
        </div>

        <div class="container pull-left">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-lg-2">
                    <p>Products</p>
                    <hr>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            Sort By
                        </a>
                        <a href="#" class="list-group-item">Popularity</a>
                        <a href="#" class="list-group-item">Trending</a>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            Brands
                        </a>
                        <a href="#" class="list-group-item">GTP</a>
                        <a href="#" class="list-group-item">ATL</a>
                        <a href="#" class="list-group-item">Woodin</a>
                    </div>
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            Price
                        </a>
                        <br>
                        &nbsp;&nbsp;<input type="range" id="price" class="col-md-8" data-slider-min="10" data-slider-max="500" data-slider-step="1" data-slider-value="-14" data-slider-orientation="horizontal" data-slider-selection="after"data-slider-tooltip="hide">
                        <hr>
                        <input class="form-control" type="text" id="quote" placeholder="Your budget">
                    </div>
                </div>
                <div class="col-lg-10">

                    <div class="container pictures">
                        <div class="row">
                            <div class="col-sm-6 col-md-3">
                                <a href="item.php" class="thumbnail">
                                    <img src="stylesheets/images/vlisco3.jpg" alt="..." class="img_height">
                                </a>
                                <p class="description">GTP</p>
                                <p class="price">GHC35.00</p>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="stylesheets/images/vlis.jpg" alt="..." style="height:260px;">
                                </a>
                                <p class="description">Vlisco</p>
                                <p class="price">GHC45.00</p>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="stylesheets/images/vili.jpg" alt="..." style="height:260px;">
                                </a>
                                <p class="description">Woodin</p>
                                <p class="price">GHC45.00</p>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <a href="#" class="thumbnail">
                                    <img src="stylesheets/images/vlisco1.jpg" alt="...">
                                </a>
                                <p class="description">Uniwax</p>
                                <p class="price">GHC45.00</p>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="container">
                        <div class="col-sm-6 col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="stylesheets/images/Vlisco-IV.jpg" alt="...">
                            </a>
                            <p class="description">Uniwax</p>
                            <p class="price">GHC45.00</p>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="stylesheets/images/vli.jpg" alt="..." style="height:260px;">
                            </a>
                            <p class="description">Woodin</p>
                            <p class="price">GHC45.00</p>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="stylesheets/images/vlisco2.jpg" alt="..." style="height:260px;">
                            </a>
                            <p class="description">GTP</p>
                            <p class="price">GHC45.00</p>
                        </div>

                        <div class="col-sm-6 col-md-3">
                            <a href="#" class="thumbnail">
                                <img src="stylesheets/images/vly.jpg" alt="..." style="height:260px;">
                            </a>
                            <p class="description">Vlisco</p>
                            <p class="price">GHC45.00</p>
                        </div>

                    </div>


                    <hr>


                    <!-- FOOTER -->
                    <footer>
                        <p class="pull-right"><a href="#">Back to top</a></p>
                        <p>&copy; 2013 Ensembly &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
                    </footer>

                </div><!-- /.container -->


<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="stylesheets/js/jquery-1.9.0.min.js"></script>
    <script src="stylesheets/js/bootstrap.min.js"></script>
    <script src="stylesheets/js/holder.js"></script>
    <script src="stylesheets/js/slider.js"></script>
    <script>
        $('#price').slider()
        .on('slide', function(ev){
            $('#quote').val(ev.value);
        });
    </script>
</body>
</html>
