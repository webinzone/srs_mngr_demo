<?php

namespace App\Http\Controllers\Api;
use App\Http\Transformers\SupportPlansTransformer;
use App\Http\Transformers\SelectlistTransformer;
use App\Models\SupportPlan;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class SupportPlansController extends Controller
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
        $this->authorize('index', SupportPlan::class);
        /**$complaints = Complaint::select(['id', 'f_name', 'user_name', 'c_name', 'com_details', 'com_nature', 'phone', 'suggestions', 'sign', 'action_date', 'action_taken', 'outcome']); */
        $support_plans = SupportPlan::where('user_id', '=', Auth::user()->id);
       

        if ($request->filled('search')) {
            $support_plans = $support_plans->TextSearch($request->input('search'));
        }
        
        $offset = (($support_plans) && ($request->get('offset') > $support_plans->count())) ? $support_plans->count() : $request->get('offset', 0);

        // Check to make sure the limit is not higher than the max allowed
        ((config('app.max_results') >= $request->input('limit')) && ($request->filled('limit'))) ? $limit = $request->input('limit') : $limit = config('app.max_results');

        $total = $support_plans->count();
        $support_plans = $support_plans->skip($offset)->take($limit)->get();
        return (new SupportPlansTransformer)->transformSupportPlans($support_plans, $total);
    }


    
    
}
