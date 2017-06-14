<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function dailyReport() {
    	$dailyData = \App\DailyReports::all();
    	$dates = $dailyData->pluck('date');
    	$amounts = $dailyData->pluck('amount');
    	return view('reports.daily', compact('dates', 'amounts'));
    }
}
