<?php
namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests;
use App\Models\ResidentAgreement;
use App\Models\ActivityLog;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Redirect;

/** This controller handles all actions related to Accessories for
 * the Snipe-IT Asset Management application.
 *
 * @version    v1.0
 */
class ResidentAgreementsController extends Controller
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
        $this->authorize('view', ResidentAgreement::class);
        $resident_agreements = ResidentAgreement::all();
        return view('resident_agreements/index',compact('resident_agreements'));
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
        $this->authorize('create',ResidentAgreement::class);
        return view('resident_agreements/create');
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
        $this->authorize('create',ResidentAgreement::class);
        $resident_agreement = new ResidentAgreement();

        $resident_agreement->r_name = request('r_name');
        $resident_agreement->room_no = request('room_no');
        $resident_agreement->bed = request('bed');
        $resident_agreement->dob = request('dob');
        $resident_agreement->guardian = request('guardian');
        $resident_agreement->admin = request('admin');
        $resident_agreement->p_nomini = request('p_nomini');
        $resident_agreement->i_period = request('i_period');
        $resident_agreement->f_period = request('f_period');
        $resident_agreement->ending_on = request('ending_on');
        $resident_agreement->acc_fee = request('acc_fee');
        $resident_agreement->pay_method = request('pay_method');
        $resident_agreement->freq_pay = request('freq_pay');
        $resident_agreement->advnc_fee = request('advnc_fee');
        $resident_agreement->adv_fee = "";
        $resident_agreement->secu_depo = request('secu_depo');
        $resident_agreement->reserv_fee = request('reserv_fee');
        $resident_agreement->condition_rep = request('condition_rep');
        $resident_agreement->res_service = request('res_service');
        $resident_agreement->spl_item = request('spl_item');
        $resident_agreement->pers_prop = request('pers_prop');
        $resident_agreement->user_id =  Auth::user()->id;
        
        $resident_agreement->save();
       
      $activity = new ActivityLog();

      $activity->user = Auth::user()->first_name;
      $activity->action = "Created";
      $activity->item = "Resident Agreement Report";
      $activity->save();

      return redirect()->route('resident_agreements.index')
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
        $this->authorize('show',ResidentAgreement::class);
        $resident_agreement = ResidentAgreement::find($id);
        return view('resident_agreements/show',compact('resident_agreement'));
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
    {
        $this->authorize('edit',ResidentAgreement::class);
        $resident_agreement = ResidentAgreement::find($id);
        return view('resident_agreements/edit',compact('resident_agreement'));
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
        $this->authorize('update', ResidentAgreement::class);
        $resident_agreement = ResidentAgreement::find($id);

        $resident_agreement->r_name = request('r_name');
        $resident_agreement->room_no = request('room_no');
        $resident_agreement->bed = request('bed');
        $resident_agreement->dob = request('dob');
        $resident_agreement->guardian = request('guardian');
        $resident_agreement->admin = request('admin');
        $resident_agreement->p_nomini = request('p_nomini');
        $resident_agreement->i_period = request('i_period');
        $resident_agreement->f_period = request('f_period');
        $resident_agreement->ending_on = request('ending_on');
        $resident_agreement->acc_fee = request('acc_fee');
        $resident_agreement->pay_method = request('pay_method');
        $resident_agreement->freq_pay = request('freq_pay');
        $resident_agreement->advnc_fee = request('advnc_fee');
        $resident_agreement->adv_fee = "";
        $resident_agreement->secu_depo = request('secu_depo');
        $resident_agreement->reserv_fee = request('reserv_fee');
        $resident_agreement->condition_rep = request('condition_rep');
        $resident_agreement->res_service = request('res_service');
        $resident_agreement->spl_item = request('spl_item');
        $resident_agreement->pers_prop = request('pers_prop');
        $resident_agreement->user_id =  Auth::user()->id;
        
        $resident_agreement->save();
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Updated";
        $activity->item = "Resident Agreement Report";
        $activity->save();

        return redirect()->route('resident_agreements.index')
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
        $this->authorize('destroy', ResidentAgreement::class);
        ResidentAgreement::destroy($id);
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Deleted";
        $activity->item = "Resident Agreement Report";
        $activity->save();
        return redirect()->route('resident_agreements.index')
                        ->with('success','deleted successfully');
    }

}
