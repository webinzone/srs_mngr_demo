<?php

namespace App\Http\Controllers\Api;
use App\Http\Transformers\ResidentAgreementsTransformer;
use App\Http\Transformers\SelectlistTransformer;
use App\Models\ResidentAgreement;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class ResidentAgreementsController extends Controller
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
        $this->authorize('index', ResidentAgreement::class);
        /**$complaints = Complaint::select(['id', 'f_name', 'user_name', 'c_name', 'com_details', 'com_nature', 'phone', 'suggestions', 'sign', 'action_date', 'action_taken', 'outcome']); */
        $resident_agreements = ResidentAgreement::where('user_id', '=', Auth::user()->id);
       

        if ($request->filled('search')) {
            $resident_agreements = $resident_agreements->TextSearch($request->input('search'));
        }
        
        $offset = (($resident_agreements) && ($request->get('offset') > $resident_agreements->count())) ? $resident_agreements->count() : $request->get('offset', 0);

        // Check to make sure the limit is not higher than the max allowed
        ((config('app.max_results') >= $request->input('limit')) && ($request->filled('limit'))) ? $limit = $request->input('limit') : $limit = config('app.max_results');

        $total = $resident_agreements->count();
        $resident_agreements = $resident_agreements->skip($offset)->take($limit)->get();
        return (new ResidentAgreementsTransformer)->transformResidentAgreements($resident_agreements, $total);
    }


    
    
}
