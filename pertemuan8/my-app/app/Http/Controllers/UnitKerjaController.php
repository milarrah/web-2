<?php

namespace App\Http\Controllers;

use App\Models\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function index()
    {
        $unitkerja = Unitkerja::all();

        return view("unit-kerja.index", compact("unitkerja"));
    }
}
