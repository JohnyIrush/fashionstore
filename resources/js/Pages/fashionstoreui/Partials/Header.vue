<template>
         <!-- Start Top Nav -->
         <Head title="Welcome" />

     <nav class="navbar navbar-expand-lg  navbar-light main-theme-bg-color d-none d-lg-block hidden fixed top-0 right-0 px-6 py-4 sm:block" id="templatemo_nav_top">
      <div class="container text-light">
          <div class="w-100 d-flex justify-content-between">
              <div>
                  <i class="fa fa-envelope fa-1x mx-2"></i>
                  <a class="navbar-sm-brand text-light text-decoration-none" href="#">softwarescares@gmail.com</a>
                  <i class="fa fa-phone fa-1x mx-2"></i>
                  <a class="navbar-sm-brand text-light text-decoration-none" href="#">+254748607169</a>
              </div>
              <div>
                  <a class="text-light" href="https://github.com/JohnyIrush" target="_blank" rel="sponsored"><i class="fab fa-github fa-sm fa-fw me-2 fa-2x"></i></a>
                  <a class="text-light" href="https://www.linkedin.com/in/john-irungu-sc-developer" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw fa-2x"></i></a>
              </div>
          </div>
      </div>
      <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
          <div v-if="$page.props.user">
            <Link v-if="dashboard == false" :href="route('dashboard')" class="btn fa fa-dashboard elements-bg-secondary-second-color text-white">
                Dashboard
            </Link>
          </div>
          <template v-else>
              <Link :href="route('login')" class="btn elements-bg-secondary-second-color text-white">
                  Log in
              </Link>
    
              <Link v-if="canRegister" :href="route('register')" class="btn fa fa-dashboard elements-bg-secondary-color text-white">
                  Register
              </Link>
          </template>
      </div>
    </nav>
    <!-- Close Top Nav -->


<!-- Header -->
<nav class="navbar navbar-expand-lg shadow main-theme-bg-color ">
  <div class="container d-flex justify-content-between align-items-center">

      <a class="navbar-brand text-white logo h1 align-self-center" href="/">
          Fashionstore
      </a>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
          <div class="flex-fill">
              <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                  <li class="nav-item">
                   <Link :href="route('home')" class="text-white">
                       Home
                   </Link>
                      <!--<a class="nav-link text-white" href="/">Home</a>-->
                  </li>
                  <li class="nav-item">
                   <Link :href="route('shop')" class="text-white">
                       Shop
                   </Link>
                      <!--<a class="nav-link text-white" href="/shop">Shop</a>-->
                  </li>
                  <li class="nav-item">
                   <Link :href="route('about')" class="text-white">
                       About
                   </Link>
                      <!--<a class="nav-link text-white" href="/about">About</a>-->
                  </li>
                  <li class="nav-item">
                   <Link :href="route('contact')" class="text-white">
                       Contact
                   </Link>
                      <!--<a class="nav-link text-white" href="/contact">Contact</a>-->
                  </li>
              </ul>
          </div>
          <div class="navbar align-self-center d-flex">
              <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                  <div class="input-group">
                      <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                      <div class="input-group-text">
                          <i class="fa fa-fw fa-search text-white fa-2x"></i>
                      </div>
                  </div>
              </div>
              <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                  <i class="fa fa-fw fa-search text-dark mr-2"></i>
              </a>
              <Link :href="route('cart')" class="nav-icon position-relative text-decoration-none text-white">
                  <i class="fa fa-fw fa-cart-arrow-down text-white mr-1 fa-2x"></i>
                  <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">{{cartTotalQuantity}}</span>
              </Link>
              <!--<a class="nav-icon position-relative text-decoration-none text-white" href="/cart">
                  <i class="fa fa-fw fa-cart-arrow-down text-white mr-1 fa-2x"></i>
                  <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">{{cartTotalQuantity}}</span>
              </a>-->
              <!--<a class="nav-icon position-relative text-decoration-none" href="#">
                  <i class="fa fa-fw fa-user text-dark mr-3"></i>
                  <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
              </a>-->
          </div>
      </div>

  </div>
</nav>
<!-- Close Header -->   
</template>

<script>

import { Head, Link } from '@inertiajs/inertia-vue3';
import { defineComponent } from 'vue'

export default  defineComponent( {
    components: {
        Head,
        Link,
    },
    props:
    {
        canLogin: Boolean,
        canRegister: Boolean,
        laravelVersion: String,
        phpVersion: String,
        dashboard: Boolean
    },
    data() {
        return {
            cartTotalQuantity: {},
            canLogin: Boolean,
            canRegister: Boolean,
            
        }
    },
    methods: {
    cartQuantity: function()
    {  
      axios.post('/cart-quantity')
      .then((response) => {
        this.cartTotalQuantity = response.data.totalQty;
      })
    },
    fetchAuthenticationState: function()
    {
      axios.post('/authentication-status')
      .then((response) => {
        this.canLogin = response.data.canLogin;
        this.canRegister = response.data.canRegister;
        this.laravelVersion = response.data.laravelVersion;
        this.phpVersion = response.data.phpVersion;
        console.log(this.canLogin + ' ' + this.canRegister );
      })
    }
    },
    created()
    {
        this.cartQuantity();
        this.fetchAuthenticationState();
    }
});
</script>

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
