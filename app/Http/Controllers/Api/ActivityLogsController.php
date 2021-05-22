<?php

namespace App\Http\Controllers\Api;
use App\Http\Transformers\ActivityLogsTransformer;
use App\Http\Transformers\SelectlistTransformer;
use App\Models\ActivityLog;
use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use Illuminate\Http\Request;

class ActivityLogsController extends Controller
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
        $this->authorize('index', ActivityLog::class);
             
        $activity_logs = ActivityLog::select('user', 'action', 'item', 'created_at');

        $total = $activity_logs->count();
        $activity_logs = $activity_logs->get();
        return (new ActivityLogsTransformer)->transformActivityLogs($activity_logs, $total);
    }


    
    
}
