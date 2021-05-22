<?php

namespace App\Http\Controllers\Api;
use App\Http\Transformers\ProgressNotesTransformer;
use App\Http\Transformers\SelectlistTransformer;
use App\Models\ProgressNote;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class ProgressNotesController extends Controller
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
        $this->authorize('index', ProgressNote::class);
        $progress_notes = ProgressNote::where('user_id', '=', Auth::user()->id);
       

        if ($request->filled('search')) {
            $progress_notes = $progress_notes->TextSearch($request->input('search'));
        }
        

        $offset = (($progress_notes) && ($request->get('offset') > $progress_notes->count())) ? $progress_notes->count() : $request->get('offset', 0);

        // Check to make sure the limit is not higher than the max allowed
        ((config('app.max_results') >= $request->input('limit')) && ($request->filled('limit'))) ? $limit = $request->input('limit') : $limit = config('app.max_results');

        $total = $progress_notes->count();
        $progress_notes = $progress_notes->skip($offset)->take($limit)->get();
        return (new ProgressNotesTransformer)->transformProgressNotes($progress_notes, $total);
    }


    
    
}
