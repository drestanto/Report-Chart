<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function dailyReport() {
    	return view('reports.daily');
    }
}
