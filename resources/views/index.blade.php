<!DOCTYPE HTML>
<!--
 Launcher by freehtml5.co
 Twitter: http://twitter.com/fh5co
 URL: http://freehtml5.co
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Webinar &mdash; Weecomi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords"
        content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Theme style  -->
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="/frontend/css/bootstrap.css">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script src="/frontend/js/bootstrap.min.js"></script>
    <script src="/js/main.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
 <script src="js/respond.min.js"></script>
 <![endif]-->

</head>

<body>
    <div class="fh5co-loader"></div>

    <aside id="fh5co-aside" role="sidebar" class="text-center"
        style="background-image: url(images/img_bg_1_gradient.jpg);">
        <h1 id="fh5co-logo"><a href="index.html">Webinar</a></h1>
    </aside>

    <div id="fh5co-main-content">
        <div class="dt js-dt">
            <div class="dtc js-dtc">
                <div class="" data-animate-effect="fadeInUp"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="fh5co-intro animate-box">
                                    <h3>ÜCRETSİZ WEBİNARA KATILMAK İÇİN KAYIT OLUN</h3>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="alert alert-success" role="alert">
                                    {{session('success')}}
                                    <!-- {{session('failure')}} -->
                                    {{session('warning')}}
                                </div>
                                <!-- <p>{{session('success')}}</p> -->
                                <form action="{{ route('saveWebinar') }}" method="post">
                                    @CSRF
                                    <div class="col-md-14 animate-box">
                                        <div class="form-group">
                                        @php
                                           
                                                $date = new DateTime();
							                    $date->setTime(17, 00, 0);
                                                if($date<new DateTime()){
                                                    $date->modify('+1 day');
                                                }
                                                for($i=0;$i<3;$i++){
                                                    echo '<div><input id="date" required type="radio" class="radio-class" name="webinarDate" value="'.$date->getTimestamp().'">'.$date->format('d/m/Y H:i:s').'</div>';
									                $date->modify('+1 day');
                                                }
                                      
                                        @endphp
                                            <!-- <input id="date" type="radio" class="radio-class" name="webinarDate" value="">2
                                            <input id="date" type="radio" class="radio-class" name="webinarDate" value="">3 -->

                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="name"
                                                placeholder="Ad">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="surname"
                                                placeholder="Soyad">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="email" name="email"
                                                placeholder="E-posta">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="submit" value="Hemen Webinara Katılın">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="fh5co-footer">
            <div class="row">
                <div class="col-md-6">
                    <ul id="fh5co-social">
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-google-plus"></i></a></li>
                        <li><a href="#"><i class="icon-pinterest-square"></i></a></li>
                    </ul>
                </div>
                <!-- <div class="col-md-6 fh5co-copyright">
     <p>Designed by <a href="http://freehtml5.co/" target="_blank">WeeComi</a> Demo Images: <a href="http://unsplash.com" target="_blank">Unsplash</a></p>
    </div> -->
            </div>
        </div>

    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Count Down -->
    <script src="js/simplyCountdown.js"></script>
    <!-- Main -->
    <script src="js/main.js"></script>

</body>

</html>
