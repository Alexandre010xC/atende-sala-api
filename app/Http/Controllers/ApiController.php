<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\StudentController;

use Carbon\Carbon;

use App\Models\Classroom;
use App\Models\User;
use App\Models\Request as Help;
use App\Models\StudentsClassroom;

class ApiController extends Controller
{
    // Professor
    public function createClassroom(Request $request)
    {
        $this->validate($request, [
            'classname' => 'required|string',
            'layout' => 'required|bool',
            'max_students' => 'required|integer'
        ]);


        $classroom = new Classroom();
        $classroom->classname = $request->input('classname');
        $classroom->layout = $request->input('layout');
        $classroom->max_students = $request->input('max_students');
        $classroom->started_at = Carbon::now();

        // pegar user_id from session
        // $classroom->professor_id = $request->input('user_id');

        dd($classroom);
        $data = $classroom->save();



        // ProfessorController::createClassroom();

        return $data;
    }
    public function assistNextStudent(Request $request)
    {
        // ProfessorController::assistNextStudent();
        return 'assistNextStudent';
    }
    public function stopAssist(Request $request)
    {
        // ProfessorController::stopAssist();
        return 'stopAssist';
    }
    // Student
    public function searchClassroom(Request $request)
    {
        // ProfessorController::searchClassroom();
        return 'searchClassroom';
    }
    public function joinClassroom(Request $request)
    {
        // ProfessorController::joinClassroom();
        return 'joinClassroom';
    }
    public function askAssistance(Request $request)
    {
        // ProfessorController::askAssistance();
        return 'askAssistance';
    }
    // Both
    private function createUser($data)
    {

    }
    private function updateStatus($data)
    {

    }
    public function exitClassroom(Request $request)
    {
        // ProfessorController::exit();
        // StudentController::exit();
        return 'exit';
    }
    public function listReports(Request $request)
    {

        return 'listReports';
    }
    public function getReport(Request $request)
    {

        return 'getReport';
    }

}
