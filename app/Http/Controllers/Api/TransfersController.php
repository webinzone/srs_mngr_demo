<?php

namespace App\Http\Controllers\Api;
use App\Http\Transformers\TransfersTransformer;
use App\Http\Transformers\SelectlistTransformer;
use App\Models\Booking;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class TransfersController extends Controller
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
        
        $bookings = Booking::where('user_id', '=', Auth::user()->id);
       

        $total = $bookings->count();
        $bookings = $bookings->get();
        return (new BookingsshowTransformer)->transformBooking($bookings, $total);
    }
    }


    
    
}
