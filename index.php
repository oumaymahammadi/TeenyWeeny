<?php
include_once("./includes/header.php");
?>
<!DOCTYPE html>
<html lang="zxx">
   <head>
      <title>TeenyWeeny</title>
      <!--meta tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="keywords" content="Toys Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
         Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
      <script>
         addEventListener("load", function () {
         	setTimeout(hideURLbar, 0);
         }, false);
         
         function hideURLbar() {
         	window.scrollTo(0, 1);
         }
      </script>
      <!--//meta tags ends here-->
      <!--booststrap-->
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
      <!--//booststrap end-->
      <!-- font-awesome icons -->
      <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
      <!-- //font-awesome icons -->
      <!-- For Clients slider -->
      <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
      <!--flexs slider-->
      <link href="css/JiSlider.css" rel="stylesheet">
      <!--Shoping cart-->
      <link rel="stylesheet" href="css/shop.css" type="text/css" />
      <!--//Shoping cart-->
      <!--stylesheets-->
      <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
      <!--//stylesheets-->
      <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
      <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
      <!--Favicon-->
      <link rel="shortcut icon" type="image/png" href="/images/logo.png">
   </head>
   <body>
      <!--The header-->
      <div class="header-outs" id="home">
         <div class="header-bar">
            
            <div class="container-fluid">
               <div class="hedder-up row">
                  <div class="col-lg-3 col-md-3 logo-head">
                     <a href="index.html">
                        <img src="/images/2logo.png" alt="">
                     </a>
                  </div>
                  <div class="col-lg-5 col-md-6 search-right">
                     <h1><a class="navbar-brand" href="index.html">TeenyWeeny</a></h1>
                  </div>
                  <div class="col-lg-4 col-md-3 right-side-cart">
                     <div class="cart-icons">
                        <ul>
                           <li>
                              <button type="button" data-toggle="modal" data-target="#exampleModal"> <span class="far fa-user"></span></button>
                           </li>
                           <li class="toyscart toyscart2 cart cart box_1">
                              <form action="#" method="post" class="last">
                                 <input type="hidden" name="cmd" value="_cart">
                                 <input type="hidden" name="display" value="1">
                                 <button class="top_toys_cart" type="submit" name="submit" value="">
                                 <span class="fas fa-cart-arrow-down"></span>
                                 </button>
                              </form>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light">
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                  <ul class="navbar-nav ">
                     <li class="nav-item ">
                        <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                     </li>
                     <li class="nav-item">
                        <a href="about.html" class="nav-link">About</a>
                     </li>
                     <li class="nav-item">
                        <a href="service.html" class="nav-link">Service</a>
                     </li>
                     <li class="nav-item">
                        <a href="shop.html" class="nav-link">Shop Now</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Product
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <a class="nav-link" href="product.html">Newborn</a>
                           <a class="nav-link " href="product.html">Girls</a>
                           <a class="nav-link " href="product.html">Boys</a>
                           <a class="nav-link " href="product.html">Kids</a>
                        </div>
                     </li>
                     <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
         <!-- /Header -->
         <!-- Slideshow 4 -->
         <div class="slider text-center">
            <div class="callbacks_container">
               <ul class="rslides" id="slider4">
                  <li>
                     <div class="slider-img one-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h5>Pick The Best Toy For <br>Your Kid</h5>
                              <div class="bottom-info">
                                 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="about.html">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img two-img">
                        <div class="container">
                           <div class="slider-info ">
                              <h5>Sort Toys And Teddy bears<br>For Kids</h5>
                              <div class="bottom-info">
                                 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="about.html">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li>
                     <div class="slider-img three-img">
                        <div class="container">
                           <div class="slider-info">
                              <h5>Best Toys And Dolls<br> For Kids</h5>
                              <div class="bottom-info">
                                 <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.Aenean commodo ligula eget dolorL orem ipsum dolor sit amet eget dolor</p>
                              </div>
                              <div class="outs_more-buttn">
                                 <a href="about.html">Read More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
            <!-- This is here just to demonstrate the callbacks -->
            <!-- <ul class="events">
               <li>Example 4 callback events</li>
               </ul>-->
            <div class="clearfix"></div>
         </div>
      </div>
      <!-- //banner -->
      
      <!-- Product-view -->
      <section class="product py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Latest Toys</h3>
            <!-- recent products -->
            <div class="row">
               <?php
                  $sql_posts = "SELECT * FROM products  ORDER BY created_at DESC LIMIT 0, 6";
                  $stmt = $pdo->prepare($sql_products);
                  $stmt->execute();
                  while ($posts = $stmt->fetch(PDO::FETCH_ASSOC)) :
                      $picture = $products['picture'];
                      $description = substr($products['description'], 0, 140);
               ?>
               <div class="col-lg-6 img-toy-agile-right">
                  <div class="toys-img-one-two">
                     <img src="<?php echo $picture; ?>" alt="">
                  </div>
                  <div class="mt-lg-4 mt-3 product-info-img">
                     <p><?php echo $description; ?> ...
                     </p>
                     <div class="clients_more-buttn">
                        <a href="shop.html">Shop Now</a>
                     </div>
                  </div>
               </div>
               <?php endwhile; ?>
            </div>
         </div>
      </section>
      <!--//Product-view-->
      <!--Customers Review -->
      <section class="clients py-lg-4 py-md-3 py-sm-3 py-3" id="clients">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Customers Review</h3>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t1.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Milky Deo 
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/tt1.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t2.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Sam Deo 
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/tt2.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t1.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Milky Deo 
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/tt1.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t3.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Sam Deo 
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/tt1.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t2.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Milky Deo 
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/tt2.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span>  velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-lg-6 clients-w3layouts-row">
                           <div class="least-w3layouts-text-gap">
                              <div class="row">
                                 <div class="col-md-4 col-sm-4 news-img">
                                    <img src="images/t3.jpg" alt="" class="image-fluid">
                                 </div>
                                 <div class="col-md-8 col-sm-8 clients-says-w3layouts">
                                    <h4>Sam Deo 
                                    </h4>
                                    <span class="mt-2">Duis posuere</span>
                                 </div>
                                 <div class="mt-3 news-agile-text">
                                    <img src="images/tt1.jpg" alt="" class="image-fluid">
                                    <p class="mt-3"><span class="fas fa-quote-left"></span> velit sagittis vehicula. Duis posuere 
                                       ex in mollis iaculis. Suspendisse tincidunt
                                       velit sagittis vehicula. Duis posuere 
                                       velit sagittis vehicula. Duis posuere <span class="fas fa-quote-right"></span>
                                    </p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
         </div>
      </section>
      <!--//Customers Review -->
      
      <!--Product-about-->
      <section class="about py-lg-4 py-md-3 py-sm-3 py-3">
         <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
            <h3 class="title text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">About Toys</h3>
            <div class="about-products-w3layouts">
               <p>velit sagittis vehicula. Duis posuere 
                  ex in mollis iaculis. Suspendisse tincidunt
                  velit sagittis vehicula. Duis posuere 
                  velit sagittis vehicula. Duis posuere 
                  ex in mollis iaculis. Suspendisse tincidunt
                  velit sagittis vehicula. Duis posuere 
               </p>
               <p class="my-lg-4 my-md-3 my-3">velit sagittis vehicula. Duis posuere 
                  ex in mollis iaculis. Suspendisse tincidunt
                  velit sagittis vehicula. Duis posuere 
                  ex in mollis iaculis. Suspendisse tincidunt
                  velit sagittis vehicula. Duis posuere 
                  velit sagittis vehicula. Duis posuere 
                  ex in mollis iaculis. Suspendisse tincidunt
                  velit sagittis vehicula. Duis posuere 
               </p>
               <p>velit sagittis vehicula. Duis posuere 
                  ex in mollis iaculis. Suspendisse tincidunt
                  velit sagittis vehicula. Duis posuere 
                  velit sagittis vehicula. Duis posuere 
                  ex in mollis iaculis. Suspendisse tincidunt
                  velit sagittis vehicula. Duis posuere 
               </p>
            </div>
         </div>
      </section>
      <!--//Product-about-->
     
      <!-- footer -->
      <footer class="py-lg-4 py-md-3 py-sm-3 py-3 text-center">
          <!-- Footer -->
  <footer class="bg-white">
   <div class="container py-5">
     <div class="row py-4">
       <div class="col-lg-4 col-md-6 mb-4 mb-lg-0"><img src="img/logo.png" alt="" width="180" class="mb-3">
         <p class="font-italic text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
         <ul class="list-inline mt-4">
           <li class="list-inline-item"><a href="#" target="_blank" title="twitter"><i class="fa fa-twitter"></i></a></li>
           <li class="list-inline-item"><a href="#" target="_blank" title="facebook"><i class="fa fa-facebook"></i></a></li>
           <li class="list-inline-item"><a href="#" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
           <li class="list-inline-item"><a href="#" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
           <li class="list-inline-item"><a href="#" target="_blank" title="vimeo"><i class="fa fa-vimeo"></i></a></li>
         </ul>
       </div>
       <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
         <h6 class="text-uppercase font-weight-bold mb-4">Shop</h6>
         <ul class="list-unstyled mb-0">
           <li class="mb-2"><a href="#" class="text-muted">Newborn</a></li>
           <li class="mb-2"><a href="#" class="text-muted">Girls</a></li>
           <li class="mb-2"><a href="#" class="text-muted">Boys</a></li>
           <li class="mb-2"><a href="#" class="text-muted">Kids</a></li>
         </ul>
       </div>
       <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
         <h6 class="text-uppercase font-weight-bold mb-4">Pages</h6>
         <ul class="list-unstyled mb-0">
           <li class="mb-2"><a href="#" class="text-muted">Home</a></li>
           <li class="mb-2"><a href="#" class="text-muted">About</a></li>
           <li class="mb-2"><a href="#" class="text-muted">Contact Us</a></li>
           <li class="mb-2"><a href="#" class="text-muted">Account</a></li>
         </ul>
       </div>
       <div class="col-lg-4 col-md-6 mb-lg-0">
         <h6 class="text-uppercase font-weight-bold mb-4">Newsletter</h6>
        
         <div class="p-1 rounded border">
           <div class="input-group">
             <input type="email" placeholder="Enter your email address" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
             <div class="input-group-append">
               <button id="button-addon1" type="submit" class="btn btn-link"><i class="fa fa-paper-plane"></i></button>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

   <!-- Copyrights -->
   <div class="bg-light py-4">
     <div class="container text-center">
       <p class="text-muted mb-0 py-2">© 2021 All rights reserved.</p>
     </div>
   </div>
 </footer>
 <!-- End -->

      </footer>
      <!-- //footer -->
      <!-- Modal 1-->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="register-form">
                     <form action="#" method="post">
                        <div class="fields-grid">
                           <div class="styled-input">
                              <input type="text" placeholder="Your Name" name="Your Name" required="">
                           </div>
                           <div class="styled-input">
                              <input type="email" placeholder="Your Email" name="Your Email" required="">
                           </div>
                           <div class="styled-input">
                              <input type="password" placeholder="password" name="password" required="">
                           </div>
                           <button type="submit" class="btn subscrib-btnn">Login</button>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
               </div>
            </div>
         </div>
      </div>
      <!-- //Modal 1-->
      <!--js working-->
      <script src='js/jquery-2.2.3.min.js'></script>
      <!--//js working-->
      <!-- cart-js -->
      <script src="js/minicart.js"></script>
      <script>
         toys.render();
         
         toys.cart.on('toys_checkout', function (evt) {
         	var items, len, i;
         
         	if (this.subtotal() > 0) {
         		items = this.items();
         
         		for (i = 0, len = items.length; i < len; i++) {}
         	}
         });
      </script>
      <!-- //cart-js -->
      <!--responsiveslides banner-->
      <script src="js/responsiveslides.min.js"></script>
      <script>
         // You can also use "$(window).load(function() {"
         $(function () {
         	// Slideshow 4
         	$("#slider4").responsiveSlides({
         		auto: true,
         		pager:false,
         		nav:true ,
         		speed: 900,
         		namespace: "callbacks",
         		before: function () {
         			$('.events').append("<li>before event fired.</li>");
         		},
         		after: function () {
         			$('.events').append("<li>after event fired.</li>");
         		}
         	});
         
         });
      </script>
      <!--// responsiveslides banner-->	 
      <!--slider flexisel -->
      <script src="js/jquery.flexisel.js"></script>
      <script>
         $(window).load(function() {
         	$("#flexiselDemo1").flexisel({
         		visibleItems: 3,
         		animationSpeed: 3000,
         		autoPlay:true,
         		autoPlaySpeed: 2000,    		
         		pauseOnHover: true,
         		enableResponsiveBreakpoints: true,
         		responsiveBreakpoints: { 
         			portrait: { 
         				changePoint:480,
         				visibleItems: 1
         			}, 
         			landscape: { 
         				changePoint:640,
         				visibleItems:2
         			},
         			tablet: { 
         				changePoint:768,
         				visibleItems: 2
         			}
         		}
         	});
         	
         });
      </script>
      <!-- //slider flexisel -->
      <!-- start-smoth-scrolling -->
      <script src="js/move-top.js"></script>
      <script src="js/easing.js"></script>
      <script>
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({
         			scrollTop: $(this.hash).offset().top
         		}, 900);
         	});
         });
      </script>
      <!-- start-smoth-scrolling -->
      <!-- here stars scrolling icon -->
      <script>
         $(document).ready(function () {
         
         	var defaults = {
         		containerID: 'toTop', // fading element id
         		containerHoverID: 'toTopHover', // fading element hover id
         		scrollSpeed: 1200,
         		easingType: 'linear'
         	};
         	$().UItoTop({
         		easingType: 'easeOutQuart'
         	});
         
         });
      </script>
      <!-- //here ends scrolling icon -->
      <!--bootstrap working-->
      <script src="js/bootstrap.min.js"></script>
      <!-- //bootstrap working-->
   </body>
</html>