<?php

namespace App\Http\Controllers\Api;
use App\Http\Transformers\BookingsTransformer;
use App\Http\Transformers\SelectlistTransformer;
use App\Models\Booking;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class BookingsController extends Controller
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
        $this->authorize('index', Booking::class);
        /**$complaints = Complaint::select(['id', 'f_name', 'user_name', 'c_name', 'com_details', 'com_nature', 'phone', 'suggestions', 'sign', 'action_date', 'action_taken', 'outcome']); */
        $bookings = Booking::where('user_id', '=', Auth::user()->id);
       

        if ($request->filled('search')) {
            $bookings = $bookings->TextSearch($request->input('search'));
        }
        
        $offset = (($bookings) && ($request->get('offset') > $bookings->count())) ? $bookings->count() : $request->get('offset', 0);

        // Check to make sure the limit is not higher than the max allowed
        ((config('app.max_results') >= $request->input('limit')) && ($request->filled('limit'))) ? $limit = $request->input('limit') : $limit = config('app.max_results');

        $total = $bookings->count();
        $bookings = $bookings->skip($offset)->take($limit)->get();
        return (new BookingsTransformer)->transformBookings($bookings, $total);
    }


    
    
}
