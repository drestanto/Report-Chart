<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function dailyReport() {
    	$dailyData = \App\DailyReports::all();
    	$dates = $dailyData->pluck('date');
    	// $dates = ["2017-02-04","2017-02-03","2017-02-05","2017-02-06","2017-02-08","2017-02-09","2017-02-10","2017-02-12","2017-02-13","2017-02-14","2017-02-15","2017-02-16"];
    	$amounts = $dailyData->pluck('amount');
    	// $amounts = [270,290,310,230,370,100,380,470,550,730,610,620];
    	return view('reports.daily', compact('dates', 'amounts'));
    }
}
