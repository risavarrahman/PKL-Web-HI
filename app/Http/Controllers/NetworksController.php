<?php

namespace App\Http\Controllers;

use App\Models\Networks;
use Illuminate\Http\Request;

class NetworksController extends Controller
{
    public function index() {
        return view('page.networks', [
            'title' => "Networks",
            'networks' => Networks::paginate(20)
        ]);
    }
}
