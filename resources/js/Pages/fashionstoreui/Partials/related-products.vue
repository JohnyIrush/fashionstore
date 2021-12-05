<template>
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
                          <li>
                            <a v-on:click.prevent="addToCart(product.id)" role="button" type="button" class="btn btn-success text-white mt-2"  >
                              <i class="fas fa-cart-plus"></i>
                            </a>
                          </li>
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
          <div class="col-12 col-md-4 mb-4 carousel-item featured-carousel-item" v-for="product in products" :index="index">
              <div class="card h-100 featured-card">
                  <img :src="'/Images/Fashions/' +  product.images[0].thumbnail" class="card-img-top featured-product-img" alt="...">
                                <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                                    <ul class="list-unstyled">
                                        <li><a class="btn btn-success text-white" href="shop-single.html"><i class="far fa-heart"></i></a></li>
                                        <li><a :href="'/shop/product/' + product.id" class="btn btn-success text-white mt-2"><i class="far fa-eye"></i></a></li>
                                        <li>
                                          <a  v-on:click.prevent="addToCart(product.id)" role="button" class="btn btn-success text-white mt-2" >
                                            <i class="fas fa-cart-plus"></i>
                                          </a>
                                        </li>
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
    <shoporcheckout />
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
</style>

<script>

import shoporcheckout from './purchase/shoporcheckout'

export default {
        components: {
            shoporcheckout
        },
    props:
    {
        category: Number
    },
    data() {
        return {
            products: {}
        }
    },
    methods: {
    fetchProducts: function(id)
    {  
      axios.get('/api/products/' + id)
      .then((response) => {
          console.log("From Related Products");
          console.log(response);
        this.products = response.data;
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
    created()
    {
        this.fetchProducts(this.category);
    }
}
</script>