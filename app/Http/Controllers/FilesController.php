<?php
namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Http\Requests;
use App\Models\File;
use App\Models\ActivityLog;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Redirect;

/** This controller handles all actions related to Accessories for
 * the Snipe-IT Asset Management application.
 *
 * @version    v1.0
 */
class FilesController extends Controller
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
        $this->authorize('view', File::class);
        $files = File::all();
        return view('files/index',compact('files'));
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
        $this->authorize('create',File::class);
        return view('files/create');
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
        $this->authorize('create',File::class);
        $file = new File();

        $file->user_name = request('user_name');
        $file->title = request('title');
        $file->desc = request('desc');
        $file->file_name = request('file_name');
        $file->user_id =  Auth::user()->id;
        
        $file->save();
         $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Created";
        $activity->item = "File Report";
        $activity->save();
    
     

        return redirect()->route('files.index')
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
        $this->authorize('show',File::class);
        $file = File::find($id);
        return view('files/show',compact('file'));
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function edit($id)
    {
        $this->authorize('edit',File::class);
        $file = File::find($id);
        return view('files/edit',compact('file'));
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
        $this->authorize('update', File::class);
        $file = File::find($id);

       $file->user_name = request('user_name');
        $file->title = request('title');
        $file->desc = request('desc');
        $file->file_name = request('file_name');
        
        $file->save();
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Updated";
        $activity->item = "File Report";
        $activity->save();

        return redirect()->route('files.index')
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
        $this->authorize('destroy', File::class);
        File::destroy($id);
        $activity = new ActivityLog();

        $activity->user = Auth::user()->first_name;
        $activity->action = "Deleted";
        $activity->item = "File Report";
        $activity->save();
        return redirect()->route('files.index')
                        ->with('success','deleted successfully');
    }

}
