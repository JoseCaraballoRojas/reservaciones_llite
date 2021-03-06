@extends('materialize.template')

@section('page-title', 'Calendario de citas')

@section('styles')
<!-- FULL CALENDAR -->
    {!! HTML::style('assets/template/js/plugins/fullcalendar/css/fullcalendar.css') !!}
<!-- FULL CALENDAR NEW CONFIG -->
    {!! HTML::style('assets/template/js/plugins/fullcalendar/css/newconfig.css') !!}
@stop

@section('content')

  <div class="container">
    <div class="row">
      <div class="col s12 m12 l12">
        <h5 class="breadcrumbs-title">Citas
          <small>Calendario de citas registradas</small>
        <div class="pull-right">
        <ol class="breadcrumbs">
            <li><a href="{{ route('dashboard') }}">@lang('app.home')</a></li>
            <li class="active">Citas</li>
        </ol>
        </div>
        </h5>
      </div>
    </div>
  </div>

<div class="divider"></div>

@include('partials.messages')

<!--start container-->
<div class="container">
  <div class="row">
    <div id="full-calendar">
      <div class="col s12 m12 l12">
        <div class="row">
          <div class="col s12 m12 l12">
            <div id='calendar'></div>
          </div>
        </div>
    </div>
    </div>
  </div>
  <div class="row">
    <!-- modal 1-->
    <a href="#modalForm" class="modal-trigger" id="btn-modal" >h</a>
    <div class="modal modal-fixed-footer" id="modalForm">
        <div class="modal-content">
              <h3 class="modal-title" id="tos-label">Solicitar Cita</h3>
              <div class="divider"></div>
              <div class="col s12">
                <div class="row">
                  <div class="finput-field col s12">
                    {!! Form::label('turno', 'Turnos') !!}
                    {!! Form::select('turno', ['turno1', 'turno2'], null,
                      ['placeholder' => 'Selecione un turno...', 'required'  ]) !!}
                   </div>
                 </div>
               </div>
            </div>
            <div class="modal-footer">
              <a href="#" class=" btn red waves-effect waves-red
               modal-action modal-close" id="btn-modal-close">
                @lang('app.close')
              </a>
            </div>
    </div>

  </div>


  <div class="row">
    <!-- modal 2-->
    <a href="#modalCitas" class="modal-trigger" id="btn-modal-citas" >h</a>
    <div class="modal modal-fixed-footer" id="modalCitas">
        <div class="modal-content">
              <h3 class="modal-title" id="tos-label">Solicitar Cita</h3>
              <div class="divider"></div>
              <ul>
                <li>Cita 1</li>
                <li>Cita 2</li>
                <li>Cita 3</li>
                <li>Cita 4</li>
                <li>Cita 5</li>
                <li>Cita 6</li>
                <li>Cita 7</li>
              </ul>
            </div>
            <div class="modal-footer">
              <a href="#" class=" btn red waves-effect waves-red
               modal-action modal-close" id="btn-modal-close2">
                @lang('app.close')
              </a>
            </div>
    </div>
  </div>
</div>

@stop

@section('scripts')

<!-- ================================================
Scripts
================================================ -->
<!-- chartist -->


<!-- Calendar Script -->
    {!! HTML::script('assets/template/js/plugins/fullcalendar/lib/jquery-ui.custom.min.js') !!}
    {!! HTML::script('assets/template/js/plugins/fullcalendar/lib/moment.min.js') !!}
    {!! HTML::script('assets/template/js/plugins/fullcalendar/js/fullcalendar.js') !!}
    {!! HTML::script('assets/template/js/plugins/fullcalendar/fullcalendar-script.js') !!}
<!--Canlendar locale ES-->
    {!! HTML::script('assets/template/js/plugins/fullcalendar/lang/es.js') !!}

<!--plugins.js - Some Specific JS codes for Plugin Settings-->
    {!! HTML::script('assets/template/js/plugins.js') !!}
<!--custom-script.js - Add your own theme custom JS-->
    {!! HTML::script('assets/template/js/custom-script.js') !!}

@stop
