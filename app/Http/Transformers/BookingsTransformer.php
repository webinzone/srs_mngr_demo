<?php
namespace App\Http\Transformers;

use App\Helpers\Helper;
use Gate;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class BookingsTransformer
{

    public function transformBookings (Collection $bookings, $total)
    {
        $array = array();
        foreach ($bookings as $booking) {
            $array[] = self::transformBooking($booking);
        }
        return (new DatatablesTransformer)->transformDatatables($array, $total);
    }

    public function transformBooking (Booking $booking = null)
    {
        if ($booking) {

            $array = [
                'id' => (int) $booking->id,
                'c_name' => e($booking->c_name),
                'b_from' => e($booking->b_from),
                'b_to' => e($booking->b_to),
                'bed' => e($booking->bed),
                'pay_via' => e($booking->pay_via),
                'quated_fee' => e($booking->quated_fee),
                'freq_fee' => e($booking->freq_fee),
                'dob' => e($booking->dob),
                'age' => e($booking->age),
                'reffer_ph' => e($booking->reffer_ph),
                'f_address' => e($booking->f_address),
                'reason' => e($booking->reason),
                'p_car' => e($booking->p_car),
                'd_history' => e($booking->d_history),
                'behav' => e($booking->behav),
                'substances' => e($booking->substances),
                'c_meds' => e($booking->c_meds),
                'case_mngr' => e($booking->case_mngr),
                'social_wrkr' => e($booking->social_wrkr),
                'forensic_history' => e($booking->forensic_history),
                'notes' => e($booking->notes),
                'created_at' => e($booking->created_at),
                'actions' => view('bookings/datatables_actions', compact('booking'))->render() 
                
            ];


            return $array;
        }


    }



}
