<?php
namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests;
use App\Models\Incident;
use App\Models\ActivityLog;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Redirect;

/** This controller handles all actions related to Accessories for
 * the Snipe-IT Asset Management application.
 *
 * @version    v1.0
 */
class IncidentsController extends Controller
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
        $this->authorize('view', Incident::class);
        $incidents = Incident::all();
        return view('incidents/index',compact('incidents'));
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
        $this->authorize('create',Incident::class);
        return view('incidents/create');
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
        $this->authorize('create',Incident::class);
        $incident = new Incident();

        $incident->i_date = request('i_date');
        $incident->i_time = request('i_time');
        $incident->s_name = request('s_name');
        $incident->s_sign = request('s_sign');
        $incident->p_name = request('p_name');
        $incident->place = request('place');
        $incident->doctor = request('doctor');
        $incident->nok = request('nok');
        $incident->case_mgr = request('case_mgr');
        $incident->management = request('management');
        $incident->dhhs = request('dhhs');
        $incident->n_date = request('n_date');
        $incident->n_time = request('n_time');
        $incident->res_hos = request('res_hos');
        $incident->i_details = request('i_details');
        $incident->actions = request('actions');
        $incident->action_date = request('action_date');
        $incident->o_det = request('o_det');
        $incident->i_prescribed = request('i_prescribed');
        $incident->police_noti = request('police_noti');
        $incident->sp_update = request('sp_update');
        $incident->reported = request('reported');
        $incident->auth_name = request('auth_name');
        $incident->rep_date = request('rep_date');
        $incident->rep_time = request('rep_time');
        $incident->user_id =  Auth::user()->id;
        
        $incident->save();
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Created";
        $activity->item = "Incident Report";
        $activity->save();
    

        return redirect()->route('incidents.index')
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
        $this->authorize('show',Incident::class);
        $incident = Incident::find($id);
        return view('incidents/show',compact('incident'));
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
    {
        $this->authorize('edit',Incident::class);
        $incident = Incident::find($id);
        return view('incidents/edit',compact('incident'));
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
        $this->authorize('update', Incident::class);
        $incident = Incident::find($id);

        $incident->i_date = request('i_date');
        $incident->i_time = request('i_time');
        $incident->s_name = request('s_name');
        $incident->s_sign = request('s_sign');
        $incident->p_name = request('p_name');
        $incident->place = request('place');
        $incident->doctor = request('doctor');
        $incident->nok = request('nok');
        $incident->case_mgr = request('case_mgr');
        $incident->management = request('management');
        $incident->dhhs = request('dhhs');
        $incident->n_date = request('n_date');
        $incident->n_time = request('n_time');
        $incident->res_hos = request('res_hos');
        $incident->i_details = request('i_details');
        $incident->actions = request('actions');
        $incident->action_date = request('action_date');
        $incident->o_det = request('o_det');
        $incident->i_prescribed = request('i_prescribed');
        $incident->police_noti = request('police_noti');
        $incident->sp_update = request('sp_update');
        $incident->reported = request('reported');
        $incident->auth_name = request('auth_name');
        $incident->rep_date = request('rep_date');
        $incident->rep_time = request('rep_time');
        $incident->user_id =  Auth::user()->id;

        
        $incident->save();

        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Updated";
        $activity->item = "Incident Report";
        $activity->save();
    

        return redirect()->route('incidents.index')
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
        $this->authorize('destroy', Incident::class);
        Incident::destroy($id);
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Deleted";
        $activity->item = "Incident Report";
        $activity->save();
    
        return redirect()->route('incidents.index')
                        ->with('success','deleted successfully');
    }

    public function search(Request $request){
        $search = $request->input('search');

        $incidents = Incident::query()
            ->where('s_name', 'LIKE', "%{$search}%")
            ->orWhere('i_date', 'LIKE', "%{$search}%")
            ->get();

        return view('incidents/search', compact('incidents'));
       }

}
