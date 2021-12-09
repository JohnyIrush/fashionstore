<template>
<Header :dashboard="false" />
<!--Section: Block Content-->
<section class="main-theme-tertiary-bg-color">
   <div v-if="!cartTotalQuantity" class="card-header  main-theme-tertiary-bg-color">
     <div class="card main-theme-tertiary-bg-color cart-height">
      <div class="row">
          <div class="col-sm-12 mr-1 cart-items" >
           <div class="card main-theme-tertiary-bg-color shadow-lg p-3 mb-5 rounded">
             <div class="card main-theme-sec-bg-color cart-bg-color">
                 <div class="row justify-content-center p-3">
                    <div class="col-sm-12 text-xenter shadow-sm m-1  mb-5  rounded">
                       <p class="display-4 text-center text-white">Your Cart Is Empty</p>   
                    </div>                                
                 </div>
             </div>
           </div>
          </div>
      </div>
      <div class="card-footer">
          <div class="row justify-content-start">
              <!--<a href="/shop" class="btn text-white main-theme-bg-color col-sm-4"> <i class="fa mr-2 fa-shopping-basket" aria-hidden="true"></i>Go To Shop</a>-->
              <Link :href="route('shop')" class="btn main-theme-bg-color btn-lg text-white col-sm-4">
                  Go To Shop
              </Link>
          </div>
      </div>
     </div> 
   </div>
  <!--Grid row-->
  <div v-if="cartTotalQuantity > 0" class="row">

    <!--Grid column-->
    <div class="col-lg-8">
      <!-- Cart -->
      <div  class="card  mb-3 text-white main-theme-sec-bg-color">
        <div  class="card-body">

          <h5 class="mb-4">Cart (<span>{{cartTotalQuantity}}</span> items)</h5>

          <div class="row mb-4" v-for="product in Items.items" :index="index">
            <div class="col-md-5 col-lg-3 col-xl-3">
              <div class="view zoom overlay z-depth-1 rounded mb-3 mb-md-0">
                <img class="img-fluid w-100"
                  :src="'/Images/Fashions/' + product.item.images[0].thumbnail">
                <!--<a href="#!">
                  <div class="mask waves-effect waves-light">
                    <img class="img-fluid w-100"
                      :src="'/Images/Fashions/' + product.item.images[0].thumbnail" >
                    <div class="mask rgba-black-slight waves-effect waves-light"></div>
                  </div>
                </a>-->
              </div>
            </div>
            <div class="col-md-7 col-lg-9 col-xl-9">
              <div>
                <div class="d-flex justify-content-between">
                  <div>
                    <h5> {{ product.item.name }} </h5>
                    <p class="mb-3 text-muted text-uppercase small">Shirt - blue</p>
                    <p class="mb-2 text-muted text-uppercase small">Color: blue</p>
                    <p class="mb-3 text-muted text-uppercase small">Size: M</p>
                  </div>
                  <div>
                    <div class="def-number-input number-input safari_only mb-0 w-100">
                      <span class="elements-text-secondary-second-color" v-on:click.prevent="addToCart(product.item.id)"><!--<input type="submit" v-on:click.prevent="addToCart(product.item.id)" value="increase">--> <i class="fa fa-plus"></i></span>
                      <input  :id="'qty'+product.item.id" class="quantity" min="1" name="quantity" :value="product.qty" type="number" readonly>
                      <span class="elements-text-secondary-second-color" v-on:click.prevent="reduceProduct(product.item.id)"><!--<input type="submit" v-on:click.prevent="reduceProduct(product.item.id)" value="reduce">--> <i class="fa fa-minus"></i></span>
                    </div>
                    <small id="passwordHelpBlock" class="form-text text-muted text-center">
                      (Quantity)
                    </small>
                  </div>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <button v-on:click.prevent="removeProduct(product.item.id)"  type="button" class=" btn elements-bg-secondary-color text-white text-uppercase mr-3"><i
                        class="fas fa-trash-alt mr-1"></i> Remove item </button>
                    <!--<a href="#!" type="button" class="card-link-secondary small text-uppercase"><i
                        class="fas fa-heart mr-1"></i> Move to wish list </a>-->
                  </div>
                  <p class="mb-0"><span><strong> {{ product.item.price }} </strong></span></p>
                </div>
              </div>
            </div>
          </div>
          <hr class="mb-5 bg-dark">
          <div class="card-footer">
              <div class="row justify-content-start">
              <!--<a href="/shop" class="btn main-theme-bg-color text-white col-sm-4"> 
              <i class="fa mr-2 fa-shopping-basket" aria-hidden="true"></i>{{ Items.totalPrice>0 ? 'Continue Shopping' : 'Go To Shop' }} 
              </a>-->
              <Link :href="route('shop')" class="btn main-theme-bg-color btn-lg text-white col-sm-4">
                   <i class="fa mr-2 fa-shopping-basket" aria-hidden="true"></i>{{ Items.totalPrice>0 ? 'Continue Shopping' : 'Go To Shop' }}
              </Link>
              </div>
          </div>
          <hr class="mb-5 bg-dark">
          <p class="text-primary mb-0"><i class="fas fa-info-circle mr-1"></i> Do not delay the purchase, adding
            items to your cart does not mean booking them.</p>

        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="card mb-3 main-theme-sec-bg-color text-white">
        <div class="card-body">

          <h5 class="mb-4">Expected shipping delivery</h5>

          <p class="mb-0"> {{ new Date(new Date().getTime()+(5*24*60*60*1000))}}</p>
        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div id="select-payment-method" class="card text-white mb-3 main-theme-sec-bg-color">
        <form id="payment-method-selector" @submit.prevent="selectPaymentMethod()" >
        <div class="card-body">

          <h5 class="mb-4">We accept</h5>

          <div class="form-check form-switch">
            <input class="form-check-input" name="payment-method" type="radio" id="mpesa-express" value="mpesa">
            <label class="form-check-label" for="mpesa-express"> <img src="/Images/mpesa.png" alt="Lipa Na Mpesa"> </label>
          </div>
          <div class="form-check form-switch">
            <input class="form-check-input" name="payment-method" type="radio" id="stripe" value="stripe" >
            <label class="form-check-label" for="stripe"> <i class="fab fa-stripe fa-3x" style="color: purple;"></i> </label>
          </div>
        </div>
        <div class="card-footer">
            <div class="row justify-content-end">
                <button type="submit" class="btn main-theme-bg-color  text-white col-sm-4 btn-lg"> Proceed To Payment</button>
            </div>
        </div>
        </form>
      </div>
      <!-- Card -->

    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-4">

      <!-- Card -->
      <div class="card mb-3 main-theme-sec-bg-color ">
        <div class="card-body">

          <h5 class="mb-3 text-white">The total amount of</h5>

          <ul class="list-group list-group-flush main-theme-sec-bg-color">
            <li class="list-group-item main-theme-sec-bg-color d-flex justify-content-between text-white align-items-center border-0 px-0 pb-0">
              Temporary amount
              <span class="text-white">{{Items.totalPrice}}</span>
            </li>
            <li class="list-group-item main-theme-sec-bg-color  d-flex justify-content-between align-items-center px-0 text-white">
              Shipping
              <span>0</span>
            </li>
            <li class="list-group-item main-theme-sec-bg-color  text-white d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong>The total amount of</strong>
                <strong>
                  <p class="mb-0">(including VAT)</p>
                </strong>
              </div>
              <span class="text-white"><strong>{{Items.totalPrice}}</strong></span>
            </li>
          </ul>

          <a href="#select-payment-method" type="button" class="btn main-theme-bg-color text-white btn-lg btn-block waves-effect waves-light">Select Payment Method</a>

        </div>
      </div>
      <!-- Card -->

      <!-- Card -->
      <div class="card mb-3 main-theme-sec-bg-color">
        <div class="card-body">

          <a class="dark-grey-text d-flex justify-content-between" data-toggle="collapse" href="#collapseExample1"
            aria-expanded="false" aria-controls="collapseExample1">
            Add a discount code (optional)
            <span><i class="fas fa-chevron-down pt-1"></i></span>
          </a>

          <div class="collapse" id="collapseExample1">
            <div class="mt-3">
              <div class="md-form md-outline mb-0">
                <input type="text" id="discount-code1" class="form-control font-weight-light"
                  placeholder="Enter discount code">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Card -->

    </div>
    <!--Grid column-->

  </div>
  <!--Grid row-->

</section>
<!--Section: Block Content-->
<Footer/>
</template>

<style scoped>
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #fff;
    background-repeat: no-repeat
}

.plus-minus {
    position: relative
}

.plus {
    position: absolute;
    top: -4px;
    left: 2px;
    cursor: pointer
}

.minus {
    position: absolute;
    top: 8px;
    left: 5px;
    cursor: pointer
}

.vsm-text:hover {
    color: #FF5252
}

.book,
.book-img {
    width: 120px;
    height: 180px;
    border-radius: 5px
}

.book {
    margin: 20px 15px 5px 15px
}

.border-top {
    border-top: 1px solid #EEEEEE !important;
    margin-top: 20px;
    padding-top: 15px
}

.card {
    margin: 40px 0px;
    padding: 40px 50px;
    border-radius: 20px;
    border: none;
    box-shadow: 1px 5px 10px 1px rgba(0, 0, 0, 0.2)
}

input,
textarea {
    background-color: #F3E5F5;
    padding: 8px 15px 8px 15px;
    width: 100%;
    border-radius: 5px !important;
    box-sizing: border-box;
    border: 1px solid #F3E5F5;
    font-size: 15px !important;
    color: #000 !important;
    font-weight: 300
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #9FA8DA;
    outline-width: 0;
    font-weight: 400
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.pay {
    width: 80px;
    height: 40px;
    border-radius: 5px;
    border: 1px solid #673AB7;
    margin: 10px 20px 10px 0px;
    cursor: pointer;
    box-shadow: 1px 5px 10px 1px rgba(0, 0, 0, 0.2)
}

.gray {
    -webkit-filter: grayscale(100%);
    -moz-filter: grayscale(100%);
    -o-filter: grayscale(100%);
    -ms-filter: grayscale(100%);
    filter: grayscale(100%);
    color: #E0E0E0
}

.gray .pay {
    box-shadow: none
}

#tax {
    border-top: 1px lightgray solid;
    margin-top: 10px;
    padding-top: 10px
}

.btn-blue {
    border: none;
    border-radius: 10px;
    background-color: #673AB7;
    color: #fff;
    padding: 8px 15px;
    margin: 20px 0px;
    cursor: pointer
}

.btn-blue:hover {
    background-color: #311B92;
    color: #fff
}

#checkout {
    float: left
}

#check-amt {
    float: right
}

@media screen and (max-width: 768px) {

    .book,
    .book-img {
        width: 100px;
        height: 150px
    }

    .card {
        padding-left: 15px;
        padding-right: 15px
    }

    .mob-text {
        font-size: 13px
    }

    .pad-left {
        padding-left: 20px
    }
}
</style>

<script>

import Header from './Partials/Header';
import Footer from './Partials/Footer';
import { EventEmitter } from 'events';

export default {
    components:{
        Header,
        Footer
    },
    data () {
      return{
          cartTotalQuantity: 0,
          Items: {}
      }
    },
    methods:{
    cartQuantity: function()
    {  
      axios.post('/cart-quantity')
      .then((response) => {
        this.cartTotalQuantity = response.data.totalQty;
        console.log('cartTotalQuantity' );
        console.log(this.cartTotalQuantity );
      })
    },
    fetchCartItems: function()
    {  
      axios.post('/cart-items')
      .then((response) => {
        this.Items = response.data;
        console.log(this.Items);
      })
    },
      //reduce product from cart
      reduceProduct: function(id){
        axios.get('/reduce/' + id)
        .then((res)=>{
              // this.feedbackMessages.successMsg('Product reduced successfully');
              this.fetchCartItems();
              this.cartQuantity();
        })
      },
      removeProduct: function(id){
        axios.get('/remove/' + id)
        .then((res)=>{
              //this.feedbackMessages.successMsg('Product removed successfully');
              this.fetchCartItems();
              this.cartQuantity();
        })
      },
      addToCart: function(id)
      {
          axios.post('/add-to-cart/' + id)
          .then((response)=>{
            this.fetchCartItems();
            this.cartQuantity();
          })
      },
      selectPaymentMethod: function()
      {
        localStorage.paymentMethod = $("input[type='radio'][name='payment-method']:checked").val();
        if($("input[type='radio'][name='payment-method']:checked").val() == 'mpesa')
        {
          location.replace("/payment");
        }else if($("input[type='radio'][name='payment-method']:checked").val() == 'stripe')
        {
          location.replace("/payment");
        }
        
        /*
       if (document.getElementById('r1').checked) {
         rate_value = document.getElementById('r1').value;
       }*/
      }
  },
    created()
    {
       this.cartQuantity();
       this.fetchCartItems();
    }
}
</script>