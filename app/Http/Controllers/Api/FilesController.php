<?php

namespace App\Http\Controllers\Api;
use App\Http\Transformers\FilesTransformer;
use App\Http\Transformers\SelectlistTransformer;
use App\Models\File;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class FilesController extends Controller
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
        $this->authorize('index', File::class);
       
        $files = File::where('user_id', '=', Auth::user()->id);
       

        if ($request->filled('search')) {
            $files = $files->TextSearch($request->input('search'));
        }
        
       $offset = (($files) && ($request->get('offset') > $files->count())) ? $files->count() : $request->get('offset', 0);

        // Check to make sure the limit is not higher than the max allowed
        ((config('app.max_results') >= $request->input('limit')) && ($request->filled('limit'))) ? $limit = $request->input('limit') : $limit = config('app.max_results');

        $total = $files->count();
        $files = $files->skip($offset)->take($limit)->get();
        return (new FilesTransformer)->transformFiles($files, $total);
    }


    
    
}
