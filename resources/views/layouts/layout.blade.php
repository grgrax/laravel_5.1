<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel App Name - @yield('title')</title>

    <!-- bootstrap   -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <!-- bootstrap   -->

    <!-- custom  -->
    <link href="{{asset('css/my.css')}}" rel="stylesheet">
    <!-- custom  -->

    <!-- Custom Fonts -->
    <!-- <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css"> -->

    <!-- bootstrap   -->
    <script src="{{asset('js/bootstrap.min.js')}}" type="javascript"></script>
    <!-- bootstrap   -->

</head>

<body data-spy="scroll" data-target=".mynavbar">
    <nav class="nav navbar-default navbar-fixed-top mynavbar">
        <div class="container">
            <div class="navbar-header">
                <a href="" class="navbar-brand">Welcome to Frontend </a>
                <!-- responsive mentu main button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mymenu" >
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="mymenu">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#myheader-intro">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Application Development
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#mobile">Mobile Application</a></li>
                            <li><a href="#web">Web Application</a></li>
                            <li><a href="#desktop">Desktop Application</a></li>
                        </ul>
                    </li>

                    {{--
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories
                            <span class="caret"></span>
                        </a>
                        
                        <ul class="dropdown-menu">
                            @foreach($otherPages as $page)
                            <li><a href="page/{{$page}}">{{$page}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    --}}
                    
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="{{ URL::to('/front/signup')}}">Sign Up</a></li>
                    <li><a href="{{ URL::to('/front/login')}}">Log in</a></li>
                </ul>               
            </div>
        </div>
    </nav>

    <body>

        @yield('header')

        @yield('content')

        <div class="mysection1 footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-center">
                        <div class="col-lg-4">
                            <h2 class="heading">Location</h2>
                            <address>
                                <p>
                                    <strong>Twitter, Inc.</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </p>
                            </address>

                            <address>
                                <p>
                                    <strong>Full Name</strong><br>
                                    <a href="mailto:#">first.last@example.com</a>
                                </p>
                            </address>  
                        </div>
                        <div class="col-lg-4">
                            <h2 class="heading">About Freelancing</h2>
                            <p>Freelance is a free to use, <b>open source</b> Bootstrap theme created by Start Bootstrap.</p>
                        </div>                  
                        <div class="col-lg-4">
                            <h2 class="heading">Around the Web</h2>
                            <p>
                                <ul class="list-inline">
                                    <li >
                                        <a href="#" class="glyphicon glyphicon-cloud myglyphicon">
                                        </a>
                                    </li>
                                    <li >
                                        <a href="#" class="glyphicon glyphicon-music myglyphicon">
                                        </a>
                                    </li>
                                    <li >
                                        <a href="#" class="glyphicon glyphicon-road myglyphicon">
                                        </a>
                                    </li>                           
                                    <li >
                                        <a href="#" class="glyphicon glyphicon-gift myglyphicon">
                                        </a>
                                    </li>                           
                                </ul>
                                <ul class="list-inline">
                                    <li >
                                        <a href="#" class="glyphicon glyphicon-send myglyphicon">
                                        </a>
                                    </li>
                                    <li >
                                        <a href="#" class="glyphicon glyphicon-heart-empty myglyphicon">
                                        </a>
                                    </li>                           
                                    <li >
                                        <a href="#" class="glyphicon glyphicon-globe myglyphicon">
                                        </a>
                                    </li>                           
                                    <li >
                                        <a href="#" class="glyphicon glyphicon-shopping-cart myglyphicon">
                                        </a>
                                    </li>                           
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-center">
                        <p>Copyright © Your Website 2014</p>
                    </div>              
                </div>      
            </div>
        </footer>

        @yield('footer')
    </body>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript">
        $("#mymenu ul li a[href^='#']").on('click', function(e) {

            e.preventDefault();
            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(this.hash).offset().top
            }, 2000, function(){

                window.location.hash = hash;
            });

        });
    </script>

    </html>


    </html>