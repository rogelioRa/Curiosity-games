@extends('admin_base')

@section('mi_css')
  {{ HTML::style('/packages/css/curiosity/juegos/juego_layer.css') }}
  @yield('juego_css')
@stop
@section('titulo_contenido')
  <label id="juego-titulo"></label>
@stop
@section('panel_opcion')
@yield('panel_opciones')
   <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="modal fade" id="modalPrueba" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" data-backdrop="static" data-keyboard="false">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header" id="modal-header-juego">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="row">
                  <div class="col-md-4 col-md-offset-4">
                    <img src="/packages/images/cups/win1.png" alt="" class="img-responsive">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 text-center" id="modal-puntos">
                    <center><h1><b id="modal-puntos-head"></b></h1></center>
                  </div>
                </div>
              </div>
              <div class="modal-body" id="modal-body-juego">
                <div class="row">
                  <div class="col-md-6">
                    <h4 id="modal-puntos-max"></h4>
                  </div>
                </div>
              </div>
              <div class="modal-footer" id="modal-footer-juego">
                <div class="row">
                  <div class="col-md-12">
                    <center>
                      <div class="actividadBotones">
                        <button type="button" class="btn btn-default btnVideo">
                          <span class="fa fa-youtube-play"></span>&nbsp;
                          <b>Ver explicación en video</b>
                        </button>
                      </div>
                    </center>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>

  <div class="modal fade" id="modalVideo" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="">Video de Estudio</h4>
        </div>
        <div class="modal-body">
          <video src="" controls id="videoApoyo" class="img-responsive" preload></video>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid cont-game">
      <div class="row">
          <div class="col-xs-12">
              <div class="zona-juego">
                <div id="zona-obj">
                  <div class='row'>
                    <div class='col-md-5 text-center' id='max-pts'>
                      <center>
                        <img src="" class="img-responsive" width="60%" id="imgNivel"/>
                      </center>
                      <div class="row">
                        <div class="col-md-6 cal-titulo">
                          <h3>Máxima Puntuación</h3>
                          <h1><b id="num-max-pts"></b></h1>
                        </div>
                        <div class="col-md-6 cal-titulo">
                          <h3>Eficiencia de Juego</h3>
                          <h1><b id="num-max-efic"></b></h1>
                        </div>
                      </div>
                    </div>
                    <div class='col-md-7' id='objetivo'>
                      <div class="text-right boton-comezar">
                        <button type="button" class="btn btn-info btn-lg" id="btn-comenzar">
                          Comenzar Actividad
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                @yield('juego')
             <!-- Modal para el menu de pausa -->
              <div id="zona-play" hidden="hidden">
                <div class="row">
                  <div class="col-md-4"></div>
                  <div class="col-md-4">
                     <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" id="menu-juego" data-backdrop="static" data-keyboard="false">
                      <div class="modal-dialog modal-sm">
                      <div class="modal-content col-md-12 col-xs-12" id="modal-conten-pausa">
                        <div class="col-md-12 col-xs-12" id="content"><br>
                          <center><h3 class="" id="titulo">Menu de Juego</h3> <hr></center>
                       
                          <div class="col-md-12">
                            <center><h4 role="button" class="btn form-control modal-title myModalLabel" data-dismiss="modal" id="continuar"><i class="icon fa fa-play"></i> Continuar</h4></center>
                            <center><h4 role="button" class="btn form-control modal-title myModalLabel" data-dismiss="modal" id="reiniciar"><i class="icon fa fa-refresh"></i> Reiniciar juego</h4></center>
                            <center><h4 role="button" class="btn form-control modal-title myModalLabel" id="ayuda"><i class="icon fa fa-question-circle"></i> Ayuda</h4></center>
                            <center><h4 role="button" class="btn form-control modal-title myModalLabel" data-dismiss="modal" id="salir_juego"><i class="icon fa fa-sign-out"></i> Salir del juego</h4></center>
                            
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4"></div>
                </div>
                <canvas id="mycanvas" style="" width="130px" height="130px"></canvas>
                <div class="row">
                  <div class="col-md-10 text-left">
                      <button id="pausa" class="btn btn-warning" data-toggle="modal" data-target="#menu-juego"><i class="fa fa-pause"></i></button>
                  </div>
                  <div class="col-md-2 text-right">
                    <div class="temp">
                      <label id="temp-static">1:00</label>
                      <label id="temp-count"></label>
                    </div>
                  </div>
                </div>
                @yield('game_init')
                <div id="game">
                  @yield('game')
                </div>
                @yield('game_end')
                <div class="row">
                  <div class="col-xs-12">
                    <div class="zona-puntaje">
                      <div class="row">
                        <div class="col-xs-6">
                          <h3>
                            <span class="fa fa-trophy"></span>
                            <b id="countPuntaje"></b>
                            <b>Puntos</b>
                          </h3>
                        </div>
                        <div class="col-xs-2">
                          <div id="combo"></div>
                        </div>
                        <div class="col-xs-4 text-right">
                          <div class="verific"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>

  <!-- SECCION FINAL DONDE SE COLOCA LA PUNTUACION POR ESTRELLAS Y LOS BOTONES DE DESCARGA Y VIDEO -->
  <div class="row">
    <div class="col-md-4">
      <h3><b>Califica la Actividad</b></h3>
      <span class="fa fa-star-o fa-2x"></span>
      <span class="fa fa-star-o fa-2x"></span>
      <span class="fa fa-star-o fa-2x"></span>
      <span class="fa fa-star-o fa-2x"></span>
      <span class="fa fa-star-o fa-2x"></span>
    </div>
    <div class="col-md-8 text-right">
      <div class="actividadBotones">
        <a target="_blank" class="btn btn-default btnDownloadPDF" disabled>
          <span class="fa fa-download"></span>&nbsp;
          <b>Guía de estudio PDF</b>
        </a>
        <button type="button" class="btn btn-default btnVideo" disabled>
          <span class="fa fa-youtube-play"></span>&nbsp;
          <b>Ver explicación en video</b>
        </button>
      </div>
    </div>
  </div>
</div>
@stop

@section('mi_js')

  {{ HTML::script('/packages/jquery-ui-1.11.4.custom/jquery-ui.min.js') }}
  {{ HTML::script('/packages/js/curiosity/juegos/juegos_layer.js') }}
   <script type="text/javascript">
      $(document).ready(function(){
          
           
          
          

           //segundo camino, en naranja
      });
  </script>
  @yield('juego_js')
@stop
