

@extends('layout')
@section('content')




            <div class="servis container"><h1><u>Servisované položky</u></h1>
            </div>

    @if(auth()->user()){
            <div class="search container">

                <div class="search-select">

                    <div class="search-listbar">



                    {{--{{auth()->user()->email == $opravy->email}}--}}

                                <select id="cars" name="cars" value="">

                                    @foreach ($opravies as $opravy)
                                        @if(auth()->user()->email == $opravy->email)



                                            <option value="{{$opravy->id}}" {{auth()->user()->email == $opravy->email ? 'selected': ''}}>{{$opravy->id}}</option>
                                        @endif
                                @endforeach
                                </select>


                                {{-- < id="cars" name="cars" value="">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="fiat">Fiat</option>
                                <option value="audi">Audi</option>
                            </>--}}
                            @foreach ($opravies as $opravy)
                                        @if(auth()->user()->email == $opravy->email)
                                <button type="button5" class="button5 btn-primary" data-toggle="modal" data-target="#exampleModal2" value="{{$opravy->id}}" {{auth()->user()->email == $opravy->email ? 'selected': ''}}>
                                    Vybrat
                                </button>
                            @endif
                                @endforeach
                            </div>

                </div>

        @foreach ($opravies as $opravy)
            @if(auth()->user()->email == $opravy->email)
                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" value="{{$opravy->id}}" {{auth()->user()->email == $opravy->email ? 'selected': ''}}>
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel" >Nová položka servisu: {{$opravy->id}}</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                    <form  id="payment-form" method="POST">
                        {{ csrf_field() }}

                        <div class="modal-body">
                            <div>
                                Uživatel:<br>
                                <input class="service-user" id="email" name="email" value="{{auth()->user()->email}}" readonly>

                            </div>
                            <div>
                                Název položky: <br>
                                <input class="service-item" value="{{$opravy->device}}" readonly>
                            </div>
                            <div>
                                Závada: <br>
                                <input class="service-damage" value="{{$opravy->defect}}" readonly>
                            </div>
                            <div>
                                Stav:<br>
                                <input class="state" id="state" name="state" value="{{$opravy->state}}" readonly>

                                    {{--<option value="accepted">Přijato</option>
                                    <option value="payment">Čeká na zaplacení</option>
                                    <option value="payed">Zaplaceno</option>
                                    <option value="done">Vyřízeno</option>--}}

                            </div>
                        </div>

                        <br>
                        <h5 class="modal-title2">Souhlasím s opravou:</h5>
                        <div class="service-agreement">
                                <div>
                                    <button class="btn" id="YesButton" type="button" >Ano</button>

                                </div>
                                <div>
                                    <button class="btn" id="NoButton" type="button">Ne</button>

                                </div>
                        </div>

                        <div class="modal-body">
                            <div>
                                Cena v Kč (Ano): <br>
                                <input class="service-price-yes" id="Ano" name="Ano" value="{{$opravy->priceYes}}" readonly>
                            </div>
                            <div>
                                Cena v Kč (Ne): <br>
                                <input class="service-price-no" id="Ne" name="Ne" value="{{$opravy->priceNo}}" readonly>
                            </div>

                        </div>
                        <br>
                        <div class="form-group d-none" id="Stripik">
                            <!-- Display a payment form -->

                                <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="" placeholder="Jméno na kartě">
                                <div id="card-element"><!--Stripe.js injects the Card Element--></div>
                                <button id="submit-payment" class="submit-payment">
                                <div class="spinner hidden" id="spinner"></div>
                                <span id="button-text">Zaplatit a dokončit servis</span>
                                </button>
                                <p id="card-error" role="alert"></p>
                                <p class="result-message hidden">
                                Platba proběhla úspěšně
                                <a href="" target="_blank">Úhrady</a>
                                </p>

                        </div>
                    </form>

                        <br>


                      </div>
                    </div>
                  </div>

             @endif
             @endforeach




            </div>

        }@else

        @endif

            <div class="space container">
               <div class="what-the-hell">

               </div>
            </div>


            <div class="price-table container">
                <h1><u>Ceník</u></h1>
                <table id="prices" class="prices">
                    <tr>
                        <th>Typ zařízení</th>
                        <th>Display</th>
                        <th>Baterie</th>
                        <th>Kamera</th>
                        <th>Reproduktor</th>
                        <th>Zadní kryt</th>
                    </tr>
                    <tr>
                        <td>iPhone 6s</td>
                        <td>2990Kč</td>
                        <td>1990Kč</td>
                        <td>990Kč</td>
                        <td>690Kč</td>
                        <td>890Kč</td>
                    </tr>
                    <tr>
                        <td>iPhone 7</td>
                        <td>3990Kč</td>
                        <td>1990Kč</td>
                        <td>1190Kč</td>
                        <td>690Kč</td>
                        <td>990Kč</td>
                    </tr>
                    <tr>
                        <td>iPhone 8</td>
                        <td>4990Kč</td>
                        <td>2090Kč</td>
                        <td>1990Kč</td>
                        <td>1190Kč</td>
                        <td>1990Kč</td>
                    </tr>
                    <tr>
                        <td>iPhone X</td>
                        <td>5990Kč</td>
                        <td>3000Kč</td>
                        <td>1990Kč</td>
                        <td>1690Kč</td>
                        <td>1890Kč</td>
                    </tr>
                    <tr>
                        <td>iPhone Xs</td>
                        <td>6990Kč</td>
                        <td>3990Kč</td>
                        <td>1990Kč</td>
                        <td>1690Kč</td>
                        <td>1890Kč</td>
                    </tr>
                    <tr>
                        <td>iPhone XR</td>
                        <td>6990Kč</td>
                        <td>3990Kč</td>
                        <td>1990Kč</td>
                        <td>1690Kč</td>
                        <td>1890Kč</td>
                    </tr>
                    <tr>
                        <td>iPhone 11</td>
                        <td>7990Kč</td>
                        <td>3990Kč</td>
                        <td>1990Kč</td>
                        <td>1690Kč</td>
                        <td>1890Kč</td>
                    </tr>
                    <tr>
                        <td>iPhone 11 Pro</td>
                        <td>8990Kč</td>
                        <td>3990Kč</td>
                        <td>1990Kč</td>
                        <td>1690Kč</td>
                        <td>1890Kč</td>
                    </tr>
                    <tr>
                        <td>Apple watch</td>
                        <td>5900Kč</td>
                        <td>2990Kč</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Macbook Air 13'</td>
                        <td>10000Kč</td>
                        <td>4490Kč</td>
                        <td>-</td>
                        <td>4990Kč</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Macbook Air 15'</td>
                        <td>11000Kč</td>
                        <td>5500Kč</td>
                        <td>-</td>
                        <td>5500Kč</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Macbook PRO 13'</td>
                        <td>12000Kč</td>
                        <td>6000Kč</td>
                        <td>-</td>
                        <td>5500Kč</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Macbook PRO 15'</td>
                        <td>13000Kč</td>
                        <td>6500Kč</td>
                        <td>-</td>
                        <td>6000Kč</td>
                        <td>-</td>
                    </tr>
                </table>
                <br>
                <table id="prices">
                    <tr>
                        <th>Popis</th>
                        <th>Cena</th>
                    </tr>
                    <tr>
                        <td>Diagnostika</td>
                        <td>600Kč</td>

                    </tr>
                    <tr>
                        <td>Práce</td>
                        <td>800Kč</td>

                    </tr>
                    <tr>
                        <td>DPH 21%</td>
                        <td>Již započteno</td>

                    </tr>
                    <tr>
                        <td>Doprava</td>
                        <td>Zdarma</td>

                    </tr>
                </table>
                <br>
                <h1><u>Jak postupovat?</u></h1>
                <table id="prices">
                    <tr>
                        <th>Kroky</th>
                        <th>Popis</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Kontaktujete nás prostřednictvím našeho emailu ohledně Vašeho problému.</td>

                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Pečlivě zabalte zařízení do krabice a odešlete na naši adresu jakoukoliv dopravní společností.</td>

                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Nezapomeňte do balení vložit dokument s Vašimi údaji (login na našich stránkách) a my už se o vše postaráme.</td>

                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Jakmile k nám zařízení dorazí, zaregistrujeme jej do systému a pro vás bude viditelné po přihlášení na našich stránkách v záložce "Servis".</td>

                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Po zvolení svého zařízení uvidíte v jakém procesu se nachází a následně schválení/zamítnutí platby.</td>

                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Po obdržení platby, zařízení opravíme a pošleme ZDARMA zpět na vaši adresu.</td>

                    </tr>
                </table>
            </div>

        </div>

    </div>

    <footer id="footer">
        @yield('extra-js')
@endsection

@section('extra-js')
<script>
    jQuery(function() {

        $('#YesButton').click(function(){
            DoStripe(document.getElementById('Ano').value);
            $('#Stripik').removeClass('d-none');

        });

        $('#NoButton').click(function(){
            DoStripe(document.getElementById('Ne').value);
            $('#Stripik').removeClass('d-none');
        })


        function DoStripe(amount){



                var stripe = Stripe("pk_test_51IeJyqGqxTFkMeeJliezuu1AX8jPKkGMbMdMD4eUkLRkbhRGxoOx4SF5oP32KPMzUdEEp4X28r187BW1ngJMQdB9007oSWFFT4");
                var URL = $("#payment-form").attr("action");
                // The items the customer wants to buy
                var purchase = {
                amount: amount*100,
                _token:"{{csrf_token()}}"

                };

                // Disable the button until we have Stripe set up on the page
                document.querySelector("button").disabled = true;
                fetch("{{route('servis.payment')}}", {
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
            }


        })

        // A reference to Stripe.js initialized with a fake API key.
        // Sign in to see examples pre-filled with your key.


</script>
@endsection


