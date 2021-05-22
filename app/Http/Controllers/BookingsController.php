<?php
namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests;
use App\Models\Booking;
use App\Models\ActivityLog;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Redirect;

/** This controller handles all actions related to Accessories for
 * the Snipe-IT Asset Management application.
 *
 * @version    v1.0
 */
class BookingsController extends Controller
{
    /**
     * Returns a view that invokes the ajax tables which actually contains
     * the content for the accessories listing, which is generated in getDatatable.
     *
     * @since [v1.0]
     * @return View
     */
    public function index()
    {
        $this->authorize('view', Booking::class);
        $bookings = Booking::where('user_id', '=', Auth::user()->id);
        return view('bookings/index',compact('bookings'));
    }

     /**
     * Returns a view with a form to create a new Accessory.
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @return View
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function create()
    {
         // Show the page
        $this->authorize('create',Booking::class);
        return view('bookings/create');
    }


    /**
     * Validate and save new Accessory from form post
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @return Redirect
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store()
    {
        $this->authorize('create',Booking::class);
        $booking = new Booking();

        $booking->c_name = request('c_name');
        $booking->b_from = request('b_from');
        $booking->b_to = request('b_to');
        $booking->bed = request('bed');
        $booking->pay_via = request('pay_via');
        $booking->quated_fee = request('quated_fee');
        $booking->freq_fee = request('freq_fee');
        $booking->dob = request('dob');
        $booking->age = request('age');
        $booking->reffer_ph = request('reffer_ph');
        $booking->f_address = request('f_address');
        $booking->reason = request('reason');
        $booking->p_car = request('p_car');
        $booking->d_history = request('d_history');
        $booking->behav = request('behav');
        $booking->substances = request('substances');
        $booking->c_meds = request('c_meds');
        $booking->case_mngr = request('case_mngr');
        $booking->social_wrkr = request('social_wrkr');
        $booking->forensic_history = request('forensic_history');
        $booking->notes = request('notes');
        $booking->user_id =  Auth::user()->id;
        
        $booking->save();
       
      $activity = new ActivityLog();

      $activity->user = Auth::user()->first_name;
      $activity->action = "Created";
      $activity->item = "Booking Report";
      $activity->save();

      return redirect()->route('bookings.index')
                    ->with('success','created successfully');
              

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $this->authorize('show',Booking::class);
        $booking = Booking::find($id);
        return view('bookings/show',compact('booking'));
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
    {
        $this->authorize('edit',Booking::class);
        $booking = Booking::find($id);
        return view('bookings/edit',compact('booking'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $this->authorize('update', Booking::class);
        $booking = Booking::find($id);

        $booking->c_name = request('c_name');
        $booking->b_from = request('b_from');
        $booking->b_to = request('b_to');
        $booking->bed = request('bed');
        $booking->pay_via = request('pay_via');
        $booking->quated_fee = request('quated_fee');
        $booking->freq_fee = request('freq_fee');
        $booking->dob = request('dob');
        $booking->age = request('age');
        $booking->reffer_ph = request('reffer_ph');
        $booking->f_address = request('f_address');
        $booking->reason = request('reason');
        $booking->p_car = request('p_car');
        $booking->d_history = request('d_history');
        $booking->behav = request('behav');
        $booking->substances = request('substances');
        $booking->c_meds = request('c_meds');
        $booking->case_mngr = request('case_mngr');
        $booking->social_wrkr = request('social_wrkr');
        $booking->forensic_history = request('forensic_history');
        $booking->notes = request('notes');
        $booking->user_id =  Auth::user()->id;
        
        $booking->save();
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Updated";
        $activity->item = "Booking Report";
        $activity->save();

        return redirect()->route('bookings.index')
                        ->with('success','updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
        $this->authorize('destroy', Booking::class);
        Booking::destroy($id);
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Deleted";
        $activity->item = "Booking Report";
        $activity->save();
        return redirect()->route('bookings.index')
                        ->with('success','deleted successfully');
    }

}
