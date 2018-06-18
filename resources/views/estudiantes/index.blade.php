@extends('layouts.admin')
@section('content')
	<h1> Hola FastData </h1>
	<table class="table" id="example1">
		<thead>
			<th>#</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Sexo</th>
		</thead>
		<tbody>
			@foreach($estudiantes as $estudiante)
				<tr>
					<td>{{ $estudiante->id }}</td>
					<td>{{ $estudiante->name }}</td>
					<td>{{ $estudiante->surname }}</td>
					<td>{{ $estudiante->sex }}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
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
    <script src="{{asset('AD/js/off-canvas.js')}}"></script>
    <script src="{{asset('AD/js/misc.js')}}"></script>

  @endsection