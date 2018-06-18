<?php


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/reports', 'ReportController@report')->name('reportes'); // ---- Ruta de los reportes ---- \\

// Route de para la vista de los diferentes reportes.....
Route::get('/greport','ReportController@reporteGeneral')->name('reporteG'); // ---- Ruta para Reportes Generales ---- \\
Route::get('/changereport','StudentController@estudianteCambioCarrera')->name('reportecambio'); // ---- Ruta para Reportes cambios ---- \\
Route::get('/nacionalreport','ReportController@reporteNacional')->name('reportenacional'); // -- Ruta para Reportes nacionalidad --\\

// Route de la vista de las tablas de los diferentes reportes......
Route::get('generaltableReport','ReportController@generalT')->name('reportGtable'); //---Vista de la tabla de reportes Generales---\\
Route::get('cambiotableReport','ReportController@cambioT')->name('reportCtable');
Route::get('nacionaltableRport','ReportController@nacionalidadT')->name('reportNtable');

// Route::get('/tablereports', 'ReportController@tablereport')->name('tabla_report'); // ---- Ruta para Vista de los Reportes ---- \\
Route::get('/charts', 'ChartController@chart')->name('stadistic_charts'); // ---- Ruta para los graficos ---- \\

Route::get('test',function(){
	return App\Student::find(1)->changes()->get();
});