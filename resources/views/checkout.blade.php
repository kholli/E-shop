
@extends('layout')

@section('content')


            <div class="container">

                <h1 class="checkout-heading stylish-heading">Doprava a platba</h1>

                <div class="checkout-section">

                    <div>


                        <form id="payment-form" method="POST">
                            {{ csrf_field() }}

                            <h2>Osobní údaje</h2>



                            <div class="form-group">
                                <label>Emailová Adresa</label>
                                {{-- <input type="text" class="form-control" id="email" name="email"> --}}
                                <input type="text" class="form-control" id="email" name="email" value="{{auth()->user()->email}}" readonly>
                            </div>

                            <div class="form-group">
                                <label>Jméno a Příjmení</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>

                            <div class="form-group">
                                <label>Ulice</label>
                                <input type="text" class="form-control" id="street" name="street">
                            </div>

                            <div class="half-form">

                                <div class="form-group">
                                    <label>Město</label>
                                    <input type="text" class="form-control" id="city" name="city">
                                </div>

                                <div class="form-group">
                                    <label>Kraj</label>
                                    <input type="text" class="form-control" id="province" name="province">
                                </div>

                            </div>

                            <div class="half-form">

                                <div class="form-group">
                                    <label>Směrovací číslo</label>
                                    <input type="text" class="form-control" id="postal-code" name="postal-code">
                                </div>

                                <div class="form-group">
                                    <label>Telefonní číslo</label>
                                    <input type="text" class="form-control" id="phone" name="phone">
                                </div>

                            </div>

                            <div class="spacer"></div>

                            <h2>Platební údaje</h2>

                            <div class="form-group">


                                    <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="" placeholder="Jméno na kartě">
                                    <div id="card-element"><!--Stripe.js injects the Card Element--></div>
                                    <button id="submit-payment" class="submit-payment">
                                    <div class="spinner hidden" id="spinner"></div>
                                    <span id="button-text">Zaplatit a dokončit objednávku</span>
                                    </button>
                                    <p id="card-error" role="alert"></p>
                                    <p class="result-message hidden">
                                    Platba proběhla úspěšně
                                    <a href="" target="_blank">Úhrady</a>
                                    </p>

                            </div>

                        </form>




                    </div>

                    <div class="checkout-table-container">
                        <h2>Vaše objednávka</h2>

                        <div class="checkout-table">
                            @foreach ( Cart::content() as $item  )


                                <div class="checkout-table-row">
                                    <div class="checkout-table-row-left">
                                        <img src="{{ asset('/image/Telefony/'.$item->model->slug.'.jpg') }}" alt="item" class="checkout-table-img">
                                        <div class="checkout-item-details">
                                            <div class="checkout-table-item">{{$item->model->name }}</div>
                                            <div class="checkout-table-description">{{$item->model->details }}</div>
                                            <div class="checkout-table-price">{{$item->model->presentPrice() }}</div>
                                        </div>
                                    </div> <!-- end checkout-table -->

                                    <div class="checkout-table-row-right">
                                        <div class="checkout-table-quantity">{{$item->qty }}</div>
                                    </div>
                                </div> <!-- end checkout-table-row -->
                            @endforeach

                        </div> <!-- end checkout-table -->

                        <div class="checkout-totals">
                            <div class="checkout-totals-left">
                                Cena bez DPH <br>
                                DPH <br>
                                <span class="checkout-totals-total">Celkem s DPH</span>

                            </div>

                            <div class="checkout-totals-right">
                                {{presentPrice(Cart::subtotal())}}<br>
                                {{presentPrice(Cart::tax())}}<br>
                                <span class="checkout-totals-total">{{presentPrice(Cart::total())}}</span>

                            </div>
                        </div> <!-- end checkout-totals -->
                    </div>


                </div> <!-- checkout end -->







            </div>

        </div>

        <footer id="footer">
            @yield('extra-js')
            @endsection



@section('extra-js')
<script>
    jQuery(function() {

        var stripe = Stripe("pk_test_51IeJyqGqxTFkMeeJliezuu1AX8jPKkGMbMdMD4eUkLRkbhRGxoOx4SF5oP32KPMzUdEEp4X28r187BW1ngJMQdB9007oSWFFT4");
        var URL = $("#payment-form").attr("action");
        // The items the customer wants to buy
        var purchase = {
        items: [{ id: "xl-tshirt" }],
        _token:"{{csrf_token()}}"

        };

        // Disable the button until we have Stripe set up on the page
        document.querySelector("button").disabled = true;
        fetch("{{route('checkout.payment')}}", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json",

        },
        body: JSON.stringify(purchase)
        })
        .then(function(result) {
            return result.json();
        })
        .then(function(data) {
            var elements = stripe.elements();

            var style = {
            base: {
                color: "#32325d",
                fontFamily: 'Arial, sans-serif',
                fontSmoothing: "antialiased",
                fontSize: "16px",
                "::placeholder": {
                color: "#32325d"
                }
            },
            invalid: {
                fontFamily: 'Arial, sans-serif',
                color: "#fa755a",
                iconColor: "#fa755a"
            }
            };

            var card = elements.create("card", {
                style: style,
                hidePostalCode: true
            });
            // Stripe injects an iframe into the DOM
            card.mount("#card-element");

            card.on("change", function (event) {
            // Disable the Pay button if there are no card details in the Element
            document.querySelector("button").disabled = event.empty;
            document.querySelector("#card-error").textContent = event.error ? event.error.message : "";
            });

            var form = document.getElementById("payment-form");
            form.addEventListener("submit", function(event) {
            event.preventDefault();

            var userName = {
            name: document.getElementById('name_on_card').value,
            email: document.getElementById('email').value,
            city: document.getElementById('city').value,
            line1: document.getElementById('street').value,
            line2: document.getElementById('province').value,
            postal_code: document.getElementById('postal-code').value,
            phone: document.getElementById('phone').value,


            }


            // Complete payment when the submit button is clicked
            payWithCard(stripe, card, userName, data.clientSecret);


            });
        });

        // Calls stripe.confirmCardPayment
        // If the card requires authentication Stripe shows a pop-up modal to
        // prompt the user to enter authentication details without leaving your page.
        var payWithCard = function(stripe, card, userName, clientSecret) {
        loading(true);
        stripe
            .confirmCardPayment(clientSecret, {

            payment_method: {
                card: card,
                billing_details: {
                    name: document.getElementById('name_on_card').value,
                    email: document.getElementById('email').value,
                    address:{
                        city: document.getElementById('city').value,
                        state: document.getElementById('province').value,
                        line1: document.getElementById('street').value,
                        line2: document.getElementById('postal-code').value
                    },
                    phone: document.getElementById('phone').value
                }
            }



            })

            .then(function(result) {
            if (result.error) {
                // Show error to your customer
                showError(result.error.message);
            } else {
                // The payment succeeded!
                orderComplete(result.paymentIntent.id);

            }

            });
        };

        /* ------- UI helpers ------- */

        // Shows a success message when the payment is complete
        var orderComplete = function(paymentIntentId) {
        loading(false);
        document
            .querySelector(".result-message a")
            .setAttribute(
            "href",
            "https://dashboard.stripe.com/test/payments/" + paymentIntentId,
            location.href = "{{route('thankyou.order')}}"


            );
        document.querySelector(".result-message").classList.remove("hidden");
        document.querySelector("button").disabled = true;

        };

        // Show the customer the error from Stripe if their card fails to charge
        var showError = function(errorMsgText) {
        loading(false);
        var errorMsg = document.querySelector("#card-error");
        errorMsg.textContent = errorMsgText;
        setTimeout(function() {
            errorMsg.textContent = "";
        }, 4000);
        };

        // Show a spinner on payment submission
        var loading = function(isLoading) {
        if (isLoading) {
            // Disable the button and show a spinner
            document.querySelector("button").disabled = true;
            document.querySelector("#spinner").classList.remove("hidden");
            document.querySelector("#button-text").classList.add("hidden");
        } else {
            document.querySelector("button").disabled = false;
            document.querySelector("#spinner").classList.add("hidden");
            document.querySelector("#button-text").classList.remove("hidden");
        }
        };



        })

        // A reference to Stripe.js initialized with a fake API key.
        // Sign in to see examples pre-filled with your key.


</script>
@endsection
