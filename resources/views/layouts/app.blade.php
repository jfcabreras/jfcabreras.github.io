<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

		<link rel="stylesheet" href="{{ asset('css/foundation.css')}}">
		<link rel="stylesheet" href="{{ asset('css/app2.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
	
</head>
<body>

    <div id="app">
	
		<nav class="top-bar topbar-responsive">
      <div class="top-bar-title">
        <span data-responsive-toggle="topbar-responsive" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle></button>
        </span>
        <a class="topbar-responsive-logo" href="{{ url('/') }}"><strong>CABS CAPITAL</strong></a>
      </div>
      <div id="topbar-responsive" class="topbar-responsive-links">
        <div class="top-bar-right">
		  <ul class="menu simple vertical medium-horizontal">  
           @if (Auth::guest())
						<li><a href="{{ url('/entrenamiento') }}">Entrenamiento</a></li>
						<li><a href="{{ url('/faqs') }}">Preguntas Frecuentes</a></li>
						<li>
						  <a href="{{ url('/contacto') }}">Contacto</a>
						</li>                           
					   <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
						
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </div>
								</div>
                            </li>
                        @endif
          </ul>
        </div>
      </div>
    </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
	
	<footer>
	  <div class="wrap row small-up-1 medium-up-3">
		<div class="column"></div>
		<div class="column">
		  <p align="center"><small>© 2017 – CABS CAPITAL S.A.S.<br />Todos los derechos reservados.<br />No brindamos consejo ni asesoría de inversión.</small></p>
		</div>
		<div class="column"></div>
	  </div>
	</footer>
	
	<script src="{{ asset('js/jquery.js')}}"></script>
	<script src="{{ asset('js/what-input.js')}}"></script>
	<script src="{{ asset('js/foundation.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
	
</body>
</html>
