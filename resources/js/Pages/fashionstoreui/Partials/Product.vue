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
   <div class="main-theme-tertiary-bg-color">
    <!-- Open Content -->
    <section class="">
        <div class="container pb-5">
            <div class="row" v-for="item in product.original" :index="index">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img :src="'/Images/Fashions/' + item.images[0].thumbnail" class="card-img img-fluid"  alt="Card image cap" id="product-detail">
                    </div>
                    <div class="row">
                     <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                       <div class="carousel-indicators">
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                         <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                       </div>
                       <div class="carousel-inner images-product-img">
                         <div class="carousel-item active">
                           <img :src="'/Images/Fashions/' + item.images[0].thumbnail" class="" alt="image">
                         </div>
                         <div class="carousel-item" v-for="image in product.images" :index="index">
                           <img :src="'/Images/Fashions/' + image.thumbnail" class="d-block w-100 " alt="image">
                         </div>
                       </div>
                       <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Previous</span>
                       </button>
                       <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide="next">
                         <span class="carousel-control-next-icon" aria-hidden="true"></span>
                         <span class="visually-hidden">Next</span>
                       </button>
                     </div>
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5 main-theme-sec-bg-color">
                    <div class="card main-theme-sec-bg-color">
                        <div class="card-body text-white">
                            <h1 class="h2 text-white">{{item.name}}</h1>
                            <p class="py-2">
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-warning"></i>
                                <i class="fa fa-star text-secondary"></i>
                                <span class="list-inline-item text-white">Rating 4.8 | 36 Comments</span>
                            </p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Brand:</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-white"><strong>{{item.brand.name}}</strong></p>
                                </li>
                            </ul>

                            <h6>Description:</h6>
                            <p class="h3 py-2 text-white">{{item.description}}</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <h6>Avaliable Color :</h6>
                                </li>
                                <li class="list-inline-item">
                                    <p class="text-white"><strong>White / Black</strong></p>
                                </li>
                            </ul>

                            <h6>Specification:</h6>
                            <ul class="list-unstyled pb-3 text-white">
                                <li>Lorem ipsum dolor sit</li>
                                <li>Amet, consectetur</li>
                                <li>Adipiscing elit,set</li>
                                <li>Duis aute irure</li>
                                <li>Ut enim ad minim</li>
                                <li>Dolore magna aliqua</li>
                                <li>Excepteur sint</li>
                            </ul>

                                <input type="hidden" name="product-title" value="Activewear">
                                <div class="row">
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item">Size :
                                                <input type="hidden" name="product-size" id="product-size" value="S">
                                            </li>
                                            <li class="list-inline-item"><span class="btn elements-bg-secondary-color btn-size text-white">S</span></li>
                                            <li class="list-inline-item"><span class="btn elements-bg-secondary-color btn-size text-white">M</span></li>
                                            <li class="list-inline-item"><span class="btn elements-bg-secondary-color btn-size text-white">L</span></li>
                                            <li class="list-inline-item"><span class="btn elements-bg-secondary-color btn-size text-white">XL</span></li>
                                        </ul>
                                    </div>
                                    <div class="col-auto">
                                        <ul class="list-inline pb-3">
                                            <li class="list-inline-item text-right">
                                                Quantity
                                                <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                            </li>
                                            <li class="list-inline-item"><span class="btn elements-bg-secondary-color text-white" id="btn-minus">-</span></li>
                                            <li class="list-inline-item"><span class="badge elements-bg-secondary-second-color text-white" id="var-value">1</span></li>
                                            <li class="list-inline-item"><span class="btn elements-bg-secondary-color text-white" id="btn-plus">+</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row pb-3">
                                    <div class="col d-grid">
                                        <a href="/cart" class="btn main-theme-bg-color btn-lg text-white" name="submit" value="buy">Buy</a>
                                    </div>
                                    <div class="col d-grid">
                                        <button  v-on:click.prevent="addToCart(item.id)" type="button" class="btn main-theme-bg-color btn-lg text-white"  >Add To Cart</button>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

    <!-- Start Article -->
    <section class="py-5">
        <div class="container">
            <div class="row text-left p-2 pb-3">
                <h4>Related Products</h4>
            </div>
            <div v-for="item in product.original" :index="index">
                <relatedProducts :category="item.categories[0].id" />
            </div>
        </div>
    </section>
    <!-- End Article -->
    </div>
<Footer/>
</template>

<style scoped>
.images-product-img {
    /*float: left !important;*/
    width:  100px !important;
    height: 100px !important;
    object-fit: cover !important;
}
/*
    .card-img {
        height: 150px !important;
        width: 150px !important;
    }
*/
</style>

<script>

import Header from '../Partials/Header';
import Footer from '../Partials/Footer';
import relatedProducts from '../Partials/related-products'

export default {
    props:{
        product: Object
    },
    components:{
        Header,
        Footer,
        relatedProducts
    },
    methods: {
        addToCart: function(id)
        {
            axios.post('/add-to-cart/' + id)
            .then((response)=>{
                $("#shop-check").modal("show");
            })
        }
    }
    ,
    created() {
        console.log(this.product.original);
    },
}
</script>