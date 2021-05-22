<?php
namespace App\Http\Transformers;

use App\Helpers\Helper;
use Gate;
use App\Models\ActivityLog;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class ActivityLogsTransformer
{

    public function transformActivityLogs (Collection $activity_logs, $total)
    {
        $array = array();
        foreach ($activity_logs as $activity_log) {
            $array[] = self::transformActivityLog($activity_log);
        }
        return (new DatatablesTransformer)->transformDatatables($array, $total);
    }

    public function transformActivityLog (ActivityLog $activity_log = null)
    {
        if ($activity_log) {

            $array = [
                'created_at' => date('j F Y h:i A', strtotime($activity_log->created_at)),
                'user' => e($activity_log->user),
                'action' => e($activity_log->action),
                'item' => e($activity_log->item),
                
            ];


            return $array;
        }


    }



}
