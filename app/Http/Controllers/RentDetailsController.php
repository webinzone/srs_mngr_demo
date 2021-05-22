<?php
namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests;
use App\Models\RentDetail;
use App\Models\ActivityLog;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Redirect;

/** This controller handles all actions related to Accessories for
 * the Snipe-IT Asset Management application.
 *
 * @version    v1.0
 */
class RentDetailsController extends Controller
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
        $this->authorize('view', RentDetail::class);
        $rent_details = RentDetail::all();
        return view('rent_details/index',compact('rent_details'));
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
        $this->authorize('create', RentDetail::class);
        return view('rent_details/create');
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
        $this->authorize('create',RentDetail::class);
        $rent_detail = new RentDetail();
           
        $rent_detail->srs_name = request('srs_name');
        $rent_detail->rent_payment = request('rent_payment');
        $rent_detail->res_name = request('res_name');
        $rent_detail->res_sign = request('res_sign');
        $rent_detail->user_id =  Auth::user()->id;
        
        $rent_detail->save();      

        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Created";
        $activity->item = "Rent Details";
        $activity->save();
    

        return redirect()->route('rent_details.index')
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
        $this->authorize('show',RentDetail::class);
        $rent_detail = RentDetail::find($id);
        return view('rent_details/show',compact('rent_detail'));
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
    {
        $this->authorize('edit',RentDetail::class);
        $rent_detail = RentDetail::find($id);
        return view('rent_details/edit',compact('rent_detail'));
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
        $this->authorize('update', RentDetail::class);
        $rent_detail = RentDetail::find($id);

        $rent_detail->srs_name = request('srs_name');
        $rent_detail->rent_payment = request('rent_payment');
        $rent_detail->res_name = request('res_name');
        $rent_detail->res_sign = request('res_sign');
        $rent_detail->user_id =  Auth::user()->id;
        
        $rent_detail->save();

        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Updated";
        $activity->item = "Rent Details";
        $activity->save();
    

        return redirect()->route('rent_details.index')
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
        $this->authorize('destroy', RentDetail::class);
        RentDetail::destroy($id);
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Deleted";
        $activity->item = "Rent Details";
        $activity->save();
    
        return redirect()->route('rent_details.index')
                        ->with('success','deleted successfully');
    }

}
