<?php
namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests;
use App\Models\ConditionReport;
use App\Models\ActivityLog;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Redirect;

/** This controller handles all actions related to Accessories for
 * the Snipe-IT Asset Management application.
 *
 * @version    v1.0
 */
class ConditionReportsController extends Controller
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
        $this->authorize('view', ConditionReport::class);
        $condition_reports = ConditionReport::all();
        return view('condition_reports/index',compact('condition_reports'));
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
        $this->authorize('create',ConditionReport::class);
        return view('condition_reports/create');
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
        $this->authorize('create',ConditionReport::class);
        $condition_report = new ConditionReport();

        $condition_report->room = request('room');
        $condition_report->items = request('items');
        $condition_report->clean = request('clean');
        $condition_report->undamaged = request('undamaged');
        $condition_report->working = request('working');
        $condition_report->prop_comments = request('prop_comments');
        $condition_report->res_comments = request('res_comments');
        $condition_report->user_id =  Auth::user()->id;
        
        $condition_report->save();
       
      $activity = new ActivityLog();

      $activity->user = Auth::user()->first_name;
      $activity->action = "Created";
      $activity->item = "Condition Report";
      $activity->save();

      return redirect()->route('condition_reports.index')
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
        $this->authorize('show',ConditionReport::class);
        $condition_report = ConditionReport::find($id);
        return view('condition_reports/show',compact('condition_report'));
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
    {
        $this->authorize('edit',ConditionReport::class);
        $condition_report = ConditionReport::find($id);
        return view('condition_reports/edit',compact('condition_report'));
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
        $this->authorize('update', ConditionReport::class);
        $condition_report = ConditionReport::find($id);

        $condition_report->room = request('room');
        $condition_report->items = request('items');
        $condition_report->clean = request('clean');
        $condition_report->undamaged = request('undamaged');
        $condition_report->working = request('working');
        $condition_report->prop_comments = request('prop_comments');
        $condition_report->res_comments = request('res_comments');
        $condition_report->user_id =  Auth::user()->id;
        
        $condition_report->save();
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Updated";
        $activity->item = "Condition Report";
        $activity->save();

        return redirect()->route('condition_reports.index')
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
        $this->authorize('destroy', ConditionReport::class);
        ConditionReport::destroy($id);
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Deleted";
        $activity->item = "Condition Report";
        $activity->save();
        return redirect()->route('condition_reports.index')
                        ->with('success','deleted successfully');
    }

}
