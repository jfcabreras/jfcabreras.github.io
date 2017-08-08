<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<title>CABS Capital | Inicio</title>
		<link rel="stylesheet" href="{{ asset('css/foundation.css')}}">
		<link rel="stylesheet" href="{{ asset('css/app2.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		

        <!-- Styles -->
    </head>
	
	<nav class="top-bar topbar-responsive">
      <div class="top-bar-title">
        <span data-responsive-toggle="topbar-responsive" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle></button>
        </span>
        <a class="topbar-responsive-logo" href="{{ url('/') }}"><strong>CABS CAPITAL</strong></a>
      </div>
      <div id="topbar-responsive" class="topbar-responsive-links">
        <div class="top-bar-right">
          @if (Route::has('login'))
		  <ul class="menu simple vertical medium-horizontal">  
            <li><a href="{{ url('/entrenamiento') }}">Entrenamiento</a></li>
            <li><a href="{{ url('/faqs') }}">Preguntas Frecuentes</a></li>
            <li>
              <a href="{{ url('/contacto') }}"><button type="button" class="button hollow topbar-responsive-button">Contacto</button></a>
            </li>
			@if (Route::has('login'))
			<li><a href="{{ url('/login') }}">Miembros</a></li>
		      @else
            <li><a href="{{ url('/home') }}">Home</a></li>
			@endif
          </ul>
		  @endif
        </div>
      </div>
    </nav>
    <body>
            <div class="content">
				<div class="hero-section">
				  <div class="hero-section-text">
					<br />
					<h1>Sé Un Trader Financiado</h1>
					<h3>Prueba que eres consistente y podrás gestionar una cuenta financiada por nosotros.</h3>
					  <p>Temporalmente el programa de seguimiento sólo está disponible para nuestros aprendices.</p>
					  <p>Si ya sabes trading y quieres gestionar el dinero de un fondo de capital, próximamente abriremos este programa para ti.</p>
					  <p align="center"><a href="entrenamiento') }}" class="success button">Empieza</a></p>
				  </div>
				</div>

				<section class="marketing-site-three-up">
				  <h2 class="marketing-site-three-up-headline">¿Cómo Ser Patrocinado?</h2>
				  <div class="row medium-unstack">
					<div class="columns">
					  <i class="fa fa-money" aria-hidden="true"></i>
					  <h4 class="marketing-site-three-up-title">Genera Utilidades</h4>
					  <p class="marketing-site-three-up-desc">Muestranos tu capacidad de generar utilidades superiores al costo de operación estimado de la cuenta.</p>
					</div>
					<div class="columns">
					  <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
					  <h4 class="marketing-site-three-up-title">Maneja el Riesgo</h4>
					  <p class="marketing-site-three-up-desc">Muestranos que respetas los límites de operación establecidos para administrar nuestras cuentas.</p>
					</div>
					<div class="columns">
					  <i class="fa fa-check-square-o" aria-hidden="true"></i>
					  <h4 class="marketing-site-three-up-title">Gestiona Una Cuenta</h4>
					  <p class="marketing-site-three-up-desc">Podrás gestionar nuestro capital conservando las utilidades pactadas de acuerdo a tus resultados.</p>
					</div>
				  </div>
				</section>

				<div class="row">
				  <div class="large-12 columns">
					<h3 align="center">Genera Ingresos Por:</h3>
					<div class="button-group-option" data-grouptype="&nbsp;Y&nbsp;">
					  <a href="#" class="button success radius">Tu Trading</a>
					  <a href="#" class="button primary radius">Tus Referidos</a>
					</div>
				  </div>
				</div>
				
				<br />
				<br />

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
				<script src="{{ asset('js/app.js')}}"></script>
            </div>
        </div>
    </body>
</html>
