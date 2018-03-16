<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Academic;
use App\Program;
use App\Level;
class CourseController extends Controller
{ 
    public function __construct() {

    	$this->middleware('auth');
    }

    public function getManageCourse() {
        
        $programs = Program::all();
        $academics = Academic::orderBy('academic_id','DESC')->get();
    	return view('courses.manageCourse',compact('programs','academics'));
    }

    public function postInsertAcademic(Request $request) {

    		if ($request->ajax())
    		{
    			return response(Academic::create($request->all()));
    		}
    } 

    public function postInsertProgram(Request $request) {

            if ($request->ajax())
            {
                return response(Program::create($request->all()));
            }
    }

    public function postInsertLevel(Request $request) {
 
            if ($request->ajax())
            {
                return response(Level::create($request->all()));
            }
    }

       public function showLevel(Request $request) {
 
            if ($request->ajax())
            {
                return response(Level::find($request->program_id));
            }
    }
}
