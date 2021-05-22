<?php

namespace App\Http\Controllers\Api;
use App\Http\Transformers\RentDetailsTransformer;
use App\Http\Transformers\SelectlistTransformer;
use App\Models\RentDetail;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class RentDetailsController extends Controller
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
        $this->authorize('index', RentDetail::class);
          /**$rent_details = RentDetail::select(['id', 'srs_name', 'rent_payment', 'res_name','res_sign','created_at']);*/
        $rent_details = RentDetail::where('user_id', '=', Auth::user()->id);
      

        if ($request->filled('search')) {
            $rent_details = $rent_details->TextSearch($request->input('search'));
        }
        

        $offset = (($rent_details) && ($request->get('offset') > $rent_details->count())) ? $rent_details->count() : $request->get('offset', 0);

        // Check to make sure the limit is not higher than the max allowed
        ((config('app.max_results') >= $request->input('limit')) && ($request->filled('limit'))) ? $limit = $request->input('limit') : $limit = config('app.max_results');

        $total = $rent_details->count();
        $rent_details = $rent_details->skip($offset)->take($limit)->get();
        return (new RentDetailsTransformer)->transformRentDetails($rent_details, $total);
    }


    
    
}
