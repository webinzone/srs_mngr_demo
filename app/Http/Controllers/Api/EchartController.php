<?php

namespace App\Http\Controllers\Api;
use App\Http\Transformers\FilesTransformer;
use App\Http\Transformers\SelectlistTransformer;
use App\Models\ConditionReport;
use App\Models\Incident;
use App\Models\Handover;
use App\Models\Progress;
use App\Models\Booking;

use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class EchartController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @author [A. Gianotto] [<snipe@snipe.net>]
	 * @since [v4.0]
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
			$condition = \App\Models\ConditionReport::count();
			$incident = \App\Models\Incident::count();
			$handover = \App\Models\Handover::count();
			$progresses = \App\Models\Progress::count();
			  $labels=['Condition','Incident','Handover','Progresses'];
        $points=[$condition,$incident,$handover,$progresses];
        $default_color_count = 4;
        $colors_array = ['#34B4CD','#CAA8D2','#307D47','#EA4369'];

			$result= [
				"labels" => $labels,
				"datasets" => [ [
					"data" => $points,
					"backgroundColor" => $colors_array,
					"hoverBackgroundColor" =>  "#DDE2A9"
			]]
		];
		return $result;
		
	  
	}
	
	
}
