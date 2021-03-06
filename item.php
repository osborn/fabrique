
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
        <link href="stylesheets/css/carousel.css" rel="stylesheet">
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
                    <li><a href="/products">Gallery</a></li>
                    <li class="active" id="active">GTP</li>
                </ol>
            </div>


            <div class="container inner">
                <div class="row">
                    <div class="col-lg-4" id="image">
                        <img id="item-img" src="stylesheets/images/vlisco3.jpg">
                    </div>
                    <div class="col-lg-4">
                        <p><b>Matching Fabrics</b></p>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#" class="thumbnail suggested" id="thumb9">
                                    <img src="stylesheets/images/vlis.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#" class="thumbnail suggested" id="thumb10">
                                    <img src="stylesheets/images/vili.jpg">
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <a href="#" class="thumbnail suggested" id="thumb11">
                                    <img src="stylesheets/images/vlisco1.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item-price">GHC35</div>
                        <a data-toggle="modal" href="#" class="btn btn-success checkout" id="add-to-cart"><b>Add to Cart</b></a>
                        <br>
                        <br>
                        <a data-toggle="modal" href="#myModal" class="btn btn-primary checkout" id="add-to-cart"><b>Checkout</b></a>
                        <br><br><br>
                        <div class="center">
                            <span class='st_facebook_large' displayText='Facebook'></span>
                            <span class='st_twitter_large' displayText='Tweet'></span>
                            <span class='st_pinterest_large' displayText='Pinterest'></span>
                            <span class='st_email_large' displayText='Email'></span>
                            <span class='st_googleplus_large' displayText='Google +'></span>
                            <span class='st_fashiolista_large' displayText='Fashiolista'></span>
                        </div>
                        <br>
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#">Item Details</a></li>
                            <li><a href="#">Ratings</a></li>
                            <li><a href="#">Shipping Policies</a></li>
                        </ul>
                        <div class="container">GTP Wax Print is produced by Ghana Textiles Production and they have a collection of very beautiful and authentic African fabrics. Fabrique takes full responsibility for the delivery and use of the product.</div>
                    </div>

                </div>

            </div>


            <div class="container">
                <hr>
                <!-- FOOTER -->
                <footer>
                    <p class="pull-right"><a href="#">Back to top</a></p>
                    <p>&copy; 2013 Ensembly &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
                </footer>

            </div><!-- /.container -->


            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <div class="modal-body">
                            <div class="container">

                                <form class="form-signin" action="redirect_checkout.php">
                                    <h2 class="form-signin-heading">Your Billing Address</h2>
                                    <input type="text" class="form-control" placeholder="Full Name"><br>
                                    <select class="form-control">
                                        <option value="volvo">City</option>
                                        <option value="volvo">Kumasi</option>
                                        <option value="volvo">Tamale</option>
                                        <option value="volvo">Koforidua</option>
                                        <option value="volvo">Accra</option>
                                    </select>
                                    <br>
                                    <input type="text" class="form-control" placeholder="Neighbourhood" autofocus><br>
                                    <input type="text" class="form-control" placeholder="House Number or close Landmark" autofocus><br>
                                    <input type="text" class="form-control" placeholder="Telephone number">
                                    <br>
                                    <button class="btn btn-lg btn-primary btn-block" type="submit">Pay with Mpower</button>
                                </form>

                            </div> <!-- /container -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
        </div><!-- /.modal --
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="stylesheets/js/jquery-1.9.0.min.js"></script>
        <script src="stylesheets/js/bootstrap.min.js"></script>
        <script src="stylesheets/js/holder.js"></script>


        <script type="text/javascript">var switchTo5x=true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "073786e0-bb28-48b4-b233-27712a606d96", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
        <script>
            $(document).ready(function(){
                var img = $('.suggested');
                img.click(function(){
                    $("#image").html("<img src='images/vli.jpg' >");
                    $('.item-price').html('GHC20');
                    $('#active').html('ATL');
                    $('#thumb10').html("<img src='images/vli.jpg' id='thumb1'>");
                });

                $('#add-to-cart').click(function(){
                    $('.badge').html('1');
                    $('.badge').css('background-color', 'red');
                });
            });
        </script>
    </body>
</html>