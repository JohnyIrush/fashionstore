<template>
    <!-- Start Top Nav -->
     <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block hidden fixed top-0 right-0 px-6 py-4 sm:block" id="templatemo_nav_top">
      <div class="container text-light">
          <div class="w-100 d-flex justify-content-between">
              <div>
                  <i class="fa fa-envelope mx-2"></i>
                  <a class="navbar-sm-brand text-light text-decoration-none" href="#">softwarescares@gmail.com</a>
                  <i class="fa fa-phone mx-2"></i>
                  <a class="navbar-sm-brand text-light text-decoration-none" href="#">+254748607169</a>
              </div>
              <div>
                  <a class="text-light" href="#" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                  <a class="text-light" href="#" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                  <a class="text-light" href="#" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                  <a class="text-light" href="#" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
              </div>
          </div>
      </div>
      <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
          <Link v-if="$page.props.user" :href="route('dashboard')" class="text-sm text-gray-700 underline">
              Dashboard
          </Link>
    
          <template v-else>
              <Link :href="route('login')" class="text-sm text-gray-700 underline">
                  Log in
              </Link>
    
              <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                  Register
              </Link>
          </template>
      </div>
    </nav>
    <!-- Close Top Nav -->


<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light shadow ">
  <div class="container d-flex justify-content-between align-items-center">

      <a class="navbar-brand text-success logo h1 align-self-center" href="#">
          Jassa
      </a>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
          <div class="flex-fill">
              <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                  <li class="nav-item">
                      <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Shop</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Contact</a>
                  </li>
              </ul>
          </div>
          <div class="navbar align-self-center d-flex">
              <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                  <div class="input-group">
                      <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                      <div class="input-group-text">
                          <i class="fa fa-fw fa-search"></i>
                      </div>
                  </div>
              </div>
              <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                  <i class="fa fa-fw fa-search text-dark mr-2"></i>
              </a>
              <a class="nav-icon position-relative text-decoration-none" href="#">
                  <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                  <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
              </a>
              <a class="nav-icon position-relative text-decoration-none" href="#">
                  <i class="fa fa-fw fa-user text-dark mr-3"></i>
                  <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
              </a>
          </div>
      </div>

  </div>
</nav>
<!-- Close Header -->

<!-- Modal -->
<div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="w-100 pt-1 mb-5 text-right">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="" method="get" class="modal-content modal-body border-0 p-0">
          <div class="input-group mb-2">
              <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
              <button type="submit" class="input-group-text bg-success text-light">
                  <i class="fa fa-fw fa-search text-white"></i>
              </button>
          </div>
      </form>
  </div>
</div>



<!-- Start Banner Hero -->
<div id="template-mo-jassa-hero-carousel" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
      <li data-bs-target="#template-mo-jassa-hero-carousel" data-bs-slide-to="0" class="active"></li>
      <li data-bs-target="#template-mo-jassa-hero-carousel" data-bs-slide-to="1"></li>
      <li data-bs-target="#template-mo-jassa-hero-carousel" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
      <div class="carousel-item active">
          <div class="container">
              <div class="row p-5">
                  <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                      <img class="img-fluid" src="https://therichpost.com/wp-content/uploads/2021/05/banner_img_01.jpg" alt="">
                  </div>
                  <div class="col-lg-6 mb-0 d-flex align-items-center">
                      <div class="text-align-left align-self-center">
                          <h1 class="h1 text-success"><b>Jassa</b> eCommerce</h1>
                          <h3 class="h2">Lorem Ipsum Lorem Ipsum</h3>
                          <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="carousel-item">
          <div class="container">
              <div class="row p-5">
                  <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                      <img class="img-fluid" src="https://therichpost.com/wp-content/uploads/2021/05/banner_img_02.jpg" alt="">
                  </div>
                  <div class="col-lg-6 mb-0 d-flex align-items-center">
                      <div class="text-align-left">
                          <h1 class="h1">Lorem Ipsum</h1>
                          <h3 class="h2">Lorem Ipsum Lorem Ipsum</h3>
                          <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="carousel-item">
          <div class="container">
              <div class="row p-5">
                  <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                      <img class="img-fluid" src="https://therichpost.com/wp-content/uploads/2021/05/banner_img_03.jpg" alt="">
                  </div>
                  <div class="col-lg-6 mb-0 d-flex align-items-center">
                      <div class="text-align-left">
                          <h1 class="h1">Lorem Ipsum</h1>
                          <h3 class="h2">Lorem Ipsum Lorem Ipsum </h3>
                          <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                          </p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-jassa-hero-carousel" role="button" data-bs-slide="prev">
      <i class="fas fa-chevron-left"></i>
  </a>
  <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-jassa-hero-carousel" role="button" data-bs-slide="next">
      <i class="fas fa-chevron-right"></i>
  </a>
</div>
<!-- End Banner Hero -->


<!-- Start Categories of The Month -->
<section class="container py-5">
  <div class="row text-center pt-3">
      <div class="col-lg-6 m-auto">
          <h1 class="h1">Categories of The Month</h1>
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          </p>
      </div>
  </div>
  <div class="row">
      <div class="col-12 col-md-4 p-5 mt-3">
          <a href="#"><img src="https://therichpost.com/wp-content/uploads/2021/05/category_img_01.jpg" class="rounded-circle img-fluid border"></a>
          <h5 class="text-center mt-3 mb-3">Watches</h5>
          <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
      </div>
      <div class="col-12 col-md-4 p-5 mt-3">
          <a href="#"><img src="https://therichpost.com/wp-content/uploads/2021/05/category_img_02.jpg" class="rounded-circle img-fluid border"></a>
          <h2 class="h5 text-center mt-3 mb-3">Shoes</h2>
          <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
      </div>
      <div class="col-12 col-md-4 p-5 mt-3">
          <a href="#"><img src="https://therichpost.com/wp-content/uploads/2021/05/category_img_03.jpg" class="rounded-circle img-fluid border"></a>
          <h2 class="h5 text-center mt-3 mb-3">Accessories</h2>
          <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
      </div>
  </div>
</section>
<!-- End Categories of The Month -->


<!-- Start Featured Product -->
<section class="bg-light">
  <div class="container py-5">
      <div class="row text-center py-3">
          <div class="col-lg-6 m-auto">
              <h1 class="h1">Featured Product</h1>
              <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              </p>
          </div>
      </div>
      <div class="row">
          <div class="col-12 col-md-4 mb-4">
              <div class="card h-100">
                  <a href="#">
                      <img src="https://therichpost.com/wp-content/uploads/2021/05/feature_prod_01.jpg" class="card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <ul class="list-unstyled d-flex justify-content-between">
                          <li>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-muted fa fa-star"></i>
                              <i class="text-muted fa fa-star"></i>
                          </li>
                          <li class="text-muted text-right">$240.00</li>
                      </ul>
                      <a href="#" class="h2 text-decoration-none text-dark">Lorem Ipsum</a>
                      <p class="card-text">
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt in culpa qui officia deserunt.
                      </p>
                      <p class="text-muted">Reviews (24)</p>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-4 mb-4">
              <div class="card h-100">
                  <a href="#">
                      <img src="https://therichpost.com/wp-content/uploads/2021/05/feature_prod_02.jpg" class="card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <ul class="list-unstyled d-flex justify-content-between">
                          <li>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-muted fa fa-star"></i>
                              <i class="text-muted fa fa-star"></i>
                          </li>
                          <li class="text-muted text-right">$480.00</li>
                      </ul>
                      <a href="#" class="h2 text-decoration-none text-dark">Lorem Ipsum</a>
                      <p class="card-text">
                        Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum
                      </p>
                      <p class="text-muted">Reviews (48)</p>
                  </div>
              </div>
          </div>
          <div class="col-12 col-md-4 mb-4">
              <div class="card h-100">
                  <a href="#">
                      <img src="https://therichpost.com/wp-content/uploads/2021/05/feature_prod_03.jpg" class="card-img-top" alt="...">
                  </a>
                  <div class="card-body">
                      <ul class="list-unstyled d-flex justify-content-between">
                          <li>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-warning fa fa-star"></i>
                          </li>
                          <li class="text-muted text-right">$360.00</li>
                      </ul>
                      <a href="#" class="h2 text-decoration-none text-dark">Lorem Ipsum</a>
                      <p class="card-text">
                        Lorem Ipsum Lorem Ipsum Lorem IpsumLorem Ipsum Lorem Ipsum Lorem Ipsum.
                      </p>
                      <p class="text-muted">Reviews (74)</p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- End Featured Product -->


<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
  <div class="container">
      <div class="row">

          <div class="col-md-4 pt-5">
              <h2 class="h2 text-success border-bottom pb-3 border-light logo">Jassa Shop</h2>
              <ul class="list-unstyled text-light footer-link-list">
                  <li>
                      <i class="fas fa-map-marker-alt fa-fw"></i>
                      India
                  </li>
                  <li>
                      <i class="fa fa-phone fa-fw"></i>
                      <a class="text-decoration-none" href="#">000-000-0000</a>
                  </li>
                  <li>
                      <i class="fa fa-envelope fa-fw"></i>
                      <a class="text-decoration-none" href="#">info@company.com</a>
                  </li>
              </ul>
          </div>

          <div class="col-md-4 pt-5">
              <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
              <ul class="list-unstyled text-light footer-link-list">
                  <li><a class="text-decoration-none" href="#">Luxury</a></li>
                  <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                  <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                  <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                  <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                  <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                  <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
              </ul>
          </div>

          <div class="col-md-4 pt-5">
              <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
              <ul class="list-unstyled text-light footer-link-list">
                  <li><a class="text-decoration-none" href="#">Home</a></li>
                  <li><a class="text-decoration-none" href="#">About Us</a></li>
                  <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                  <li><a class="text-decoration-none" href="#">FAQs</a></li>
                  <li><a class="text-decoration-none" href="#">Contact</a></li>
              </ul>
          </div>

      </div>

      <div class="row text-light mb-4">
          <div class="col-12 mb-3">
              <div class="w-100 my-3 border-top border-light"></div>
          </div>
          <div class="col-auto me-auto">
              <ul class="list-inline text-left footer-icons">
                  <li class="list-inline-item border border-light rounded-circle text-center">
                      <a class="text-light text-decoration-none" target="_blank" href="#"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                  </li>
                  <li class="list-inline-item border border-light rounded-circle text-center">
                      <a class="text-light text-decoration-none" target="_blank" href="#"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                  </li>
                  <li class="list-inline-item border border-light rounded-circle text-center">
                      <a class="text-light text-decoration-none" target="_blank" href="#"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                  </li>
                  <li class="list-inline-item border border-light rounded-circle text-center">
                      <a class="text-light text-decoration-none" target="_blank" href="#"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                  </li>
              </ul>
          </div>
          <div class="col-auto">
              <label class="sr-only" for="subscribeEmail">Email address</label>
              <div class="input-group mb-2">
                  <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                  <div class="input-group-text btn-success text-light">Subscribe</div>
              </div>
          </div>
      </div>
  </div>

  <div class="w-100 bg-black py-3">
      <div class="container">
          <div class="row pt-2">
              <div class="col-12">
                  <p class="text-left text-light">
                      Copyright &copy; 2021 Company Name 
                      | Designed by <a rel="sponsored" href="#" target="_blank">Jassa</a>
                  </p>
              </div>
          </div>
      </div>
  </div>

</footer>
<!-- End Footer -->
</template>

<style scoped>


body, ul, li, p, a, label, input, div {
    font-family: 'Roboto', sans-serif;
    font-size: 18px !important;
    font-weight: 300 !important;
  }
  .h1 {
    font-family: 'Roboto', sans-serif;
    font-size: 48px !important;
    font-weight: 200 !important;
  }
  .h2 {
    font-family: 'Roboto', sans-serif;
    font-size: 30px !important;
    font-weight: 300;
  }
  .h3 {
    font-family: 'Roboto', sans-serif;
    font-size: 22px !important;
  }
  /* General */
  .logo { font-weight: 500 !important;}
  .text-warning {  color: #ede861 !important;}
  .text-muted { color: #bcbcbc !important;}
  .text-success { color: #59ab6e !important;}
  .text-light { color: #cfd6e1 !important;}
  .bg-dark { background-color: #212934 !important;}
  .bg-light { background-color: #e9eef5 !important;}
  .bg-black { background-color: #1d242d !important;}
  .bg-success { background-color: #59ab6e !important;}
  .btn-success {
    background-color: #59ab6e !important;
    border-color: #56ae6c !important;
  }
  .pagination .page-link:hover {color: #000;}
  .pagination .page-link:hover, .pagination .page-link.active {
    background-color: #69bb7e;
    color: #fff;
  }
  /* Nav */
  #templatemo_nav_top { min-height: 40px;}
  #templatemo_nav_top * { font-size: 12px !important;}
  #templatemo_main_nav a { color: #212934;}
  #templatemo_main_nav a:hover { color: #69bb7e;}
  #templatemo_main_nav .navbar .nav-icon { margin-right: 20px;}
  
  /* Hero Carousel */
  #template-mo-jassa-hero-carousel { background: #efefef !important;}
  /* Accordion */
  .templatemo-accordion a { color: #000;}
  .templatemo-accordion a:hover { color: #333d4a;}
  /* Shop */
  .shop-top-menu a:hover { color: #69bb7e !important;}
  /* Product */
  .product-wap { box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.10);}
  .product-wap .product-color-dot.color-dot-red { background:#f71515;}
  .product-wap .product-color-dot.color-dot-blue { background:#6db4fe;}
  .product-wap .product-color-dot.color-dot-black { background:#000000;}
  .product-wap .product-color-dot.color-dot-light { background:#e0e0e0;}
  .product-wap .product-color-dot.color-dot-green { background:#0bff7e;}
  .card.product-wap .card .product-overlay {
    background: rgba(0,0,0,.2);
    visibility: hidden;
    opacity: 0;
    transition: .3s;
  }
  .card.product-wap:hover .card .product-overlay {
    visibility: visible;
    opacity: 1;
  }
  .card.product-wap a { color: #000;}
  #carousel-related-product .slick-slide:focus { outline: none !important;}
  #carousel-related-product .slick-dots li button:before {
    font-size: 15px;
    margin-top: 20px;
  }
  /* Brand */
  .brand-img {
    filter: grayscale(100%);
    opacity: 0.5;
    transition: .5s;
  }
  .brand-img:hover {
    filter: grayscale(0%);
    opacity: 1;
  }
  /* Carousel Hero */
  #template-mo-jassa-hero-carousel .carousel-indicators li {
    margin-top: -50px;
    background-color: #59ab6e;
  }
  #template-mo-jassa-hero-carousel .carousel-control-next i,
  #template-mo-jassa-hero-carousel .carousel-control-prev i {
    color: #59ab6e !important;
    font-size: 2.8em !important;
  }
  /* Carousel Brand */
  .tempaltemo-carousel .h1 {
    font-size: .5em !important;
    color: #000 !important;
  }
  /* Services */
  .services-icon-wap {transition: .3s;}
  .services-icon-wap:hover, .services-icon-wap:hover i {color: #fff;}
  .services-icon-wap:hover {background: #69bb7e;}
  /* Contact map */
  .leaflet-control a, .leaflet-control { font-size: 10px !important;}
  .form-control { border: 1px solid #e8e8e8;}
  /* Footer */
  #tempaltemo_footer a { color: #dcdde1;}
  #tempaltemo_footer a:hover { color: #68bb7d;}
  #tempaltemo_footer ul.footer-link-list li { padding-top: 10px;}
  #tempaltemo_footer ul.footer-icons li {
    width: 2.6em;
    height: 2.6em;
    line-height: 2.6em;
  }
  #tempaltemo_footer ul.footer-icons li:hover {
    background-color: #cfd6e1;
    transition: .5s;
  }
  #tempaltemo_footer ul.footer-icons li:hover i {
    color: #212934;
    transition: .5s;
  }
  #tempaltemo_footer .border-light { border-color: #2d343f !important;}
  /*
  // Extra small devices (portrait phones, less than 576px)
  // No media query since this is the default in Bootstrap
  */
  /* Small devices (landscape phones, 576px and up)*/
  .product-wap .h3, .product-wap li, .product-wap i, .product-wap p {
    font-size: 12px !important;
  }
  .product-wap .product-color-dot {
    width: 6px;
    height: 6px;
  }
  
  @media (min-width: 576px) {
    .tempaltemo-carousel .h1 { font-size: 1em !important;}
  }
  
  /*// Medium devices (tablets, 768px and up)*/
  @media (min-width: 768px) {
    #templatemo_main_nav .navbar-nav {max-width: 450px;}
   }
  
  /* Large devices (desktops, 992px and up)*/
  @media (min-width: 992px) {
    #templatemo_main_nav .navbar-nav {max-width: 550px;}
    #template-mo-jassa-hero-carousel .carousel-item {min-height: 30rem !important;}
    .product-wap .h3, .product-wap li, .product-wap i, .product-wap p {font-size: 18px !important;}
    .product-wap .product-color-dot {
      width: 12px;
      height: 12px;
    }
  }
  
  /* Extra large devices (large desktops, 1200px and up)*/
  @media (min-width: 1200px) {}
  
</style>
<script>

    import { defineComponent } from 'vue'
    import { Head, Link } from '@inertiajs/inertia-vue3';

    export default defineComponent({
        components: {
            Head,
            Link,
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    })
</script>