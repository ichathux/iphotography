<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo.png"/>

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">

  <link href="css/owl.carousel.css" rel="stylesheet">
  <link href="css/owl.theme.default.min.css" rel="stylesheet">

  <link href="css/magnific-popup.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    body{

    }
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="welcome">I Photography</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="about">About</a></li>
        <li><a href="events">Events</a></li>
        <li><a href="news">News</a></li>
        <li><a href="contact">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if  (Auth::guest())

        <li><a href="{{ url('/login') }}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="{{ url('/register') }}"><span class="glyphicon glyphicon-edit"></span> Register</a></li>
        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="position: relative; padding-left: 50px; ">
                                <img src="/upload/profile picture/{{ Auth::user()->picture }}" style="width: 32px; height: 32px; position: absolute; top: 10px; left: 10px; border-radius: 50%">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                    
                                

                                <ul class="dropdown-menu" role="menu">
                                    
                                    @if  (Auth::user()->type == 'admin')
                                    <li> <a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                    <li> <a href="{{ url('/profile') }}">Profile</a></li>   
                                    <li><a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">

                                            Logout
                                        </a></li>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    @else

                                    <li> <a href="{{ url('/profile') }}">Profile</a></li>     
                                    <li><a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">

                                            Logout
                                        </a></li>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    @endif      
        @endif

      </ul>
    </div>
  </div>
</nav>

            <header class="bg-img header">
                
                <div class="container">
                    <div class="row">
                        <div class="intro-box">
                            <div class="intro">
                                <h1>Welcome to I Photography</h1>
                                <p>We are not only another photography company.</p>
                                <a class="btn vira-btn" href="#">Explore us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>    <!-- Left and right controls -->

 <br><br>
<div class="container text-center">    
<h2 class="title">What we do</h2>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <div class="card-icon">
                                        <span class="fa fa-diamond" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="vira-card-content">
                                    <h3>Photography </h3>
                                    <p>
                                        Complimenten, bewonderend gefluit en lonkende blikken zijn enkele risico’s die The Garment Club met zichlaim meebrengt. Onze enige missiede
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <div class="card-icon">
                                        <span class="fa fa-cogs" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="vira-card-content">
                                    <h3>Event Planning</h3>
                                    <p>
                                        Complimenten, bewonderend gefluit en lonkende blikken zijn enkele risico’s die The Garment Club met zichlaim meebrengt. Onze enige missiede
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                    <div class="card-icon">
                                        <span class="fa fa-bicycle" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="vira-card-content">
                                    <h3>Videography</h3>
                                    <p>
                                        Complimenten, bewonderend gefluit en lonkende blikken zijn enkele risico’s die The Garment Club met zichlaim meebrengt. Onze enige missiede
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
</div>
<br><br><br><br><br><br>
<div class="container text-center">
<?php 
$eventssum = DB::table('events')->take(4)->orderBy('id', 'desc')->get();

 
?>
 <h2 class="title">Latest Events</h2><br>

   <div class="row">
   <?php
foreach ($eventssum as $value)
{
    
?>
        <div class="col-xs-6 col-sm-4 col-md-3">            
            <div class="thumbnail">
                <div class="caption">
                    <h4><?php echo($value->name); ?></h4>
                    <p>Date : <?php echo($value->date); ?><br></p>
                    <p>Time : <?php echo($value->start_time); ?></p>
                    <p>
                    <a href="#" class="btn btn-primary" role="button">View</a></p>
                </div>
                <img style="height: 200px;" src="/upload/events_images/<?php echo $value->image; ?>">
            </div>
        </div>
         <?php }?>
</div><br>
</div>
<section id="contact" class="contact section">
                <div class="container">
                    <h2 class="title">Drop us a line</h2>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                        <span class="fa fa-map-o" aria-hidden="true"></span>
                                </div>
                                <div class="vira-card-content">
                                    <h3>Address</h3>
                                    <p>
                                        Level 5, 25 pitt st, US
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                        <span class="fa fa-phone" aria-hidden="true"></span>
                                </div>
                                <div class="vira-card-content">
                                    <h3>Phone</h3>
                                    <p>
                                        +94 71 739 2303
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="vira-card">
                                <div class="vira-card-header">
                                        <span class="fa fa-paper-plane" aria-hidden="true"></span>
                                </div>
                                <div class="vira-card-content">
                                    <h3>Email</h3>
                                    <p>
                                        iphotographywithvideo@gmail.com
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="social-icons">
                                <ul>
                                    <a href="https://www.facebook.com/iphotographywithvideo/"><li><span class="ion-social-facebook"></span></li></a>
                                    <a href="#"><li><span class="ion-social-twitter"></span></li></a>
                                    <a href="#"><li><span class="ion-social-pinterest"></span></li></a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <p> Handcrafted with <span class="fa fa-heart"></span> by I Photography</a></p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="/js/app.js"></script>
        <script src="js/jquery-3.1.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="https://use.fontawesome.com/55b73bf748.js"></script>
        <script src="js/jquery.magnific-popup.js"></script>
        <script src="js/script.js"></script>

</body>
</html>
