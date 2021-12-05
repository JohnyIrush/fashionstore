<template>
<!-- Start Footer -->
<footer class="bg-dark" id="tempaltemo_footer">
  <div class="container">
      <div class="row">

          <div class="col-md-4 pt-5">
              <h2 class="h2 text-success border-bottom pb-3 border-light logo">Fashionstore Shop</h2>
              <ul class="list-unstyled text-light footer-link-list">
                  <li>
                      <i class="fas fa-map-marker-alt fa-fw"></i>
                      Kenya
                  </li>
                  <li>
                      <i class="fa fa-phone fa-fw"></i>
                      <a class="text-decoration-none" href="#">+254748607169</a>
                  </li>
                  <li>
                      <i class="fa fa-envelope fa-fw"></i>
                      <a class="text-decoration-none" href="#">softwarescares@gmail.com</a>
                  </li>
              </ul>
          </div>

          <div class="col-md-4 pt-5">
              <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
              <ul class="list-unstyled text-light footer-link-list">
                  <li v-for="category in categories" :index="index"><a class="text-decoration-none" href="'/products/' + {{category.id}}">{{category.name}}</a></li>
              </ul>
          </div>

          <div class="col-md-4 pt-5">
              <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
              <ul class="list-unstyled text-light footer-link-list">
                  <li><a class="text-decoration-none" href="/">Home</a></li>
                  <li><a class="text-decoration-none" href="/about">About Us</a></li>
                  <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                  <li><a class="text-decoration-none" href="#">FAQs</a></li>
                  <li><a class="text-decoration-none" href="/contact">Contact</a></li>
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
                      <a class="text-light" href="https://github.com/JohnyIrush" target="_blank" rel="sponsored"><i class="fab fa-github fa-sm fa-fw me-2"></i></a>
                  </li>
                  <li class="list-inline-item border border-light rounded-circle text-center">
                      <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/in/john-irungu-sc-developer"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
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
                      Copyright &copy; 2020 SoftwaresCares
                      | Designed and Developed by <a rel="sponsored" href="https://johnyirush.github.io/" target="_blank">John Irungu</a>
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
export default {
  props: {

  },
  data() {
    return {
      categories: {}
    }
  },
  methods: {
    fetchCategories: function()
    {
      axios.get('/api/categories')
      .then((response) => {
        this.categories = response.data;
        console.log(response);
      })
    }
  },
  created(){
    this.fetchCategories();
  }
}
</script>