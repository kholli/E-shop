

@extends('layout')
@section('title', $product->slug)
@section('content')

            </div>


            <div class="product-section container">
                <div class="product-section-image">
                    <img src="{{ asset('/image/Telefony/'.$product->slug.'.jpg') }}" alt="product">
                </div>

                <div class="product-section-description">
                    <h1 class="product-section-title">{{$product->name }}</h1>
                    <div class="product-section-parameters">{{$product->details }}</div>
                    <div class="product-section-price">{{$product->presentPrice() }}</div>

                    <p>
                        {{$product->description }}
                    </p>


                   <!-- <a href="#" class="buttonX" style="text-decoration: none;">Do košíku</a> -->
                    <form action="{{route('cart.store')}}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="hidden" name="name" value="{{$product->name}}">
                        <input type="hidden" name="price" value="{{$product->price}}">
                        <button type="submit" class="buttonX buttonplain">Do košíku</button>
                    </form>

                </div>
            </div>

            <div class="highlight container">
                <h3>Mohlo by se vám líbit...</h3>
            </div>


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
@endsection
