<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        
        <title>Stardon PLC</title>
        @vite('resources/css/app.css')
      <!-- Additional CSS Files -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/templatemo-hexashop.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/lightbox.css')}}">


    </head>


    <body>
      <!-- ***** Preloader Start ***** -->
      <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
      </div>  
    <!-- ***** Preloader End ***** -->
  
  
  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
      <div class="container">
          <div class="row">
              <div class="col-12">
                <nav class="main-nav">
                  <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo mt-3"><img src="{{asset('assets/images/logo.png')}}"></a>
                  <!-- ***** Logo End ***** -->

                  <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="/" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="/about">About Us</a></li>
                      <li class="scroll-to-section"><a href="/blog">Blog</a></li>
                      <li class="submenu">
                        <a href="#">Services</a>
                        <ul>
                          <li><a href="/service/consultancy">Consultancies</a></li>
                          <li><a href="/service/trainings">Trainings</a></li>
                          <li><a href="/service/marketing">Digital Marketing </a></li>
                          <li><a href="/service/catalog">Catalog</a></li>
                          <li><a href="/service/merchandise">Sales Merchandise</a></li>
                          <li><a href="/service/e-books">E-books</a></li>
                          <li><a href="/service/advertisement">Advertisement</a></li>
                          <li><a href="/service/webinar">Webinars</a></li>
                          <li><a href="/service/protection">Protection plan</a></li>
                          <li><a href="/service/freelance">Freelance services</a></li>
                        </ul>
                      </li>
                      <li class="submenu">
                        <a href="#">Store</a>
                        <ul>
                          <li><a href="/store/textile">Textile</a></li>
                          <li><a href="/store/garment">Garment</a></li>
                          <li><a href="/store/leather">Leather</a></li>
                          <li><a href="/store/fashion">Fashion</a></li>
                          <li><a href="/store/environment">Environment</a></li>
                        </ul>
                      </li>
                      <li class="scroll-to-section"><a href="/contact">Contact Us</a></li>
                    </ul>        
                    <a class='menu-trigger'><span>Menu</span></a>
                  <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

    <main>
        {{$slot}}
    </main>

  
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="{{asset('assets/images/white-logo.png')}}" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li>
                                <a href="/contact">
                                <b>Address:</b> <br>
                                Addis Ababa, Ethiopia.<br>
                                Akaki Kality sub city, woreda 05
                            </li>
                            <li>
                                <b>Phone:</b> <br>+251922351331  +25193824204<br>
                                <b>Email:</b> <br>wmekonene@gmail.com</a>
                            </li>
                            <li><h4 class="text-center mr-4 mt-4">TRANSFORMATION<br>THROUGH CONSULTING</h4></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="/blank">Textile/Garment’s Shopping</a></li>
                        <li><a href="/blank">Leather good’s Shopping</a></li>
                        <li><a href="/services/?tag=books">E-Books's Shopping</a></li>
                        <li><a href="/services/?tag=printing">Custom Printing</a></li>
                        <li><a href="/blank">Merchandise Sales</a></li>
                        <li><a href="/blank">Advertise your product</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Features</h4>
                    <ul>
                        <li><a href="/services/?tag=consultancy">Consultnacy</a></li>
                        <li><a href="/services/?tag=trainings">Online Trainings</a></li>
                        <li><a href="/services/?tag=catalog">Suppliers Catalog</a></li>
                        <li><a href="/services/?tag=marketing">Digital Marketing</a></li>
                        <li><a href="/blank">Online Store/Sales</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Sale on STARDON</h4>
                    <ul>
                        <li><a href="/blank">Start selling</a></li>
                        <li><a href="/blank">Become a Supplier</a></li>
                        <li><a href="/blog">Vist Our Blog</a></li>
                        <li><a href="/blank">Create Content</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>© 2024 Stardon Manufacturing Solutions Plc. All rights reserved.
                        <br>Policies and rules: 
                        <a href="/blank" target="_parent" title="free css templates"> Terms of Use </a> | 
                        <a href="/blank" target="_parent" title="free css templates"> Privacy Policy </a> | 
                        <a href="/blank" target="_parent" title="free css templates"> Intellectual Property Protection</a>
                    </p>
                        <ul>
                            <li><a href="https://www.facebook.com/wuhibm?mibextid=ZbWKwL"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/wuhib2023"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://t.me/wuhibconsult"><i class="fa fa-paper-plane"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  </body>  

  <!-- jQuery -->
  <script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>

  <!-- Bootstrap -->
  <script src="{{asset('assets/js/popper.js')}}"></script>
  <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

  <!-- Plugins -->
  <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
  <script src="{{asset('assets/js/accordions.js')}}"></script>
  <script src="{{asset('assets/js/datepicker.js')}}"></script>
  <script src="{{asset('assets/js/scrollreveal.min.js')}}"></script>
  <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
  <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('assets/js/imgfix.min.js')}}"></script> 
  <script src="{{asset('assets/js/slick.js')}}"></script> 
  <script src="{{asset('assets/js/lightbox.js')}}"></script> 
  <script src="{{asset('assets/js/isotope.js')}}"></script> 
  
  <!-- Global Init -->
  <script src="{{asset('assets/js/custom.js')}}"></script>


</html>
