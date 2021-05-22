<?php

namespace App\Http\Controllers\Api;
use App\Http\Transformers\HandoversTransformer;
use App\Http\Transformers\SelectlistTransformer;
use App\Models\Handover;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class HandoversController extends Controller
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
        $this->authorize('index', Handover::class);
        /**$complaints = Complaint::select(['id', 'f_name', 'user_name', 'c_name', 'com_details', 'com_nature', 'phone', 'suggestions', 'sign', 'action_date', 'action_taken', 'outcome']); */
        $handovers = Handover::where('user_id', '=', Auth::user()->id);
       

        if ($request->filled('search')) {
            $handovers = $handovers->TextSearch($request->input('search'));
        }
        
        $offset = (($handovers) && ($request->get('offset') > $handovers->count())) ? $handovers->count() : $request->get('offset', 0);

        // Check to make sure the limit is not higher than the max allowed
        ((config('app.max_results') >= $request->input('limit')) && ($request->filled('limit'))) ? $limit = $request->input('limit') : $limit = config('app.max_results');

        $total = $handovers->count();
        $handovers = $handovers->skip($offset)->take($limit)->get();
        return (new HandoversTransformer)->transformHandovers($handovers, $total);
    }


    
    
}
