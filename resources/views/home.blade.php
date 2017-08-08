@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="column">
        <div class="people-you-might-know">
          <div class="add-people-header">
            <h6 class="header-title">
              Plan de Estudios: Trader de Futuros Sobre Índices
            </h6>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="{{ url('/cursos/1') }}">
                  Curso de Introducción al Mercado Financiero
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                 Conceptos y bases de la composición del mercado financiero internacional.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="{{ url('/cursos/2') }}">
                  Curso de Fundamentos del Trading
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Teoría de trading, tipos de gráficos, tipos de órdenes y estructura de los trades.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="{{ url('/cursos/3') }}">
                  Curso de Análisis Técnico Básico
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Movimientos básicos del mercado, impulso, patrones de reversa, herramientas básicas.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="{{ url('/cursos/4') }}">
                  Curso de Psicología y Plan del Trading
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Control de emociones, disciplina, consistencia, transición a real y gestión del riesgo.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="{{ url('/cursos/5') }}">
                  Configuración de NinjaTrader Como Plataforma
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Instalación, configuración inicial, renovación de contratos, y personalización.
                </p>
              </div>    
            </div>
          </div>
          <div class="row add-people-section">
            <div class="small-12 medium-12 columns about-people">
              <div class="about-people-author">
                <p class="author-name">
                  <a href="{{ url('/cursos/6') }}">
                  Curso Introductorio a Futuros & E-minis
                  </a>
                </p>
                <p class="author-location">
                </p>
                <p class="author-mutual">
                  Teoría de derivados financieros, futuros, contratos e-minis y normatividad.
                </p>
              </div>    
            </div>
          </div>
        </div>
      </div>     
    </div>
    </div>
</div>
@endsection
