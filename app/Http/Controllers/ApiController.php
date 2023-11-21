<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\StudentController;

class ApiController extends Controller
{
    public function index(Request $request)
    {
        return 'index';
    }
    // Professor
    public function createClassroom(Request $request)
    {
        // ProfessorController::createClassroom();
        return 'createClassroom';
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
    public function exit(Request $request)
    {
        // ProfessorController::exit();
        // StudentController::exit();
        return 'exit';
    }
}
