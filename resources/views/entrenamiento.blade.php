@extends('layouts.app')

@section('content')
<div class="container">

    <div class="marketing-site-hero">
      <div class="marketing-site-hero-content">
        <h1>Aprende Desde Cero</h1>
        <p class="subheader">Contamos con un programa virtual de entrenamiento para quienes quieren aprender trading.</p>
        <p class="subheader">Además, entrarán a nuestro programa de seguimiento para poder gestionar una cuenta financiada sin ningún costo adicional.</p>
        <br />
        <p class="subheader"><strong>Recuerda que buscamos a nuestros mejores aprendices para que gestionen nuestro capital y además, obtendrás ingresos sobre tus traders referidos.</strong></p>
        <br />
        <p class="subheader">Si quieres ingresar a nuestro programa,
          <a href="contacto.html" class="round button">Contáctanos</a>
        .</p>
      </div>
    </div>

    <br />

    <section class="product-feature-section">
      <div class="product-feature-section-outer">
        <!--
        <h3 class="product-feature-section-headline">Aprende</h3>
        -->
        <div class="product-feature-section-inner">

          <div class="product-feature-section-feature top-left">
            <i class="fa fa-book" aria-hidden="true"></i>
            <div>
              <p class="feature-title"><strong>Introducción al Mercado Financiero</strong></p>
              <p class="feature-desc">Acá verás la composición de los mercados financieros, conceptos básicos, entidades que lo componen, el rol de los traders y otros temas.</p>
            </div>
          </div>

          <div class="product-feature-section-feature top-right">
            <i class="fa fa-wrench" aria-hidden="true"></i>
            <div>
              <p class="feature-title"><strong>Herramientas de Trading</strong></p>
              <p class="feature-desc">Te explicaremos lo necesario y algo más sobre la configuración de la plataforma, indicadores y otro tipo de herramientas que te puedan ser útiles para tu actividad como trader.</p>
            </div>
          </div>

          <div class="product-feature-section-feature bottom-left">
            <i class="fa fa-line-chart" aria-hidden="true"></i>
            <div>
              <p class="feature-title"><strong>DayTrading Básico con Futuros</strong></p>
              <p class="feature-desc">Aprenderás lo que necesitas saber sobre el análisis técnico y fundamental junto con el uso de las herramientas de trading para tomar tus decisiones.</p>
            </div>
          </div>

          <div class="product-feature-section-feature bottom-right">
            <i class="fa fa-coffee" aria-hidden="true"></i>
            <div>
              <p class="feature-title"><strong>Psicología del Trading</strong></p>
              <p class="feature-desc">Aunque es el módulo más corto, tal vez es el más importante. Te explicaremos como lograr un equilibrio emocional que te permita operar de acuerdo a tu estrategia y reduciendo tu margen de tomar decisiones sin fundamento en el mercado.</p>
            </div>
          </div>

        </div>
      </div>
    </section>
</div>
@endsection