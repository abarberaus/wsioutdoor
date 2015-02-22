<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>WSI Outdoor South Central USA</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet">
        <link href="css/main.css" rel="stylesheet">
        <link href="css/contact.css" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="img/wsilogo_favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/wsilogo_favicon.ico" type="image/x-icon">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="contact-page">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html">WSI Outdoor</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="index.html#brands">Our Brands</a>
                        </li>
                        <li>
                            <a href="index.html#team">Our Team</a>
                        </li>
                        <li>
                            <a href="index.html#showroom">Our Showroom</a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dealer Access<span class="caret"></span></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="arcteryx.html">Arc'teryx</a></li>
                            <li><a href="smith.html">Smith Optics</a></li>
                            <li><a href="reef.html">Reef Footwear</a></li>
                            <li><a href="hotchillys.html">Hot Chillys</a></li>
                            <li><a href="ot.html">Outdoor Tech</a></li>
                          </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- Header -->
        <div class="intro-header img-responsive">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="container contact">
                            <div class="row">
                                    <div class="col-sm-4" style="color: white;">
                                        <h4>Drop us a line!</h4>
                                        <hr>
                                        <address>
                                            <p>Are you looking to carry one of our lines?</p>
                                            <p>Do you need support for a clinic or event?</p> 
                                            <p>Just let us know, and we're glad to help!</p>
                                            <br><br>
                                            <strong>Phone:</strong> (208) 484-8538
                                        </address>
                                    </div>
                          
                                
                                <div class="col-sm-8 contact-form">
                                    <form name="contactform" method="post" action="mailer.php" class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="inputName" class="col-lg-2 control-label">Name</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail1" class="col-lg-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSubject" class="col-lg-2 control-label">Subject</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject Message">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword1" class="col-lg-2 control-label">Message</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..."></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    <button type="submit" class="btn btn-default">
                                        Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                                    <!-- test action -->
                                    <!-- <form id="contact" method="post" action="/mailer.php" class="form" role="form">
                                        <div class="row">

                                        <div class="form-group">
                                            <label for="inputName" class="col-lg-2 control-label">Name</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name">
                                            </div>                   

                                            <div class="col-xs-12 col-md-6 form-group nopaddingleft">
                                                <input class="form-control" id="name" name="name" placeholder="Name" type="text" required autofocus />
                                            </div>
                                            <div class="col-xs-12 col-md-6 form-group nopaddingright">
                                                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
                                            </div>
                                        </div>
                                        <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea>
                                        <br />
                                        <div class="row">
                                            <div class="col-xs-12 col-md-12 form-group nopaddingright">
                                                <button class="btn btn-primary pull-right" type="submit">Submit</button>
                                            </div>
                                        </div>
                                    </form> -->
                                </div>
                            </div>
                                    
                        </div>
                    </div>
                </div>
                        <!-- /.container -->
            </div>
                    <!-- /.intro-header -->
                    <!-- Page Content -->
                    <!-- /.banner -->
        </div>
                    <!-- Footer -->
                    <footer class="contact_footer">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <ul class="list-inline">
                                        <li>
                                            <a href="index.html#home">Home</a>
                                        </li>
                                        <li class="footer-menu-divider">&sdot;</li>
                                        <li>
                                            <a href="index.html#brands">Our Brands</a>
                                        </li>
                                        <li class="footer-menu-divider">&sdot;</li>
                                        <li>
                                            <a href="index.html#team">Our Team</a>
                                        </li>
                                        <li class="footer-menu-divider">&sdot;</li>
                                        <li>
                                            <a href="#contact">Contact</a>
                                        </li>
                                    </ul>
                                    <p class="copyright text-muted small">Copyright &copy; Windom Sales Incorporated 2014. All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </footer>
                    <!-- jQuery Version 1.11.0 -->
                    <script src="js/jquery-1.11.0.js"></script>
                    <!-- Bootstrap Core JavaScript -->
                    <script src="js/bootstrap.min.js"></script>
                    <script src="js/main.js"></script>
                </body>
            </html>