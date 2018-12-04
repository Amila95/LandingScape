<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Landscaper</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Slider
    ================================================== -->
<link href="css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="css/owl.theme.css" rel="stylesheet" media="screen">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top">ගෙවත්ත landscaping</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <li><a href="#services" class="page-scroll">Services</a></li>
        <li><a href="#portfolio" class="page-scroll">Gallery</a></li>
        <li><a href="#testimonials" class="page-scroll">Testimonials</a></li>
        <li><a href="#contact" class="page-scroll">Contact</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1>ගෙවත්ත landscaping</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
              Duis sed dapibus leo nec ornare diam.</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">More Info</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Welcome to <span>ගෙවත්ත landscaping</span></h2>
          <hr>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh.</p>
          <a href="#services" class="btn btn-custom btn-lg page-scroll">View All Services</a> </div>
      </div>
      <div class="col-xs-12 col-md-3">
        <div class="about-media"> <img src="img/about-1.jpg" alt=" "> </div>
        <div class="about-desc">
          <h3>Garden Care</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante facilisis.</p>
        </div>
      </div>
      <div class="col-xs-12 col-md-3">
        <div class="about-media"> <img src="img/about-2.jpg" alt=" "> </div>
        <div class="about-desc">
          <h3>Lawn Care</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam sedasd commodo nibh ante.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 section-title text-center">
      <h2>Our Services</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
    </div>
    <div class="row">
    @if(count($services)>0)
                @foreach($services->all() as $service)
      <div class="col-md-3 text-center">
        <div class="service-media"> <img src={{$service->img_path}} alt=" "> </div>
        <div class="service-desc">
          <h3>{{$service->service_name}}</h3>
          <p>{{$service->description}}</p>
        </div>
      </div>
      @endforeach
            @endif

      
     
      
    </div>
  </div>
</div>
<!-- Gallery Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Project Gallery</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
        
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            @if(count($projects)>0)
                @foreach($projects->all() as $project)
            <li><a href="#" data-filter=.{{$project->project_id}}>{{$project->project_name}}</a></li>
                @endforeach
            @endif
           
            
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
   
    <div class="row">
       
      <div class="portfolio-items">
          @if(count($images)>0)
          @foreach($images->all() as $image)
        <div class="col-sm-6 col-md-4 {{$image->project_id}}">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href={{$image->img_path}} title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>ගෙවත්ත landscaping</h4>
              </div>
              <img src={{$image->img_path}} class="img-responsive" alt="Project Title" height="1000" width="563"> </a> 
            </div>
          </div>
          </div>
          @endforeach
          @endif
         
        </div>
</div>
</div>
</div>
        
        
       
   


<!-- Testimonials Section -->
<div id="testimonials" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="section-title">
        <h2>Testimonials</h2>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div id="testimonial" class="owl-carousel owl-theme">
            <div class="item">
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam."</p>
              <p>- John DOE, Parker County, TX</p>
            </div>
            <div class="item">
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam."</p>
              <p>- Jenny DOE, Parker County, TX</p>
            </div>
            <div class="item">
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam."</p>
              <p>- John DOE, Parker County, TX</p>
            </div>
            <div class="item">
              <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at duis sed dapibus leo nec ornare diam."</p>
              <p>- John DOE, Parker County, TX</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title text-center">
      <h2>Contact Us</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
    </div>
    @if(count($profiles)>0)
          @foreach($profiles->all() as $profile)
    <div class="col-md-10 col-md-offset-1 contact-info">
      <div class="col-md-4">
        <h3>Address</h3>
        <hr>
        <div class="contact-item">
          <p>80/1/A,</p>
          <p>Andadola Road, Watareka</p>
          <p>Padukka</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Working Hours</h3>
        <hr>
        <div class="contact-item">
          <p>Monday-Saturday: 07:00 - 18:00</p>
          <p>Sunday: CLOSED</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Contact Info</h3>
        <hr>
        <div class="contact-item">
          <p>{{$profile->phone}}</p>
          <p>{{$profile->email}}</p>
        </div>
      </div>
    </div>
    @endforeach
          @endif

    <div class="col-md-8 col-md-offset-2">
      <h3>Leave us a message</h3>
      <form  action="{{URL::to('/message')}}" method="post" >
      {{ csrf_field() }}
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required" name="name">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required" name="email">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" name="message"required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
      </form>
    </div>
  </div>
</div>
<!-- Footer Section -->
<div id="footer">
  <div class="container text-center">
    <div class="col-md-8 col-md-offset-2">
      <div class="social">
        <ul>
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
        </ul>
      </div>
      <p>&copy; 2016 Landscaper. Designed by <a href="http://www.templatewire.com" rel="nofollow">TemplateWire</a></p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>