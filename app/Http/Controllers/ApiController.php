<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use Illuminate\Support\Str;
use Carbon\Carbon;

use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\StudentController;

use App\Models\User;
use App\Models\Classroom;
use App\Models\StudentsClassroom;
use App\Models\Request as Help;

class ApiController extends Controller
{
    // Professor
    public function createClassroom(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required|integer',
            'name' => 'required|string',
            'layout' => 'required|boolean',
            'max_students' => 'required|integer'
        ]);

        $classroom = new Classroom();
        $classroom->name = $request->get('name');
        $classroom->layout = $request->get('layout');
        $classroom->max_students = $request->get('max_students');
        $classroom->started_at = Carbon::now();

        $classroom->professor_id = $request->get('user_id');
        // pegar user_id from session

        $classroom->save();

        $response = $classroom->refresh();
        return response()->json($response);
    }
    public function assistNextStudent(Request $request)
    {
        // ProfessorController::assistNextStudent();
        $data = [
            "data" => [
                "name" => "Lorem Ipsum0",
                "seat" => "E3"
            ]
        ];

        $response = $data;
        // $response = 'assistNextStudent';
        return response()->json($response);
    }
    public function stopAssist(Request $request)
    {
        // ProfessorController::stopAssist();
        $response = 'stopAssist';
        return response()->json($response);
    }
    // Student
    public function searchClassroom(Request $request)
    {
        // ProfessorController::searchClassroom();
        $response = 'searchClassroom';
        return response()->json($response);
    }
    public function joinClassroom(Request $request)
    {
        // ProfessorController::joinClassroom();
        $response = 'joinClassroom';
        return response()->json($response);
    }
    public function askAssistance(Request $request)
    {
        // ProfessorController::askAssistance();
        $response = 'askAssistance';
        return response()->json($response);
    }
    // Both
    public function manageUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'is_student' => 'required|boolean',
            'token' => 'required|unique:users|string|min:32|max:32'
        ]);

        $user = $request->get('token') != "null" ? $this->loginUser($request) :  $this->registerUser($request);

        $response = ["data" => ["token" => $user->token]];
        return response()->json($response);
    }
    private function loginUser($data){
        dd(User::find('token',$request->token));

        //autenticar com token e update de "name" na base

        return $user->refresh(); //deve retornar token
    }
    private function registerUser($data){
        $token = Str::random(32);

        $user = new User();
        $user->token = $request->get('token');
        $user->name = $request->get('name');
        $user->password = bcrypt($request->get('token'));

        Auth::login($user);

        $user->save();
        return $user->refresh(); //deve retornar token
    }
    public function updateStatus(Request $request)
    {
        $response = 'updateStatus';
        return response()->json($response);
    }
    public function exitClassroom(Request $request)
    {
        // ProfessorController::exit();
        // StudentController::exit();
        $response = 'exit';
        return response()->json($response);
    }
    public function listReports(Request $request)
    {
        $response = 'listReports';
        return response()->json($response);
    }
    public function getReport(Request $request)
    {
        $response = 'getReport';
        return response()->json($response);
    }

}
