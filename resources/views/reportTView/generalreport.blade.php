@extends('layouts.admin')
@section('content')
<div class="box">
            <div class="box-header">
              <h3 class="box-title"><b>Cambios de Carrera R2-2018</b></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Matricula</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Recinto</th>
                  <th>ID Carrera</th>
                  <th>Carrera</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>2011-1665</td>
                  <td>Jeffreys Andrew</td>
                  <td>Suarez Matos</td>
                  <td>Recinto 1</td>
                  <td>ISC</td>
                  <td>Ing.Sistemas de Computacion</td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                 <th>Matricula</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Recinto</th>
                  <th>ID Carrera</th>
                  <th>Carrera</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
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