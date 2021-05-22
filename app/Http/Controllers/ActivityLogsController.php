<?php
namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests;
use App\Models\ActivityLog;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;
use Redirect;

/** This controller handles all actions related to Accessories for
 * the Snipe-IT Asset Management application.
 *
 * @version    v1.0
 */
class ActivityLogsController extends Controller
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
        $this->authorize('view', ActivityLog::class);
        $activity_logs = ActivityLog::all();
        return view('activity_logs/index',compact('activity_logs'));
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
        $this->authorize('create',ActivityLog::class);
        return view('activity_logs/create');
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
        $this->authorize('create',ActivityLog::class);
        $activity_log = new ActivityLog();

        $activity_log->user = '';
        $activity_log->action = '';
        $activity_log->item = '';
        
        $activity_log->save();
      

        return redirect()->route('activity_logs.index')
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
        $this->authorize('show',ActivityLog::class);
        $activity_log = ActivityLog::find($id);
        return view('activity_logs/show',compact('activity_log'));
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
    {
        $this->authorize('edit',ActivityLog::class);
        $activity_log = ActivityLog::find($id);
        return view('activity_logs/edit',compact('activity_log'));
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
        $this->authorize('update', ActivityLog::class);
        $activity_log = ActivityLog::find($id);

         $activity_log->user = request('user');
        $activity_log->action = request('action');
        $activity_log->item = request('item');
        
        $activity_log->save();

        return redirect()->route('activity_logs.index')
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
        $this->authorize('destroy', ActivityLog::class);
        ActivityLog::destroy($id);
        return redirect()->route('activity_logs.index')
                        ->with('success','deleted successfully');
    }

}
