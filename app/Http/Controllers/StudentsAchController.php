<?php

namespace App\Http\Controllers;

use App\Models\StudentsAch;
use Illuminate\Http\Request;

class StudentsAchController extends Controller
{
    public function index() {
        return view('page.student-ach', [
            'title' => "Students Achievement",
            'studentach' => StudentsAch::paginate(20)
        ]);
    }
}
