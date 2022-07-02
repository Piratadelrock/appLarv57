<?php

namespace App\Http\Controllers;

use Facade\Ignition\DumpRecorder\Dump;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request) {
        //var_dump
        //dd();
        // dd($request->query('title','No hay titulo'));
        return view('test', [
            'title' => $request->query('title','No hay titulo')
        ]);
    }
}
