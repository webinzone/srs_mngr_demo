<?php

namespace App\Http\Controllers\Api;
use App\Http\Transformers\ComplaintsTransformer;
use App\Http\Transformers\SelectlistTransformer;
use App\Models\Complaint;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class ComplaintsController extends Controller
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
        $this->authorize('index', Complaint::class);
        /**$complaints = Complaint::select(['id', 'f_name', 'user_name', 'c_name', 'com_details', 'com_nature', 'phone', 'suggestions', 'sign', 'action_date', 'action_taken', 'outcome']); */
        $complaints = Complaint::where('user_id', '=', Auth::user()->id);
       

        if ($request->filled('search')) {
            $complaints = $complaints->TextSearch($request->input('search'));
        }
        
          $offset = (($complaints) && ($request->get('offset') > $complaints->count())) ? $complaints->count() : $request->get('offset', 0);

        // Check to make sure the limit is not higher than the max allowed
        ((config('app.max_results') >= $request->input('limit')) && ($request->filled('limit'))) ? $limit = $request->input('limit') : $limit = config('app.max_results');

        $total = $complaints->count();
        $complaints = $complaints->skip($offset)->take($limit)->get();
        return (new ComplaintsTransformer)->transformComplaints($complaints, $total);
    }


    
    
}
