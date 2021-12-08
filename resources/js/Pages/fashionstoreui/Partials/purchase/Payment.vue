<template>
      <Header />
      <div class=" main-theme-tertiary-bg-color">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
      <!-- Card -->
      <div class="card mb-4 mt-5 text-white main-theme-sec-bg-color">
        <div class="card-body">
                <span v-if="paymentMethod == 'mpesa'">
                    <strong class="text-white">Pay Via </strong><img src="/Images/mpesa.png" alt="Lipa Na Mpesa">
                </span>
                <p v-if="paymentMethod == 'stripe'">
                    <strong class="text-white">Pay Via </strong>
                    <i class="fab fa-stripe fa-3x" style="color: purple;"></i>
                </p>
          <ul class="list-group list-group-flush main-theme-sec-bg-color">
            <li class="list-group-item d-flex main-theme-sec-bg-color justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <strong class="text-white">Total</strong>
                <strong>
                  <p  class="mb-0 text-white">(including VAT)</p>
                </strong>
                <span class="text-white"><strong >{{Items.totalPrice}}</strong></span>
              </div>
		 	        <div class="col-md-6" v-if="paymentMethod == 'stripe'">
                <div class="card main-theme-sec-bg-color text-white">
                    <div class="card-header h1">Credit or Debit Card</div>
                    <div class="card-body ">
                     <div class="form-group row">
                       <label for="card-holder-name">Card Holder Name</label>
                       <input type="text" name="card-holder-name" id="card-holder-name" class="form-control">
                     </div>
                     <div class="form-group row">
                       <label for="card-holder-name">Card Details</label>
                       <div class="card form-control" id="card-element" style='height: 2.4em; padding-top: .7em;'>
                       <!-- a Stripe Element will be inserted here. -->
                       </div>
                       <!-- Used to display form errors -->
                       <div id="card-errors"></div>
                     </div>
                    </div>
                    <div class="card-footer">
                     <button @click="processStripePayment()" id="card-button" class="btn elements-bg-secondary-color text-white" :data-secret="intent.client_secret">
                         Pay Now({{Items.totalPrice}})
                     </button>
                    </div>
                  </div>
		 	        </div>
            </li>
          </ul>
        </div>
        <div class="card-footer">
		 <div class="row m-0 mt-4 justify-content-between">
      <div class="col-md-6 content-end" v-if="paymentMethod == 'mpesa'">
      		<a  href="/cart" class="btn main-theme-bg-color "><strong>Back</strong></a>
      </div>
		 	<div class="col-md-6" v-if="paymentMethod == 'mpesa'">
				
		 		<form id="mpesa-express-form" action="" style="display: block;" method="POST" accept-charset="UTF-8"  novalidate="novalidate" enctype="multipart/form-data">
		 			<input value="{{csrf_token()}}" name="_token" id="token" type="hidden">
		 			<input v-model="Items.totalPrice" name="amount" id="Amount" hidden>
		 			<input v-model="Phone" name="Phone" id="Phone" hidden>
		 			<button type="submit" class="btn elements-bg-secondary-color text-white btn-grad mt-2" id="deposit-money-confirm">
		 				 <span >Confirm</span>
		 			</button>
		 		</form>
		 	</div>

		 </div>
        </div>
      <div class="card-footer content-end" v-if="paymentMethod == 'stripe'">
        		 		<a  href="/cart" class="btn main-theme-bg-color "><strong>Back</strong></a>
      </div>
      </div>
      <!-- Card -->
          </div>
          <div class="col-md-3"></div>
        </div>
      </div>
      <Footer />
</template>

<script>

import Header from '../Header';
import Footer from '../Footer';

export default {
   props: {
     intent: Object
   },
    components:{
        Header,
        Footer
    },
    data () {
      return{
          cartTotalQuantity: 0,
          Phone: {},
          paymentMethod: '',
          Items: {},
          stripePaymentDetails: {
            cardNumber: '',
            cvv:'',
            monthExpiry: '',
            yearExpiry: ''
          },
      }
    },
    methods:{
    cartQuantity: function()
    {  
      axios.post('/cart-quantity')
      .then((response) => {
        this.cartTotalQuantity = response.data.totalQty;
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
    fetchAuthenticatedUser: function()
    {  
      axios.post('/auth-user')
      .then((response) => {
        this.Phone = response.data.phone;
        console.log(this.Phone);
      })
    },
    processStripePayment: function()
    {
     const cardHolderName = document.getElementById('card-holder-name');
     const cardButton = document.getElementById('card-button');
     
     cardButton.addEventListener('click', async (e) => {
         const { paymentMethod, error } = await stripe.createPaymentMethod(
             'card', cardElement, {
                 billing_details: { name: cardHolderName.value }
             }
         );
     
         if (error) {
               // Display "error.message" to the user...
              console.log(error);
              swal({
                title: "Card Verification",
                text: error.message,
                icon: "error",
                button: "Close",
              });
         } else {
             // The card has been verified successfully...
             console.log(paymentMethod);

             swal({
               title: "Card Verification",
               text: paymentMethod.status,
               icon: "success",
               button: "Close",
             });
         }
     });
    },
    renderStripeElements: function()
    {

    }
  },
    created()
    {
       this.cartQuantity();
       this.fetchCartItems();
       this.paymentMethod = localStorage.paymentMethod;
       this.fetchAuthenticatedUser();
    },
    mounted()
    {
      this.renderStripeElements();
      const stripe = Stripe('pk_test_51H9qTECmoUmjZivfKU4rPUUpjCxOW3obeJS07Yspbj3f3M1QyYITbxiBjliGJfYq4pdMSs1pg36Dx2JpN9Ir7UHn00Z5hpub3d');
        
      const elements = stripe.elements();
      const cardElement = elements.create('card');
        
      cardElement.mount('#card-element');
       /*
            const cardHolderName = document.getElementById('card-holder-name');

            const cardButton = document.getElementById('card-button');
            const clientSecret = cardButton.dataset.secret;
            
            cardButton.addEventListener('click', async (e) => {
                e.preventDefault();
                
                const { setupIntent, error } = await stripe.confirmCardSetup(
                    clientSecret, {
                        payment_method: {
                            card: cardElement,
                            billing_details: { name: cardHolderName.value }
                        }
                    }
                );
            
                if (error) {
                    // Display "error.message" to the user...
                   console.log(error);
                   swal({
                     title: "Card Verification",
                     text: error.message,
                     icon: "error",
                     button: "Close",
                   });
                } else {
                    // The card has been verified successfully...

                   swal({
                     title: "Card Verification",
                     text: setupIntent.status,
                     icon: "success",
                     button: "Close",
                   });
                    axios.post('/add-payment-method', setupIntent)
                    .then(()=>{
                    swal({
                     title: "Payment Method Update",
                     text: "success",
                     icon: "success",
                     button: "Close",
                   });
                    })
                    .catch(()=>{
                   swal({
                     title: "Payment Method Update",
                     text: 'Failed',
                     icon: "error",
                     button: "Close",
                   });
                    })
                }
            });
            */

     const cardHolderName = document.getElementById('card-holder-name');
     const cardButton = document.getElementById('card-button');
     
     cardButton.addEventListener('click', async (e) => {
         const { paymentMethod, error } = await stripe.createPaymentMethod(
             'card', cardElement, {
                 billing_details: { name: cardHolderName.value }
             }
         );
     
         if (error) {
               // Display "error.message" to the user...
              console.log(error);
              swal({
                title: "Card Verification",
                text: error.message,
                icon: "error",
                button: "Close",
              });
         } else {
             // The card has been verified successfully...
             console.log(paymentMethod);

             swal({
               title: "Card Verification",
               text: paymentMethod.status,
               icon: "success",
               button: "Close",
             });

                    axios.post('/stripe/checkout', paymentMethod)
                    .then((response)=>{
                      console.log(response);
                    swal({
                     title: "Order Payment Status",
                     text: response.data.status,
                     icon: "success",
                     button: "Close",
                   });
                    window.location.replace('/dashboard');
                    })
                    .catch((error)=>{
                      console.log(error);
                   swal({
                     title: "Order Payment Status",
                     text: 'Failed',
                     icon: "error",
                     button: "Close",
                   });
                    });
         }
     });

    }
}
</script>