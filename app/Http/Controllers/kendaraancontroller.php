<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class kendaraan extends Controller
{ $tablekendaraanapp = tablekendaraanapp::all();
    return view('tablekendaraanapp.index', compact('table kendaraanapp'));
    //
}
