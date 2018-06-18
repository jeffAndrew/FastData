@extends('layouts.admin')

@section('content')

       <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Reportes en Proceso</h3>
          

        </div>
        <div class="box-dody">
          <div class="table-responsive">
            <table id='example1' class="table no-margin">
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
                  <td><a href="{{ route('reportNtable') }}">CON056</a></td>
                  <td>Estudiantes de Con que hicieron cambios de carrera R1-2017</td>
                  <td><span class="label label-danger">No evaluado</span></td>
                  <td>
                    <div class="progress ">
                      <div class="progress-bar progress-bar-danger" style="width:8%"></div>
                    </div>
                  </td>
                </tr>
                
                <tr>
                  <td><a href="{{ route('reportNtable') }}">AGR025</a></td>
                  <td>Reporte de Agronomia</td>
                  <td><span class="label label-success">Completado</span></td>
                  <td>
                    <div class="progress ">
                      <div class="progress-bar progress-bar-green" style="width: 100%"></div>

                    </div>
                  </td>
                </tr>
                
                <tr>
                  <td><a href="{{ route('reportNtable') }}">ISC154</a></td>
                  <td>Nuevo Ingreso ISC R2-2018</td>
                  <td><span class="label label-warning">Pendiente</span></td>
                  <td>
                    <div class="progress ">
                      <div class="progress-bar progress-bar-warning" style="width: 15%"></div>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td><a href="{{ route('reportNtable') }}">AMD015</a></td>
                  <td>Egresados de Adm 2006</td>
                  <td><span class="label label-info">En Proceso</span></td>
                  <td>
                    <div class="progress ">
                      <div class="progress-bar progress-bar-aqua" style="width: 75%"></div>
                    </div>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
        
      </div>


@endsection
    
  @section('js')
    <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
    </script>
  @endsection