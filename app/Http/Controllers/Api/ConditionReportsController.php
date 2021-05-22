<?php

namespace App\Http\Controllers\Api;
use App\Http\Transformers\ConditionReportsTransformer;
use App\Http\Transformers\SelectlistTransformer;
use App\Models\ConditionReport;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class ConditionReportsController extends Controller
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
        $this->authorize('index', ConditionReport::class);
        /**$complaints = Complaint::select(['id', 'f_name', 'user_name', 'c_name', 'com_details', 'com_nature', 'phone', 'suggestions', 'sign', 'action_date', 'action_taken', 'outcome']); */
        $condition_reports = ConditionReport::where('user_id', '=', Auth::user()->id);
       

        if ($request->filled('search')) {
            $condition_reports = $condition_reports->TextSearch($request->input('search'));
        }
        
        $offset = (($condition_reports) && ($request->get('offset') > $condition_reports->count())) ? $condition_reports->count() : $request->get('offset', 0);

        // Check to make sure the limit is not higher than the max allowed
        ((config('app.max_results') >= $request->input('limit')) && ($request->filled('limit'))) ? $limit = $request->input('limit') : $limit = config('app.max_results');

        $total = $condition_reports->count();
        $condition_reports = $condition_reports->skip($offset)->take($limit)->get();
        return (new ConditionReportsTransformer)->transformConditionReports($condition_reports, $total);
    }


    
    
}
