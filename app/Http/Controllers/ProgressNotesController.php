<?php
namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests;
use App\Models\ProgressNote;
use App\Models\ActivityLog;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Redirect;

/** This controller handles all actions related to Accessories for
 * the Snipe-IT Asset Management application.
 *
 * @version    v1.0
 */
class ProgressNotesController extends Controller
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
        $this->authorize('view', ProgressNote::class);
        return view('progress_notes/index');
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
        $this->authorize('create',ProgressNote::class);
        return view('progress_notes/create');
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
        $this->authorize('create',ProgressNote::class);
        $progress_notes = new ProgressNote();

        $progress_notes->prg_note = request('prg_note');
        $progress_notes->staff = request('staff');
        $progress_notes->career = request('career');
        $progress_notes->user_id =  Auth::user()->id;
        
        $progress_notes->save();
      
         $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Created";
        $activity->item = "Progress Notes";
        $activity->save();
        return redirect()->route('progress_notes.index')
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
        $this->authorize('show',ProgressNote::class);
        $progress_note = ProgressNote::find($id);
        return view('progress_notes/show',compact('progress_note'));
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
    {
        $this->authorize('edit',ProgressNote::class);
        $progress_note = ProgressNote::find($id);
        return view('progress_notes/edit',compact('progress_note'));
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
        $this->authorize('update', ProgressNote::class);
        $progress_notes = ProgressNote::find($id);

        
        $progress_notes->prg_note = request('prg_note');
        $progress_notes->staff = request('staff');
        $progress_notes->career = request('career');
        $progress_notes->user_id =  Auth::user()->id;
        
     
        $progress_notes->save();
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Updated";
        $activity->item = "Progress Notes";
        $activity->save();

        return redirect()->route('progress_notes.index')
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
        $this->authorize('destroy', ProgressNote::class);
        ProgressNote::destroy($id);
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Deleted";
        $activity->item = "Progress Notes";
        $activity->save();
        return redirect()->route('progress_notes.index')
                        ->with('success','deleted successfully');
    }

}
