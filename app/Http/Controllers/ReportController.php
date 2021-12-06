<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    //

    public function index()
    {

        return view('pages.report.index');
    }

    public function create()
    {
        return view('pages.report.create');
    }
    public function edit()
    {
        return view('pages.report.edit');
    }
}
