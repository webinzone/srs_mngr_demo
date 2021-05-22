<?php
namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests;
use App\Models\Transfer;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Redirect;

/** This controller handles all actions related to Accessories for
 * the Snipe-IT Asset Management application.
 *
 * @version    v1.0
 */
class TransfersController extends Controller
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
        $this->authorize('view', Transfer::class);
        return view('transfers/index');
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
        $this->authorize('create',Transfer::class);
        return view('transfers/create');
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
        $this->authorize('create',Transfer::class);
        $transfer = new Transfer();

        $transfer->user_name = request('user_name');
        $transfer->dob = request('dob');
        $transfer->gender = request('gender');
        $transfer->nationality = request('nationality');
        $transfer->languages = request('languages');
        $transfer->religion = request('religion');
        $transfer->medicare_no = request('medicare_no');
        $transfer->pension_no = request('pension_no');
        $transfer->chemist = request('chemist');
        $transfer->date = request('date');
        $transfer->from = request('from');
        $transfer->address = request('address');
        $transfer->ph = request('ph');
        $transfer->fax = request('fax');                
        $transfer->to = request('to');
        $transfer->reason = request('reason');
        $transfer->medication_chart = request('medication_chart');
        $transfer->medication_list = request('medication_list');
        $transfer->websterpak = request('websterpak');
        $transfer->medication_sent = request('medication_sent');
        $transfer->last_time_medication = request('last_time_medication');
        $transfer->accompanying_reports = request('accompanying_reports');
        $transfer->next = request('next');
        $transfer->advised = request('advised');
        $transfer->guardian = request('guardian');
        $transfer->guardian_advised = request('guardian_advised');
        $transfer->case_manager = request('case_manager');
        $transfer->case_manager_advised = request('case_manager_advised');
        $transfer->nomini = request('nomini');
        $transfer->nomini_advised = request('nomini_advised');
        $transfer->admin = request('admin');
        $transfer->admin_advised = request('admin_advised');
        $transfer->user_id =  Auth::user()->id;
        
        $transfer->save();

         $activity = new ActivityLog();

          $activity->user = Auth::user()->first_name;
          $activity->action = "Created";
          $activity->item = "Transfers Records";
          $activity->save();
      

        return redirect()->route('transfers.index')
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
        $this->authorize('show',Transfer::class);
        $transfer = Transfer::find($id);
        return view('transfers/show',compact('transfer'));
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
    {
        $this->authorize('edit',Transfer::class);
        $transfer = Transfer::find($id);
        return view('transfers/edit',compact('transfer'));
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
        $this->authorize('update', Transfer::class);
        $transfer = Transfer::find($id);

       $transfer->user_name = request('user_name');
        $transfer->dob = request('dob');
        $transfer->gender = request('gender');
        $transfer->nationality = request('nationality');
        $transfer->languages = request('languages');
        $transfer->religion = request('religion');
        $transfer->medicare_no = request('medicare_no');
        $transfer->pension_no = request('pension_no');
        $transfer->chemist = request('chemist');
        $transfer->date = request('date');
        $transfer->from = request('from');
        $transfer->address = request('address');
        $transfer->ph = request('ph');
        $transfer->fax = request('fax');
        $transfer->to = request('to');
        $transfer->reason = request('reason');
        $transfer->medication_chart = request('medication_chart');
        $transfer->medication_list = request('medication_list');
        $transfer->websterpak = request('websterpak');
        $transfer->medication_sent = request('medication_sent');
        $transfer->last_time_medication = request('last_time_medication');
        $transfer->accompanying_reports = request('accompanying_reports');
        $transfer->next = request('next');
        $transfer->advised = request('advised');
        $transfer->guardian = request('guardian');
        $transfer->guardian_advised = request('guardian_advised');
        $transfer->case_manager = request('case_manager');
        $transfer->case_manager_advised = request('case_manager_advised');
        $transfer->nomini = request('nomini');
        $transfer->nomini_advised = request('nomini_advised');
        $transfer->admin = request('admin');
        $transfer->admin_advised = request('admin_advised');
        
        $transfer->save();


        return redirect()->route('transfers.index')
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
        $this->authorize('destroy', Transfer::class);
        Transfer::destroy($id);
        $activity = new ActivityLog();

      $activity->user = Auth::user()->first_name;
      $activity->action = "Deleted";
      $activity->item = "Transfers Records";
      $activity->save();
        return redirect()->route('transfers.index')
                        ->with('success','deleted successfully');
    }

}
