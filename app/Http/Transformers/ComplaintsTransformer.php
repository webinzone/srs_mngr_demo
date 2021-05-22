<?php
namespace App\Http\Transformers;

use App\Helpers\Helper;
use Gate;
use App\Models\Complaint;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class ComplaintsTransformer
{

    public function transformComplaints (Collection $complaints, $total)
    {
        $array = array();
        foreach ($complaints as $complaint) {
            $array[] = self::transformComplaint($complaint);
        }
        return (new DatatablesTransformer)->transformDatatables($array, $total);
    }

    public function transformComplaint (Complaint $complaint = null)
    {
        if ($complaint) {

            $array = [
                'id' => (int) $complaint->id,
                'f_name' => e($complaint->f_name),
                'user_name' => e($complaint->user_name),
                'c_name' => e($complaint->c_name),
                'com_details' => e($complaint->com_details),
                'com_nature' => e($complaint->com_nature),
                'phone' => e($complaint->phone),
                'suggestions' => e($complaint->suggestions),
                'sign' => e($complaint->sign),
                'action_date' => e($complaint->action_date),
                'action_taken' => e($complaint->action_taken),
                'outcome' => e($complaint->outcome),
                'created_at' => e($complaint->created_at),
                'actions' => view('complaints/datatables_actions', compact('complaint'))->render() 
                
            ];


            return $array;
        }


    }



}
