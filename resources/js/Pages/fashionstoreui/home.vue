<template>
<Header/>
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
<!--<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://therichpost.com/wp-content/uploads/2021/05/banner_img_01.jpg" class="d-block w-100" alt="...">One
    </div>
    <div class="carousel-item">
      <img src="https://therichpost.com/wp-content/uploads/2021/05/banner_img_02.jpg" class="d-block w-100" alt="...">Two
    </div>
    <div class="carousel-item">
      <img src="https://therichpost.com/wp-content/uploads/2021/05/banner_img_03.jpg" class="d-block w-100" alt="...">Three
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>-->
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
          <p class="text-center"><a href="/shop" class="btn btn-success">Go Shop</a></p>
      </div>
      <div class="col-12 col-md-4 p-5 mt-3">
          <a href="#"><img src="https://therichpost.com/wp-content/uploads/2021/05/category_img_02.jpg" class="rounded-circle img-fluid border"></a>
          <h2 class="h5 text-center mt-3 mb-3">Shoes</h2>
          <p class="text-center"><a href="/shop" class="btn btn-success">Go Shop</a></p>
      </div>
      <div class="col-12 col-md-4 p-5 mt-3">
          <a href="#"><img src="https://therichpost.com/wp-content/uploads/2021/05/category_img_03.jpg" class="rounded-circle img-fluid border"></a>
          <h2 class="h5 text-center mt-3 mb-3">Accessories</h2>
          <p class="text-center"><a href="/shop" class="btn btn-success">Go Shop</a></p>
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
      <div class="row" >
      <div id="featured-products-carouselControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner featured-carousel-inner">
          <div class="col-12 col-md-4 mb-4 carousel-item featured-carousel-item active">
              <div class="card h-100">
                  <img src="https://therichpost.com/wp-content/uploads/2021/05/feature_prod_02.jpg" class="card-img-top" alt="...">
                  <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                      <ul class="list-unstyled">
                          <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                          <li><a class="btn btn-success text-white mt-2" href="/shop/product"><i class="far fa-eye"></i></a></li>
                          <li><a href="#" v-on:click.prevent="addToCart(product.id)" class="btn btn-success text-white mt-2" ><i class="fas fa-cart-plus"></i></a></li>
                      </ul>
                  </div>
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
          <div class="col-12 col-md-4 mb-4 carousel-item featured-carousel-item" v-for="product in featuredProducts " :index="index">
              <div class="card h-100 featured-card">
                  <img :src="'Images/Fashions/' +  product.images[0].thumbnail" class="card-img-top featured-product-img" alt="...">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                                        <li><a :href="'/shop/product/' + product.id" class="btn btn-success text-white mt-2"><i class="far fa-eye"></i></a></li>
                                        <li><a href="#"  v-on:click.prevent="addToCart(product.id)" class="btn btn-success text-white mt-2" ><i class="fas fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                  <div class="card-body">
                      <ul class="list-unstyled d-flex justify-content-between">
                          <li>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-warning fa fa-star"></i>
                              <i class="text-muted fa fa-star"></i>
                              <i class="text-muted fa fa-star"></i>
                          </li>
                          <li class="text-muted text-right">{{product.price}}</li>
                      </ul>
                      <a href="#" class="h2 text-decoration-none text-dark">{{product.name}}</a>
                      <p class="card-text">
                          {{ product.description }}
                      </p>
                      <p   class="text-muted">Reviews ({{}})</p>
                  </div>
              </div>
          </div>
        </div>
        <button class="carousel-control-prev featured-carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next featured-carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      </div>
  </div>
</section>
<!-- End Featured Product -->
<shoporcheckout />
<Footer />
</template>

<style scoped>

@media (min-width: 768px) {
  .featured-carousel-inner {
    display: flex;
  }
  .featured-carousel-item {
    margin-right: 0;
    flex: 0 0 33.333333%;
    display: block;
  }
}

.featured-carousel-inner{
    padding: 1em;
}
.featured-card{
    margin: 0 .5em;
    box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
    border: none;
}
.featured-carousel-control-prev, .featured-carousel-control-next{
    background-color: #e1e1e1;
    width: 6vh;
    height: 6vh;
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
}

.featured-product-img {
    /*float: left !important;*/
    width:  100% !important;
    height: 300px !important;
    object-fit: cover !important;
}

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
    import Header from './Partials/Header';
    import Footer from './Partials/Footer';
    import shoporcheckout from './Partials/purchase/shoporcheckout'
    

    export default defineComponent({
        components: {
            Head,
            Link,
            Header,
            Footer,
            shoporcheckout
        },

        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
            featured: Object,
            categories: Object
        },
        data() {
          return {
            featuredProducts: [],
            //totalReviews: 0
          }
        },
        methods: {
          totalReviews: function(id)
          {
            axios.get('/api/product/'+ id +'/reviews/total')
            .then((response)=>{
              console.log(response);
              return response.data;
            })
          },
          addToCart: function(id)
          {
              axios.post('/add-to-cart/' + id)
              .then((response)=>{
                  $("#shop-check").modal("show");
              })
          }

        },
        created(){
           this.featuredProducts = this.featured.original;
          //console.log(this.featured.original[0].images);

        }
    })
</script>