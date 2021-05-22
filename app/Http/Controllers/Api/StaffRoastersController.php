<?php

namespace App\Http\Controllers\Api;
use App\Http\Transformers\StaffRoastersTransformer;
use App\Http\Transformers\SelectlistTransformer;
use App\Models\StaffRoaster;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class StaffRoastersController extends Controller
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
        $this->authorize('index', StaffRoaster::class);
       
        $staff_roasters = StaffRoaster::where('user_id', '=', Auth::user()->id);
       

        if ($request->filled('search')) {
            $staff_roasters = $staff_roasters->TextSearch($request->input('search'));
        }
        
        $offset = (($staff_roasters) && ($request->get('offset') > $staff_roasters->count())) ? $staff_roasters->count() : $request->get('offset', 0);

        // Check to make sure the limit is not higher than the max allowed
        ((config('app.max_results') >= $request->input('limit')) && ($request->filled('limit'))) ? $limit = $request->input('limit') : $limit = config('app.max_results');

        $total = $staff_roasters->count();
        $staff_roasters = $staff_roasters->skip($offset)->take($limit)->get();
        return (new StaffRoastersTransformer)->transformStaffRoasters($staff_roasters, $total);
    }


    
    
}
