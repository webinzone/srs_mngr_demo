<?php
namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests;
use App\Models\Progress;
use App\Models\ActivityLog;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Redirect;

/** This controller handles all actions related to Accessories for
 * the Snipe-IT Asset Management application.
 *
 * @version    v1.0
 */
class ProgressesController extends Controller
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
        $this->authorize('view', Progress::class);
        $progresses = Progress::all();
        return view('progresses/index',compact('progresses'));
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
        $this->authorize('create',Progress::class);
        return view('progresses/create');
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
        $this->authorize('create',Progress::class);
        $progress = new Progress();

        $progress->name = request('name');
        $progress->age = request('age');
        $progress->gender = request('gender');
        $progress->room_no = request('room_no');
        $progress->p_note = request('p_note');
        $progress->sign = request('sign');
        
        $progress->user_id =  Auth::user()->id;
        
        $progress->save();
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Created";
        $activity->item = "Progress Report";
        $activity->save();
    

        return redirect()->route('progresses.index')
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
        $this->authorize('show',Progress::class);
        $progress = Progress::find($id);
        return view('progresses/show',compact('progress'));
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
    {
        $this->authorize('edit',Progress::class);
        $progress = Progress::find($id);
        return view('progresses/edit',compact('progress'));
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
        $this->authorize('update', Progress::class);
        $progress = Progress::find($id);

        $progress->name = request('name');
        $progress->age = request('age');
        $progress->gender = request('gender');
        $progress->room_no = request('room_no');
        $progress->p_note = request('p_note');
        $progress->sign = request('sign');
        
        $progress->user_id =  Auth::user()->id;
        
        $progress->save();

        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Updated";
        $activity->item = "Progress Report";
        $activity->save();
    

        return redirect()->route('progresses.index')
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
        $this->authorize('destroy', Progress::class);
        Progress::destroy($id);
         $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Deleted";
        $activity->item = "Progress Report";
        $activity->save();
    
        return redirect()->route('progresses.index')
                        ->with('success','deleted successfully');
    }

}
