@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="box">
          <div class="box-header">
            <h3>Consultar cambio de carrera de estudiantes</h3>
          </div>
          <div class="box-body">
            <form action="" method="">
              <div class="form-group col-md-6">
                <label>Carrera anterior</label>
                <select class="form-control">
                  <option value=""></option>
                  <option value="">Medicina</option>
                  <option value="">Contabilidad</option>
                  <option value="">Mercadeo</option>
                  <option value="">Ingenieria Civil</option>
                  <option value="">Ingenieria Industrial</option>
                </select>
              </div>

              <div class="form-group col-md-6">
                <label>Nueva carrera</label>
                <select class="form-control">
                  <option value=""></option>
                  <option value="">Mercadeo</option>
                  <option value="">Ingenieria Civil</option>
                  <option value="">Ingenieria Industrial</option>
                  <option value="">Medicina</option>
                  <option value="">Contabilidad</option>
                </select>
              </div>

              <div class="form-group col-md-2">
                <label>Año</label>
                <input class="form-control" type="text" name="">
              </div>

              <div class="form-group col-md-3">
                <label>Tipo de cambio:</label>
                <br>
                <label class="radio-inline"><input type="radio" name="optradio">Voluntario</label>
                <label class="radio-inline"><input type="radio" name="optradio">Obligado</label>
                 <label class="radio-inline"><input type="radio" name="optradio">Ambos</label>
              </div>

              <div class="form-group col-md-6">
                <br>
                <button type="submit" class="btn btn-info btn-block"><b>Consulta Parametrizada</b></button>            
              </div>

              <div class="form-group col-md-12">
                <button type="submit" class="btn btn-success btn-block"><b>Consultar todos los Cambios</b></button>
              </div>
            </form>
          </div>
        </div>
    </div>

    {{-- Vista del Data Table donde los datos Seleccionados se mostraran --}}
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3>Table Head Colors</h3>

                <table class="table" width="100%" id="example">
                    <thead class="thead-dark">
                      <tr>
                        <th>Matricula</th>
                        <th>Estudiante</th>
                        <th>Carrera en Curso</th>
                        <th>Cambio a</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($estudiantes as $estudiante)
                        <tr>
                            <td>{{ $estudiante['fees'] }}</td>
                            <td>{{ $estudiante['name'] }}</td>
                            <td>{{ $estudiante['careers'][0]['CareerName'] }}</td>
                            <td>{{ isset($estudiante['changes'][0]) ? $estudiante['changes'][0]['career']['CareerName'] : '-' }}</td>
                        </tr>
                      @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Matricula</th>
                            <th>Estudiante</th>
                            <th>Carrera Cursada</th>
                            <th>Cambio a</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('css')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/1.0.3/css/dataTables.responsive.css">

@endsection

@section('js')
    <script src="{{asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    
    {{-- <script src="{{asset('admin//node_modules/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('admin/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script> --}}

    <!-- DataTable -->
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.32/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/1.0.3/js/dataTables.responsive.js"></script>


    <script type="text/javascript">
      $('#example tfoot th').each( function () {
          var title = $(this).text();
          $(this).html( '<input class="form-control" type="text" placeholder="'+title+'"/>' );
      });

      var table = $('#example').DataTable({
          "bProcessing": true,
          "retrieve": true,
          "responsive": true,
          "order": [[0, "asc" ]],
          dom: 'Bfrtip',
          buttons: [
              'copyHtml5',
              'excelHtml5',
              'csvHtml5',
              'pdfHtml5'
          ]
      });

      table.columns().every( function () {
          var that = this;
   
          $('input', this.footer() ).on( 'keyup change', function () {
              if ( that.search() !== this.value ) {
                  that
                    .search( this.value )
                    .draw();
                }
            });
        });
    </script>

    <script src="{{asset('AD/js/off-canvas.js')}}"></script>
    <script src="{{asset('AD/js/misc.js')}}"></script>
@endsection