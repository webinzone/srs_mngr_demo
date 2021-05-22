<?php

namespace App\Http\Controllers\Api;
use App\Http\Transformers\IncidentsTransformer;
use App\Http\Transformers\SelectlistTransformer;
use App\Models\Incident;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class IncidentsController extends Controller
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
        $this->authorize('index', Incident::class);
       
        $incidents = Incident::where('user_id', '=', Auth::user()->id);
       

        if ($request->filled('search')) {
            $incidents = $incidents->TextSearch($request->input('search'));
        }
        
       $offset = (($incidents) && ($request->get('offset') > $incidents->count())) ? $incidents->count() : $request->get('offset', 0);

        // Check to make sure the limit is not higher than the max allowed
        ((config('app.max_results') >= $request->input('limit')) && ($request->filled('limit'))) ? $limit = $request->input('limit') : $limit = config('app.max_results');

        $total = $incidents->count();
        $incidents = $incidents->skip($offset)->take($limit)->get();
        return (new IncidentsTransformer)->transformIncidents($incidents, $total);
    }


    
    
}

