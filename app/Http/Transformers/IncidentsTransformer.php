<?php
namespace App\Http\Transformers;

use App\Helpers\Helper;
use Gate;
use App\Models\Incident;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class IncidentsTransformer
{

    public function transformIncidents (Collection $incidents, $total)
    {
        $array = array();
        foreach ($incidents as $incident) {
            $array[] = self::transformIncident($incident);
        }
        return (new DatatablesTransformer)->transformDatatables($array, $total);
    }

    public function transformIncident (Incident $incident = null)
    {
        if ($incident) {

            $array = [
                'id' => (int) $incident->id,
                'i_date' => e($incident->i_date),
                'i_time' => e($incident->i_time),
                's_name' => e($incident->s_name),
                's_sign' => e($incident->s_sign),
                'p_name' => e($incident->p_name),
                'place' => e($incident->place),
                'doctor' => e($incident->doctor),
                'nok' => e($incident->nok),
                'case_mgr' => e($incident->case_mgr),
                'management' => e($incident->management),
                'dhhs' => e($incident->dhhs),
                'n_date' => e($incident->n_date),
                'n_time' => e($incident->n_time),
                'res_hos' => e($incident->res_hos),
                'i_details' => e($incident->i_details),
                'actions' => e($incident->actions),
                'action_date' => e($incident->action_date),
                'o_det' => e($incident->o_det),
                'i_prescribed' => e($incident->i_prescribed),
                'police_noti' => e($incident->police_noti),
                'sp_update' => e($incident->sp_update),
                'reported' => e($incident->reported),
                'auth_name' => e($incident->auth_name),
                'rep_date' => e($incident->rep_date),
                'rep_time' => e($incident->rep_time),
                'created_at' => e($incident->created_at),
                'actions_taken' => view('incidents/datatables_actions', compact('incident'))->render() 
                
            ];


            return $array;
        }


    }



}
