<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	    <script src="https://kit.fontawesome.com/8bee8e4878.js" crossorigin="anonymous"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <script type="text/javascript" src="https://js.stripe.com/v3/"></script>
        <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script type="text/javascript" src="https://js.stripe.com/v2/"></script>





		<!-- Owl-carousel -->

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />


		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css" integrity="sha512-6qkvBbDyl5TDJtNJiC8foyEVuB6gxMBkrKy67XpqnIDxyvLLPJzmTjAj1dRJfNdmXWqD10VbJoeN4pOQqDwvRA==" crossorigin="anonymous" />

	<!-- Custom CSS file -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

    </head>

    <body class="antialiased" >

        <div id="page-container">
            <div id="content-wrap">

                <header>
                                <!-- Header nav bar -->
                    <div class="header-nav container" > <!-- style="background-color: #31627E;" -->
                                    <div class="logo">
                                        <a href="{{route('welcome.home')}}"> <img src="{{ URL::to('/') }}/image/Logo_Final_1_Interlace.png" alt="Logo" /></a>
                                    </div> <!-- color of navbar #31627E -->

                                    <div id="box-search" class="box-search">

                                            <form class="d-flex">
                                                <input class="searching" type="search" placeholder="Hledat" aria-label="Hledat">
                                                <button class="button2" type="submit">Hledat</button>
                                            </form>
                                    </div>

                                    <nav class="top-nav">
                                        <ul>
                                            @guest

                                            <a href="{{route('register')}}" class="button2 button-blue" >Registrace</a>
                                            <a href="{{route('login')}}" class="button2 button-blue" >Přihlášení</a>
                                            @else
                                                <a href="{{ route('logout') }}" class="button2 button-blue"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Odhlásit se') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            @endguest
                                            <a href="{{route('cart.shop')}}" class="button2 button-blue" ><i class="fas fa-shopping-cart"></i> Košík <span class="cart-count"> ({{Cart::instance('default')->count()}})</span></a>

                                        </ul>
                                    </nav>
                    </div>
                    <!-- ! Header nav bar -->

                                <!-- main nav bar -->

                                <!-- !main nav bar -->
                </header>

                <div class="main-nav">
                    <div class="nav-button container">
                                    <div class="hero-button container">
                                        <a href="{{route('welcome.home')}}" class="button1 button-blue" style="text-decoration:none;">Domů</a>
                                        <a href="{{route('iphone.iphone')}}" class="button1 button-blue" style="text-decoration:none;">iPhone</a>
                                        <a href="{{route('mac.mac')}}" class="button1 button-blue" style="text-decoration:none;">Macbook</a>
                                        <a href="{{route('watch.watch')}}" class="button1 button-blue" style="text-decoration:none;">Watch</a>
                                        <a href="{{route('ipad.ipad')}}" class="button1 button-blue" style="text-decoration:none;">iPad</a>

                                    </div>

                                    <div class="hero-button2 container">
                                        <a href="{{route('service.service')}}" class="button1 button-blue" style="text-decoration:none;">Servis</a>
                                        <a href="{{route('info.onas')}}" class="button1 button-blue" style="text-decoration:none;">O nás</a>
                                    </div>
                    </div>
                </div>


                @yield('content')



                @yield('extra-js')
                <div class="footer-content container">

                    <div class="services">&copy; Michal Kolář
                        <ul>
                            <li><a href="#"style="text-decoration:none;">xkolar64</a></li>
                            <li><a href="#"style="text-decoration:none;">187436</a></li>
                        </ul>
                    </div>

                    <div class="about-us">O Společnosti
                        <ul>
                            <li><a href="#"style="text-decoration:none;">Kontakty</a></li>
                            <li><a href="#"style="text-decoration:none;">Prodejna</a></li>
                            <li><a href="#"style="text-decoration:none;">O nás</a></li>
                        </ul>
                    </div>

                    <div class="services">Služby
                        <ul>
                            <li><a href="#"style="text-decoration:none;">Autorizovaný servis</a></li>
                            <li><a href="#"style="text-decoration:none;">Doprava</a></li>
                            <li><a href="#"style="text-decoration:none;">Možnosti platby</a></li>
                            <li><a href="#"style="text-decoration:none;">Záruka</a></li>
                        </ul>
                    </div>



                    <div class="services">Provozní doba
                        <ul>
                            <li><a href="#"style="text-decoration:none;">Po-Pá: 8:00-18:00</a></li>
                            <li><a href="#"style="text-decoration:none;">So-Ne: Zavřeno</a></li>
                        </ul>
                    </div>



                    <div class="follow-us">Sledujte nás
                        <ul>
                            <li><a href="#"style="text-decoration:none;"><i class="fa fa-globe"></i></a></li>
                            <li><a href="#"style="text-decoration:none;"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#"style="text-decoration:none;"><i class="fa fa-github"></i></a></li>
                            <li><a href="#"style="text-decoration:none;"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>


                </div> <!-- !footer-content -->





            </footer>





             <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
             <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

             <!-- Owl Carousel Javascript -->
             <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>

             <!-- Isotope Jquery (filters)-->
             <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>


        </div>
    </body>


</html>
