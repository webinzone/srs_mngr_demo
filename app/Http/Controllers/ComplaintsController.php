<?php
namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests;
use App\Models\Complaint;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Redirect;

/** This controller handles all actions related to Accessories for
 * the Snipe-IT Asset Management application.
 *
 * @version    v1.0
 */
class ComplaintsController extends Controller
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
        $this->authorize('view', Complaint::class);
        $complaints = Complaint::all();
        return view('complaints/index',compact('complaints'));
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
        $this->authorize('create',Complaint::class);
        return view('complaints/create');
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
        $this->authorize('create',Complaint::class);
        $complaint = new Complaint();

        $complaint->f_name = request('f_name');
        $complaint->user_name = request('user_name');
        $complaint->c_name = request('c_name');
        $complaint->com_details = request('com_details');
        $complaint->com_nature = request('com_nature');
        $complaint->phone = request('phone');
        $complaint->suggestions = request('suggestions');
        $complaint->sign = request('sign');
        $complaint->action_date = request('action_date');
        $complaint->action_taken = request('action_taken');
        $complaint->outcome = request('outcome');
        $complaint->user_id =  Auth::user()->id;  

        $complaint->save(); 

        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Created";
        $activity->item = "Complaints";
        $activity->save();
    
     
        return redirect()->route('complaints.index')
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
        $this->authorize('show',Complaint::class);
        $complaint = Complaint::find($id);
        return view('complaints/show',compact('complaint'));
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
    {
        $this->authorize('edit',Complaint::class);
        $complaint = Complaint::find($id);
        return view('complaints/edit',compact('complaint'));
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
        $this->authorize('update', Complaint::class);
        $complaint = Complaint::find($id);

        $complaint->f_name = request('f_name');
        $complaint->user_name = request('user_name');
        $complaint->c_name = request('c_name');
        $complaint->com_details = request('com_details');
        $complaint->com_nature = request('com_nature');
        $complaint->phone = request('phone');
        $complaint->suggestions = request('suggestions');
        $complaint->sign = request('sign');
        $complaint->action_date = request('action_date');
        $complaint->action_taken = request('action_taken');
        $complaint->outcome = request('outcome');
        
        $complaint->save();

        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Updated";
        $activity->item = "Complaints";
        $activity->save();
    

        return redirect()->route('complaints.index')
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
        $this->authorize('destroy', Complaint::class);
        Complaint::destroy($id);
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Deleted";
        $activity->item = "Complaints";
        $activity->save();
    
        return redirect()->route('complaints.index')
                        ->with('success','deleted successfully');
    }

}
