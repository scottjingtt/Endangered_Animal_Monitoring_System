<!doctype html>
<html>
<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Education Tutorial Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!--bootstrap-->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
    <!--coustom css-->
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <!--script-->
    <script src="js/jquery-1.11.0.min.js"></script>
    <!-- js -->
    <script src="js/bootstrap.js"></script>
    <!-- /js -->
    <!--fonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
    <!--/fonts-->
    <!--hover-girds-->
    <link rel="stylesheet" type="text/css" href="css/default.css"/>
    <link rel="stylesheet" type="text/css" href="css/component.css"/>
    <script src="js/modernizr.custom.js"></script>
    <!--/hover-grids-->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <!--script-->
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
            });
        });
    </script>
    <!--/script-->
</head>
<body>
<!--header-->
<div class="header" id="home">
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                    <span class="icon-bar"> </span>
                </button>
                <h1><a class="navbar-brand" href="index.php">Aqua<br/><span>Endanger Animals monitoring</span></a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
                    <li><a href="index.php"><span data-hover="Home">Home</span></a></li>
                    <li><a href="donor.php"><span data-hover="Donor">Donor</span></a></li>
                    <li><a href="volunteer.php"><span data-hover="Volunteer">Volunteer</span></a></li>
                    <li><a href="about.php"><span data-hover="About">About</span></a></li>
<!--                    <li><a href="contact.php"><span data-hover="Contact">Contact</span></a></li>-->
                </ul>
                <div class="clearfix"></div>
            </div><!-- /.navbar-collapse -->
            <!-- /.container-fluid -->
            <div class="login-pop">
                <div id="loginpop"><a href="#" id="loginButton"><span>Login</span></a>
                    <div id="loginBox">
                        <form role="form" id="loginForm" action="deals/logincheck.php" method="post">
                            <fieldset id="body">
                                <fieldset>
                                    <label for="email">Username</label>
                                    <input type="text" id="username" name="username">
                                </fieldset>
                                <fieldset>
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password">
                                </fieldset>
                                <input type="submit" name="submit" id="login" value="Log in">
                                <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                            </fieldset>
                            <span><a href="#">Forgot your password?</a></span>
                        </form>
                    </div>
                </div>
            </div>
            <script src="js/menu_jquery.js"></script>
        </div>
    </nav>
    <!--/script-->
    <div class="clearfix"></div>
</div>
<!-- Top Navigation -->
<div class="banner">
    <div class="container">
        <script src="js/responsiveslides.min.js"></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>
        <div class="slider">
            <div class="callbacks_container">
                <ul class="rslides" id="slider">
                    <li>
                        <h3>Rahat Ashfaq Kazi</h3>
                        <p></p>
                        <div class="readmore">
                            <a href="about.php">Read More<i class="glyphicon glyphicon-menu-right"> </i></a>
                        </div>
                    </li>
                    <li>
                        <h3>Junxi Fan</h3>
                        <p></p>
                        <div class="readmore">
                            <a href="about.php">Read More<i class="glyphicon glyphicon-menu-right"> </i></a>
                        </div>
                    </li>
                    <li>
                        <h3>Kaixin Gao</h3>
                        <p></p>
                        <div class="readmore">
                            <a href="about.php">Read More<i class="glyphicon glyphicon-menu-right"> </i></a>
                        </div>
                    </li>
                    <li>
                        <h3>Taotao Jing</h3>
                        <p></p>
                        <div class="readmore">
                            <a href="about.php">Read More<i class="glyphicon glyphicon-menu-right"> </i></a>
                        </div>
                    </li>
                    <li>
                        <h3>Zhixin Wang</h3>
                        <p></p>
                        <div class="readmore">
                            <a href="about.php">Read More<i class="glyphicon glyphicon-menu-right"> </i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--header-->
<!--weelcome-->
<!--<div class="welcome">-->
<!--    <div class="container">-->
<!--        <h2>Welcome To Education Tutorial</h2>-->
<!--        <p>Education began in the earliest prehistory, as adults trained the young in the knowledge and skills deemed-->
<!--            necessary in their society. In pre-literate societies this was achieved orally and through imitation.-->
<!--            Story-telling passed knowledge,</p>-->
<!--    </div>-->
<!--</div>-->
<!--<!--/welcome-->-->
<!--<div class="welcome-grids">-->
<!--    <div class="container">-->
<!--        <div class="welcome-gridsinfo">-->
<!--            <div class="col-md-3 welcome-grid">-->
<!--                <i class="glyphicon glyphicon-pencil"> </i>-->
<!--                <h3>Prehistory</h3>-->
<!--                <p>Education began in the earliest prehistory, as adults trained the young in the knowledge and skills-->
<!--                    deemed necessary in their.</p>-->
<!--            </div>-->
<!--            <div class="col-md-3 welcome-grid">-->
<!--                <i class="glyphicon glyphicon-font"> </i>-->
<!--                <h3>Prehistory</h3>-->
<!--                <p>Education began in the earliest prehistory, as adults trained the young in the knowledge and skills-->
<!--                    deemed necessary in their.</p>-->
<!--            </div>-->
<!--            <div class="col-md-3 welcome-grid">-->
<!--                <i class="glyphicon glyphicon-blackboard"> </i>-->
<!--                <h3>Prehistory</h3>-->
<!--                <p>Education began in the earliest prehistory, as adults trained the young in the knowledge and skills-->
<!--                    deemed necessary in their.</p>-->
<!--            </div>-->
<!--            <div class="col-md-3 welcome-grid">-->
<!--                <i class="glyphicon glyphicon-education"> </i>-->
<!--                <h3>Prehistory</h3>-->
<!--                <p>Education began in the earliest prehistory, as adults trained the young in the knowledge and skills-->
<!--                    deemed necessary in their.</p>-->
<!--            </div>-->
<!--            <div class="clearfix"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--effect-grid-->
<!--<div class="copyrights">Collect from <a href="http://www.cssmoban.com/">企业网站模板</a></div>-->
<!--<div class="effect-grid">-->
<!--    <div class="container">-->
<!--        <ul class="grid cs-style-5">-->
<!--            <li>-->
<!--                <figure>-->
<!--                    <img src="images/a1.jpg" alt="img03">-->
<!--                    <figcaption>-->
<!--                        <h3>Technology</h3>-->
<!--                        <span>Jacob Cummings</span>-->
<!--                        <a href="about.php">Read More</a>-->
<!--                    </figcaption>-->
<!--                </figure>-->
<!--            </li>-->
<!--            <li>-->
<!--                <figure>-->
<!--                    <img src="images/a2.jpg" alt="img04">-->
<!--                    <figcaption>-->
<!--                        <h3>Preparing</h3>-->
<!--                        <span>Jacob Cummings</span>-->
<!--                        <a href="about.php">Read More</a>-->
<!--                    </figcaption>-->
<!--                </figure>-->
<!--            </li>-->
<!--            <li>-->
<!--                <figure>-->
<!--                    <img src="images/a3.jpg" alt="img01">-->
<!--                    <figcaption>-->
<!--                        <h3>Pencils</h3>-->
<!--                        <span>Jacob Cummings</span>-->
<!--                        <a href="about.php">Read More</a>-->
<!--                    </figcaption>-->
<!--                </figure>-->
<!--            </li>-->
<!--            <li>-->
<!--                <figure>-->
<!--                    <img src="images/a4.jpg" alt="img02">-->
<!--                    <figcaption>-->
<!--                        <h3>Home Work</h3>-->
<!--                        <span>Jacob Cummings</span>-->
<!--                        <a href="about.php">Read More</a>-->
<!--                    </figcaption>-->
<!--                </figure>-->
<!--            </li>-->
<!--            <li>-->
<!--                <figure>-->
<!--                    <img src="images/a5.jpg" alt="img06">-->
<!--                    <figcaption>-->
<!--                        <h3>Waiting</h3>-->
<!--                        <span>Jacob Cummings</span>-->
<!--                        <a href="about.php">Read More</a>-->
<!--                    </figcaption>-->
<!--                </figure>-->
<!--            </li>-->
<!--            <li>-->
<!--                <figure>-->
<!--                    <img src="images/a6.jpg" alt="img05">-->
<!--                    <figcaption>-->
<!--                        <h3>Mistake</h3>-->
<!--                        <span>Jacob Cummings</span>-->
<!--                        <a href="about.php">Read More</a>-->
<!--                    </figcaption>-->
<!--                </figure>-->
<!--            </li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->
<!--<!--\effect-grid-->-->
<!--<!--testmonials-->-->
<!--<div class="testimonials">-->
<!--    <div class="container">-->
<!--        <div class="testimonial-nfo">-->
<!--            <h3>Testimonials</h3>-->
<!--            <h5>Cras porttitor imperdiet volutpat nulla malesuada lectus eros-->
<!--                <span>ut convallis felis consectetur ut </span></h5>-->
<!--        </div>-->
<!--        <div class="testimonial-grids">-->
<!--            <div class="testimonial-grid">-->
<!--                <p><span>"</span> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fermentum iaculis diam-->
<!--                    quis sodales. Vestibulum eu dui tellus. In viverra porttitor auctor. Pellentesque habitant morbi-->
<!--                    tristique senectus et netus et malesuada fames ac turpis egestas<span> "</span></p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<!--\testmonials-->-->
<!--<!--specfication-->-->
<!--<div class="news">-->
<!--    <div class="container">-->
<!--        <div class="news-text">-->
<!--            <h3>Latest News</h3>-->
<!--            <p>Cras porttitor imperdiet volutpat nulla malesuada lectus-->
<!--                eros<br/><span>ut convallis felis consectetur ut </span></p>-->
<!--        </div>-->
<!--        <div class="news-grids">-->
<!--            <div class="col-md-3 news-grid">-->
<!--                <a href="#"><h4>Integer vitae ligula sed lectus</h4></a>-->
<!--                <span>8.00 - 10.00 | JUN 09,2015</span>-->
<!--                <a href="#" class="mask"><img src="images/img1.jpg" alt="image" class="img-responsive zoom-img"></a>-->
<!--                <div class="news-info">-->
<!--                    <p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele-->
<!--                        risque auctor volutpat et massa.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 news-grid">-->
<!--                <a href="#"><h4>Integer vitae ligula sed lectus</h4></a>-->
<!--                <span>10.00 - 12.00 | sep 24,2015</span>-->
<!--                <a href="#" class="mask"><img src="images/img2.jpg" alt="image" class="img-responsive zoom-img"></a>-->
<!--                <div class="news-info">-->
<!--                    <p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele-->
<!--                        risque auctor volutpat et massa.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 news-grid">-->
<!--                <a href="#"><h4>Integer vitae ligula sed lectus</h4></a>-->
<!--                <span>9.00 - 10.00 | FEB 15,2015</span>-->
<!--                <a href="#" class="mask"><img src="images/img3.jpg" alt="image" class="img-responsive zoom-img"></a>-->
<!--                <div class="news-info">-->
<!--                    <p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele-->
<!--                        risque auctor volutpat et massa.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-md-3 news-grid">-->
<!--                <a href="#"><h4>Integer vitae ligula sed lectus</h4></a>-->
<!--                <span>11.00 - 10.00 | JUN 10,2015</span>-->
<!--                <a href="#" class="mask"><img src="images/img4.jpg" alt="image" class="img-responsive zoom-img"></a>-->
<!--                <div class="news-info">-->
<!--                    <p>Pellentesque ut urna eu mauris scele risque auctor volutpat et massa pers piciis iste natus scele-->
<!--                        risque auctor volutpat et massa.</p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="clearfix"></div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<!--/specfication-->-->
<!--<!--footer-->-->
<!--<div class="footer">-->
<!--    <!-- container -->-->
<!--    <div class="container">-->
<!--        <div class="col-md-6 footer-left">-->
<!--            <ul>-->
<!--                <li><a href="index.php">Home</a></li>-->
<!--                <li><a href="about.php">About</a></li>-->
<!--                <li><a href="typography.php">Shortcodes</a></li>-->
<!--                <li><a href="gallery.php">Gallery</a></li>-->
<!--                <li><a href="contact.php">Contact</a></li>-->
<!--            </ul>-->
<!--            <form>-->
<!--                <input type="text" placeholder="Email" required="">-->
<!--                <input type="submit" value="Subscribe">-->
<!--            </form>-->
<!--        </div>-->
<!--        <div class="col-md-3 footer-middle">-->
<!--            <h3>Address</h3>-->
<!--            <div class="address">-->
<!--                <p>756 gt globel Place,-->
<!--                    <span>CD-Road,M 07 435.</span>-->
<!--                </p>-->
<!--            </div>-->
<!--            <div class="phone">-->
<!--                <p>+1(100)2345-6789</p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-md-3 footer-right">-->
<!--            <h3>Book Info</h3>-->
<!--            <p>Proin eget ipsum ultrices, aliquet velit eget, tempus tortor. Phasellus non velit sit amet diam faucibus-->
<!--                molestie tincidunt efficitur nisi.</p>-->
<!--        </div>-->
<!--        <div class="clearfix"></div>-->
<!--    </div>-->
<!--    <!-- //container -->-->
<!--</div>-->
<!--<!--/footer-->-->
<!--<!--copy-rights-->-->
<!--<div class="copyright">-->
<!--    <!-- container -->-->
<!--    <div class="container">-->
<!--        <div class="copyright-left">-->
<!--            <p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank"-->
<!--                                                                         href="http://www.cssmoban.com/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a>-->
<!--            </p>-->
<!--        </div>-->
<!--        <div class="copyright-right">-->
<!--            <ul>-->
<!--                <li><a href="#" class="twitter"> </a></li>-->
<!--                <li><a href="#" class="twitter facebook"> </a></li>-->
<!--                <li><a href="#" class="twitter chrome"> </a></li>-->
<!--                <li><a href="#" class="twitter pinterest"> </a></li>-->
<!--                <li><a href="#" class="twitter linkedin"> </a></li>-->
<!--                <li><a href="#" class="twitter dribbble"> </a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <div class="clearfix"></div>-->
<!---->
<!--    </div>-->
<!--    <!-- //container -->-->
<!--    <!---->-->
<!--    <script type="text/javascript">-->
<!--        $(document).ready(function () {-->
<!--            /*-->
<!--             var defaults = {-->
<!--             containerID: 'toTop', // fading element id-->
<!--             containerHoverID: 'toTopHover', // fading element hover id-->
<!--             scrollSpeed: 1200,-->
<!--             easingType: 'linear'-->
<!--             };-->
<!--             */-->
<!--            $().UItoTop({easingType: 'easeOutQuart'});-->
<!--        });-->
<!--    </script>-->
<!--    <a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>-->
<!--    <!---->-->
<!--</div>-->
<!--/copy-rights-->
</body>
</html>
