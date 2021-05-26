@extends('layout')

@section('content')



                    <div class="device-section">
                                <div class="container">
                                    <h1 class="text-center"><u>Nabízené produkty</u></h1>


                                    <!--Products -->
                                    <div class="products text-center">
                                        @foreach ($products as $product)
                                            <div class="product">
                                                <div class="picture">
                                                    <a href="{{route('welcome.show', $product->slug)}}"><img src="{{ asset('/image/Telefony/'.$product->slug.'.jpg') }}" alt=""></a>
                                                </div>

                                                <div class="Information">
                                                    <a href="{{route('welcome.show', $product->slug)}}" style="text-decoration:none;"><div class="product-name">{{$product->name }}</div></a>
                                                    <div class="product-price">{{$product->presentPrice()}}</div>
                                                </div>
                                            </div>
                                        @endforeach




                                    </div><!-- !Products -->



                                </div><!-- !Container -->


                    </div><!-- !Device section -->
                </div>

                <footer id="footer">
@endsection
