@extends('layout')
@section('content')

            <div class="ipad-section container">
                <div class="sidebar">
                    <h5><b> Kategorie </b></h5>
                    <ul>

                        @foreach ($categories as $category )
                            <li><a href="{{route('ipad.ipad', ['category' => $category->sorting])}}" style="text-decoration:none;">{{$category->sorting}}</a></li>
                        @endforeach

                    </ul>

                </div>


                <div>
                    <h1 class="stylish-heading"><u>iPad</u></h1>
                    <div class="products text-center">

                        @foreach ($products as $product)
                        <div class="product-ipad">
                            <div class="picture">
                                <a href="{{route('welcome.show', $product->slug)}}"><img src="{{ asset('/image/Telefony/iPad/'.$product->slug.'.jpg') }}" alt=""></a>
                            </div>

                            <div class="Information">
                                <a href="{{route('welcome.show', $product->slug)}}" style="text-decoration:none;"><div class="product-name">{{$product->name }}</div></a>
                                <div class="product-price">{{$product->presentPrice() }} </div>
                                <form action="{{route('cart.store')}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{$product->id}}">
                                    <input type="hidden" name="name" value="{{$product->name}}">
                                    <input type="hidden" name="price" value="{{$product->price}}">
                                    <button type="submit" class="button3 button-white" style="text-decoration:none;">Do košíku</button>
                                </form>
                            </div>

                        </div>

                        @endforeach

                        <div class="spacer"></div>
                    </div><!-- !Products -->



                </div><!-- !Container -->
            </div>

        </div>

        <footer id="footer">
@endsection
