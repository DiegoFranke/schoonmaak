<?php

namespace App\Http\Controllers;

use App\Models\OpenbareSchoonmaak;
use Illuminate\Http\Request;

class OpenbareSchoonmaakController extends Controller
{
    public function index()
    {
        $openbareschoonmaak = OpenbareSchoonmaak::all();
        return view('openbareschoonmaak.index')->with('openbareschoonmaak', $openbareschoonmaak);
    }
}
