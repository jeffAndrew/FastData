<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class ReportController extends Controller{

	public function reporteGeneral(){

		return view('reportes.GeneralReportT'); //vista de reportes Generales
	}

	public function generalT()
	{
		
		return view('reportTView.generalreport'); //vista de tabla reportes Generales
	}

	public function reporteCambio(){

		return view('reportes.CambioCarreraT'); //vista de reportes cambio de carrera
	}

	public function cambioT(){
		return view('reportTView.carrerchange'); //vista de tabla reportes cambio
	}

	public function reporteNacional(){
		return view('reportes.NacionalidadT'); //vista de reportes por nacionaidad
	}

	public function nacionalidadT(){
		return view('reportTView.nacionalityreport'); //vista de tabla reportes nacionaidad
	}

}




	
	