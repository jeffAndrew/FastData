<?php

namespace App\Http\Controllers;

use DB;
use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function estudianteCambioCarrera ()
    {
        /*$estudiantes = Student::with('careers', 'changes')
        	->get()
        	->toArray();*/

        $estudiantes = Student::with(['careers', 'changes' => function($query) {
        		$query->with(['career'])->get();
    		}
    	])
        	->get()
        	->toArray();

       	// dd($estudiantes);

        return view('reportes.CambioCarreraT', compact('estudiantes'));
    }
}
