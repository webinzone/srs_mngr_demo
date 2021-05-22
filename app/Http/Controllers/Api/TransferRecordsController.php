<?php

namespace App\Http\Controllers\Api;
use App\Http\Transformers\TransferRecordsTransformer;
use App\Http\Transformers\SelectlistTransformer;
use App\Models\TransferRecord;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class TransferRecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @since [v4.0]
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('index', TransferRecord::class);
        /**$complaints = Complaint::select(['id', 'f_name', 'user_name', 'c_name', 'com_details', 'com_nature', 'phone', 'suggestions', 'sign', 'action_date', 'action_taken', 'outcome']); */
        $transfer_records = TransferRecord::where('user_id', '=', Auth::user()->id);
       

        if ($request->filled('search')) {
            $transfer_records = $transfer_records->TextSearch($request->input('search'));
        }
        
        $offset = (($transfer_records) && ($request->get('offset') > $transfer_records->count())) ? $transfer_records->count() : $request->get('offset', 0);

        // Check to make sure the limit is not higher than the max allowed
        ((config('app.max_results') >= $request->input('limit')) && ($request->filled('limit'))) ? $limit = $request->input('limit') : $limit = config('app.max_results');

        $total = $transfer_records->count();
        $transfer_records = $transfer_records->skip($offset)->take($limit)->get();
        return (new TransferRecordsTransformer)->transformTransferRecords($transfer_records, $total);
    }


    
    
}
