@extends('layouts.admin')

@section('content')
<section class="content-header">
      <h1>
        Dashboard
        <small>Version 1.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
  </section>
  <section class="content">
  
  {{-- Row de la primera linea del body --}}

    <div class="row">
      {{-- primera caa de informcion dentro del row --}}
      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-aqua"><i class="fa fa-spinner"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Matriculados</span>
            <span class="info-box-number">13,350</span>
          </div>
        </div>
      </div>

      {{-- segunda caja de informacion dentro del row --}}

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span " class="info-box-icon bg-yellow"><i class="fa fa-mortar-board"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Egresaos</span>
            <span class="info-box-number">6,580</span>
          </div>
        </div>
      </div>
      {{-- Tercera caja de informacion del row --}}

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-red"><i class="fa fa-user"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Activos</span>
            <span class="info-box-number">15,560</span>
          </div>
        </div>
      </div>

      {{-- Cuarta caja de informacion del row --}}

      <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
          <span class="info-box-icon bg-green"><i class="fa fa-user-plus"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Nuevo Ingreso</span>
            <span class="info-box-number">1,520</span>
          </div>
        </div>
      </div>
{{-- Div final del row primero del body --}}
    </div>

    {{-- comienzo del segundo row del body --}}
    <div class="row">

      <div class="col-md-12">
        <div class="box">
          <div class="box-header with-border">
            <h3 class="box-title">Graficas Reportes mensuales</h3>
            <div class="box-tools pull-right">
              <button type="button" class="btn btn-box-tool"   data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div>
          </div>
          
         <div class="box-dody">
          <div class="row">
           {{-- primera linea del Row --}}
            <div class="col-md-8">
              <p class="text-center"> <strong>Nuevo ingreso r2 2018 </strong></p>
              <div class="chart">
                <canvas id="salesChart" style=" height: 180px;"></canvas>
              </div>
            </div>
            {{-- Segunda parte del row --}}

            <div class="col-md-4">
              <p class="text-center"><strong>Metas del Departamento</strong></p>
              <div class="progress-group">
                <span class="progress-text">Informes de Matriculados</span>
                <span class="progress-number"><b>50</b>/100</span>
                <div class="progress xs">
                  <div class="progress-bar progress-bar-aqua" style="width: 50%"></div>
                </div>
            <div class="progress-group">
                  <span class="progress-text">Formularios del Proceso de Inscripcion</span>
                  <span class="progress-number"><b>95</b>/100</span>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-red" style="width: 95%"></div>
                  </div>
            </div>
            <div class="progress-group">
                <span class="progress-text">Informe de los cambios de carrera</span>
                <span class="progress-number"><b>75</b>/100</span>
                <div class="progress xs">
                  <div class="progress-bar progress-bar-yellow" style="width: 75%"></div>
                </div>
            </div>
            <div class="progress-group">
                <span class="progress-text">Informe de egresados por carrera</span>
                <span class="progress-number"><b>30</b>/100</span>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-green" style="width: 30%"></div>
                  </div>
            </div>


                   
              </div>
            </div>
          </div>
        </div>
         {{-- Footer del body-box --}}
           {{-- <div class="box-footer"></div> --}}
        </div>
                {{-- Row de los reportes --}}

       <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Reportes en Proceso</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
          </div>

        </div>
        <div class="box-dody">
          <div class="table-responsive">
            <table class="table no-margin">
              <thead>
                <tr>
                  <th>Id del Reporte</th>
                  <th>Nombre del Reporte</th>
                  <th>Status</th>
                  <th>Asignado a</th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><a href="{{ route('reporteG') }}">AGR025</a></td>
                  <td>Reporte de Agronomia</td>
                  <td><span class="label label-success">Completado</span></td>
                  <td><b>Adelso</b></td>
                </tr>
                <tr>
                  <td><a href="{{ route('reporteG') }}">ISC154</a></td>
                  <td>Nuevo Inbreso ISC R2-2018</td>
                  <td><span class="label label-warning">Pendiente</span></td>
                  <td>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-warning" style="width: 15%"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><a href="{{ route('reporteG') }}">AMD015</a></td>
                  <td>Egresados de Adm 2006</td>
                  <td><span class="label label-info">En Proceso</span></td>
                  <td>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-aqua" style="width: 75%"></div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td><a href="{{ route('reporteG') }}">CON056</a></td>
                  <td>Estudiantes de Con que hicieron cambios de carrera R1-2017</td>
                  <td><span class="label label-danger">No evaluado</span></td>
                  <td>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-danger" style="width:8%"></div>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        
      </div>

        
      </div>
      
      


      {{-- div final del segundo row --}}
    </div>

  </section>

@endsection

@section('js')

@endsection
