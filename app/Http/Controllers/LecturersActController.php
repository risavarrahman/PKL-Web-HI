<?php

namespace App\Http\Controllers;

use App\Models\LecturersAct;
use Illuminate\Http\Request;

class LecturersActController extends Controller
{

    public function index() {
        return view('page.lecturers-act', [
            'title' => "Lecturer Activities",
            'lectact' => LecturersAct::paginate(20)
        ]);
    }

}
