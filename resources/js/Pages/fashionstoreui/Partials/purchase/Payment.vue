<template>
      <Header />
      <div class="container">
        <div class="row">
          <div class="col-md-3"></div>
          <div class="col-md-6">
      <!-- Card -->
      <div class="card mb-3">
        <div class="card-body">

          <h5 class="mb-3">Order Summary</h5>

          <ul class="list-group list-group-flush">
            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
              <div>
                <span v-if="paymentMethod == 'mpesa'">
                    <strong>Pay Via </strong><img src="/Images/mpesa.png" alt="Lipa Na Mpesa">
                </span>
                <span v-if="paymentMethod == 'stripe'">
                    <strong>Pay Via </strong><i class="fab fa-stripe fa-3x" style="color: purple;"></i>
                </span>
                <strong>The total amount of</strong>
                <strong>
                  <p class="mb-0">(including VAT)</p>
                </strong>
              </div>
              <span><strong>{{Items.totalPrice}}</strong></span>
            </li>
          </ul>
        </div>
        <div class="card-footer">
		 <div class="row m-0 mt-4 justify-content-between">
		 	<div class="col-md-6">
		 		<a href="/cart" class="deposit-confirm-back-link">
		 			<button class="btn btn-grad btn-primary deposit-confirm-back-btn mt-2"><strong>Back</strong></button>
		 		</a>
		 	</div>
		 	<div class="col-md-6" v-if="paymentMethod == 'mpesa'">
				
		 		<form id="mpesa-express-form" action="" style="display: block;" method="POST" accept-charset="UTF-8"  novalidate="novalidate" enctype="multipart/form-data">
		 			<input value="{{csrf_token()}}" name="_token" id="token" type="hidden">
		 			<input v-model="Items.totalPrice" name="amount" id="Amount" hidden>
		 			<input v-model="Phone" name="Phone" id="Phone" hidden>
		 			<button type="submit" class="btn btn-success btn-grad mt-2" id="deposit-money-confirm">
		 				 <span >Confirm</span>
		 			</button>
		 		</form>
		 	</div>
		 	<div class="col-md-6" v-if="paymentMethod == 'stripe'">
        <div class="card">
            <div class="card-header ">Credit or Debit Card</div>
            <div class="card-body ">
             <div class="form-group">
               <label for="card-holder-name">Card Holder Name</label>
               <input type="text" name="card-holder-name" id="card-holder-name" class="form-control">
             </div>
             <div class="form-group">
               <div class="card form-control" id="card-element" style='height: 2.4em; padding-top: .7em;'>
               <!-- a Stripe Element will be inserted here. -->
               </div>
               <!-- Used to display form errors -->
               <div id="card-errors"></div>
             </div>
            </div>
            <div class="card-footer">
             <button @click="processStripePayment()" id="card-button" class="btn btn-primary" :data-secret="intent.client_secret">
                 Update Payment Method
             </button>
            </div>
          </div>
		 	</div>
		 </div>
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