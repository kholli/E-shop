@extends('layout')

@section('content')

            </div>

            <div class="cart-section container">
                <div>
                    &nbsp;
                    @if (session()->has('success-message'))
                        <div class="alert alert-success">
                            {{ session()->get('success-message') }}
                        </div>
                    @endif

                    @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(Cart::count() >0)

                    <h2> V košíku jsou {{Cart::count()}} zařízení</h2>






                    <div class="cart-table">

                        @foreach (Cart::content() as $item )

                                <div class="cart-table-row">

                                    <div class="cart-table-row-left">
                                        <a href="{{route('welcome.show', $item->model->slug)}}"><img src="{{ asset('/image/Telefony/'.$item->model->slug.'.jpg') }}"></a>
                                        <div class="cart-item-details">
                                            <div class="cart-table-item"><a href="{{route('welcome.show', $item->model->slug)}}" style="text-decoration:none;">{{$item->model->name }}</a></div>
                                            <div class="cart-table-description">{{$item->model->details }}</div>
                                        </div>
                                    </div>

                                    <div class="cart-table-row-right">
                                        <div class="cart-table-actions">
                                            <form action="{{route('cart.destroy', $item->rowId)}}" method="POST" class="cart-options">
                                                {{ csrf_field() }}
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="cart-options">Odebrat</button>
                                            </form>

                                        </div>

                                        <div>
                                            <select class="quantity" data-id="{{$item->rowId}}">

                                                @for($i = 1; $i < 5+1; $i++)
                                                <option {{$item->qty == $i ? 'selected' : ''}}>{{$i}}</option>
                                                @endfor

                                            </select>
                                        </div>

                                        <div class="cart-table-price">{{presentPrice($item->subtotal) }}</div>

                                    </div>
                                </div> <!-- end cart-table-row -->

                        @endforeach

                    </div> <!-- end cart-table -->


                    <div class="cart-totals">
                        <div class="cart-totals-left">
                            Doprava zdarma
                        </div>

                        <div class="cart-totals-right">
                            <div>
                                Celkem:<br>
                                DPH(21%):<br>
                                <span class="cart-totals-total">Celkem(s DPH):</span>
                            </div>
                            <div>
                                {{presentPrice(Cart::subtotal())}}<br>
                                {{presentPrice(Cart::tax())}}<br>
                                <span class="cart-totals-total">{{presentPrice(Cart::total())}}</span>
                            </div>

                        </div>
                    </div> <!-- end cart-totals -->

                    <div class="cart-buttons">
                        <a href="{{route('welcome.home')}}" class="button4">Pokračovat v nákupu</a>
                        <a href="{{route('checkout.cart')}}" class="button4">Dokončit objednávku</a>
                    </div>

                    @else

                    <div class="empty-cart container">
                        &nbsp;
                        <h3>V košíku nebyly nalezeny žádné položky</h3>
                        <div class="spacer"></div>
                        <div class="cart-buttons">
                            <a href="{{route('welcome.home')}}" class="button4">Pokračovat v nákupu</a>

                        </div>
                    </div>

                    @endif

                </div>

            </div> <!-- end cart-section -->







            </div>


            <div class="highlight container">
                <h3>Mohlo by se vám líbit...</h3>
            </div>


            <div class="products container">

                <div class="products container">
                    @foreach ($mightAlsoLike as $product)
                            <div class="product">
                                <div class="product">
                                    <div class="picture">
                                        <a href="{{route('welcome.show', $product->slug)}}"><img src="{{ asset('/image/Telefony/'.$product->slug.'.jpg') }}" alt=""></a>
                                    </div>

                                    <div class="Information">
                                        <a href="{{route('welcome.show', $product->slug)}}" style="text-decoration:none;"><div class="product-name">{{$product->name }}</div></a>
                                        <div class="product-price">{{$product->presentPrice()}} </div>
                                    </div>
                                </div>

                            </div>
                    @endforeach

            </div>

        </div>

        <footer id="footer">

            <script src="{{ asset('js/app.js') }}"></script>

            <script>
                (function() {

                    const classname = document.querySelectorAll('.quantity')

                    Array.from(classname).forEach(function(element){
                        element.addEventListener('change', function(){

                            const id =element.getAttribute('data-id')


                            axios.patch(`cart/${id}`, {
                                quantity: this.value
                            })
                            .then(function (response) {
                                console.log(response);
                                window.location.href = '{{route('cart.shop')}}'
                            })
                            .catch(function (error) {
                                console.log(error);
                                window.location.href = '{{route('cart.shop')}}'
                            });

                        })
                    })

                    })();



            </script>



@endsection
