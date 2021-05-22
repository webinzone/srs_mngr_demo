<?php

namespace App\Http\Controllers\Api;
use App\Http\Transformers\ProgressesTransformer;
use App\Http\Transformers\SelectlistTransformer;
use App\Models\Progress;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class ProgressesController extends Controller
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
        $this->authorize('index', Progress::class);
        /**$progresses = Complaint::select(['id', 'f_name', 'user_name', 'c_name', 'com_details', 'com_nature', 'phone', 'suggestions', 'sign', 'action_date', 'action_taken', 'outcome']); */
        $progresses = Progress::where('user_id', '=', Auth::user()->id);
       

        if ($request->filled('search')) {
            $progresses = $progresses->TextSearch($request->input('search'));
        }
        

        $offset = (($progresses) && ($request->get('offset') > $progresses->count())) ? $progresses->count() : $request->get('offset', 0);

        // Check to make sure the limit is not higher than the max allowed
        ((config('app.max_results') >= $request->input('limit')) && ($request->filled('limit'))) ? $limit = $request->input('limit') : $limit = config('app.max_results');

        $total = $progresses->count();
        $progresses = $progresses->skip($offset)->take($limit)->get();
        return (new ProgressesTransformer)->transformProgresses($progresses, $total);
    }


    
    
}
