<html lang= "en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>test</title>
        
                <!-- Styles -->
                <link rel="stylesheet" href="{{ mix('css/app.css') }}">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
    </Header>
        <div class='row justify-content-start'>
            <div class='col-sm-3'></div>
            <div class='col-sm-6'>
                <form id="payment-form">
                    <div class="form-row">
                        <label for="card-element">
                            Credit or debit card
                        </label>
                        <input type="text" name="card-holder-name" id="card-holder-name">
                        <div class="card form-control" id="card-element" style='height: 2.4em; padding-top: .7em;'>
                        <!-- a Stripe Element will be inserted here. -->
                        </div>
                        <!-- Used to display form errors -->
                        <div id="card-errors"></div>
                    </div>
                    <button id="card-button" data-secret="{{ $intent->client_secret }}">
                        Update Payment Method
                    </button>
                </form>
            </div>
            <div class='col-sm-3'></div>
          </div>
        </Footer>
        <script src="https://js.stripe.com/v3/"></script>
        <script>
            const stripe = Stripe('stripe-public-key');
        
            const elements = stripe.elements();
            const cardElement = elements.create('card');
        
            cardElement.mount('#card-element');


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
                    alert('error');
                } else {
                    // The card has been verified successfully...
                    alert('success');
                }
            });
        </script>
    </body>
</html>