<?php
namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests;
use App\Models\TransferRecord;
use App\Models\ActivityLog;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Redirect;

/** This controller handles all actions related to Accessories for
 * the Snipe-IT Asset Management application.
 *
 * @version    v1.0
 */
class TransferRecordsController extends Controller
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
        $this->authorize('view', TransferRecord::class);
        return view('transfer_records/index');
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
        $this->authorize('create',TransferRecord::class);
        return view('transfer_records/create');
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
        $this->authorize('create',TransferRecord::class);
        $transfer_record = new TransferRecord();

        $transfer_record->user_name = request('user_name');
        $transfer_record->dob = request('dob');
        $transfer_record->gender = request('gender');
        $transfer_record->nation = request('nation');
        $transfer_record->lan = request('lan');
        $transfer_record->religion = request('religion');
        $transfer_record->medi_no = request('medi_no');
        $transfer_record->pension_no = request('pension_no');
        $transfer_record->chemist = request('chemist');
        $transfer_record->date = request('date');
        $transfer_record->from = request('from');
        $transfer_record->address = request('address');
        $transfer_record->ph = request('ph');
        $transfer_record->fax = request('fax');
        $transfer_record->to = request('to');
        $transfer_record->reason = request('reason');  
        $transfer_record->medi_chart = request('medi_chart');
        $transfer_record->medi_list = request('medi_list');
        $transfer_record->webst = request('webst');
        $transfer_record->medi_sent = request('medi_sent');
        $transfer_record->last_time_medi = request('last_time_medi');
        $transfer_record->accomp_rpt = request('accomp_rpt');
        $transfer_record->next = request('next');
        $transfer_record->advised = request('advised');
        $transfer_record->guardian = request('guardian');
        $transfer_record->guardian_adv = request('guardian_adv');
        $transfer_record->case_mngr = request('case_mngr');
        $transfer_record->case_mngr_adv = request('case_mngr_adv');
        $transfer_record->nomini = request('nomini');
        $transfer_record->nomini_adv = request('nomini_adv');
        $transfer_record->admin = request('admin');
        $transfer_record->admin_adv = request('admin_adv');
        $transfer_record->user_id =  Auth::user()->id;
        
        $transfer_record->save();
       
      $activity = new ActivityLog();

      $activity->user = Auth::user()->first_name;
      $activity->action = "Created";
      $activity->item = "Transfer Report";
      $activity->save();

      return redirect()->route('transfer_records.index')
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
        $this->authorize('show',TransferRecord::class);
        $transfer_record = TransferRecord::find($id);
        return view('transfer_records/show',compact('transfer_record'));
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
    {
        $this->authorize('edit',TransferRecord::class);
        $transfer_record = TransferRecord::find($id);
        return view('transfer_records/edit',compact('transfer_record'));
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
        $this->authorize('update', TransferRecord::class);
        $transfer_record = TransferRecord::find($id);

        $transfer_record->user_name = request('user_name');
        $transfer_record->dob = request('dob');
        $transfer_record->gender = request('gender');
        $transfer_record->nation = request('nation');
        $transfer_record->lan = request('lan');
        $transfer_record->religion = request('religion');
        $transfer_record->medi_no = request('medi_no');
        $transfer_record->pension_no = request('pension_no');
        $transfer_record->chemist = request('chemist');
        $transfer_record->date = request('date');
        $transfer_record->from = request('from');
        $transfer_record->address = request('address');
        $transfer_record->ph = request('ph');
        $transfer_record->fax = request('fax');
        $transfer_record->to = request('to');
        $transfer_record->reason = request('reason');
        $transfer_record->medi_chart = request('medi_chart');
        $transfer_record->medi_list = request('medi_list');
        $transfer_record->webst = request('webst');
        $transfer_record->medi_sent = request('medi_sent');
        $transfer_record->last_time_medi = request('last_time_medi');
        $transfer_record->accomp_rpt = request('accomp_rpt');
        $transfer_record->next = request('next');
        $transfer_record->advised = request('advised');
        $transfer_record->guardian = request('guardian');
        $transfer_record->guardian_adv = request('guardian_adv');
        $transfer_record->case_mngr = request('case_mngr');
        $transfer_record->case_mngr_adv = request('case_mngr_adv');
        $transfer_record->nomini = request('nomini');
        $transfer_record->nomini_adv = request('nomini_adv');
        $transfer_record->admin = request('admin');
        $transfer_record->admin_adv = request('admin_adv');
        $transfer_record->user_id =  Auth::user()->id;
        
        $transfer_record->save();
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Updated";
        $activity->item = "Transfer Report";
        $activity->save();

        return redirect()->route('transfer_records.index')
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
        $this->authorize('destroy', TransferRecord::class);
        TransferRecord::destroy($id);
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Deleted";
        $activity->item = "Transfer Report";
        $activity->save();
        return redirect()->route('transfer_records.index')
                        ->with('success','deleted successfully');
    }

}
