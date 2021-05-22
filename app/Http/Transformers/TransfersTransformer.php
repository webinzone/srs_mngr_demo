<?php
namespace App\Http\Transformers;

use App\Helpers\Helper;
use Gate;
use App\Models\Transfer;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class TransfersTransformer
{

    public function transformTransfers (Collection $transfers, $total)
    {
        $array = array();
        foreach ($transfers as $transfer) {
            $array[] = self::transformTransfer($transfer);
        }
        return (new DatatablesTransformer)->transformDatatables($array, $total);
    }

    public function transformTransfer (Transfer $transfer = null)
    {
        if ($transfer) {

            $array = [
                'id' => (int) $transfer->id,
                'user_name' => e($transfer->user_name),
                'dob' => e($transfer->dob),
                'gender' => e($transfer->gender),
                'nationality' => e($transfer->nationality),
                'languages' => e($transfer->languages),
                'religion' => e($transfer->religion),
                'medicare_no' => e($transfer->medicare_no),
                'pension_no' => e($transfer->pension_no),
                'chemist' => e($transfer->chemist),
                'date' => e($transfer->date),
                'from' => e($transfer->from),
                'address' => e($transfer->address),
                'ph' => e($transfer->ph),
                'fax' => e($transfer->fax),
                'to' => e($transfer->to),
                'reason' => e($transfer->reason),
                'medication_chart' => e($transfer->medication_chart),
                'medication_list' => e($transfer->medication_list),
                'websterpak' => e($transfer->websterpak),
                'medication_sent' => e($transfer->medication_sent),
                'last_time_medication' => e($transfer->last_time_medication),
                'accompanying_reports' => e($transfer->accompanying_reports),
                'next' => e($transfer->next),
                'advised' => e($transfer->advised),
                'guardian' => e($transfer->guardian),
                'guardian_advised' => e($transfer->guardian_advised),
                'case_manager' => e($transfer->case_manager),
                'case_manager_advised' => e($transfer->case_manager_advised),
                'nomini' => e($transfer->nomini),
                'nomini_advised' => e($transfer->nomini_advised),
                'admin' => e($transfer->admin),
                'admin_advised' => e($transfer->admin_advised),
                'created_at' => e($transfer->created_at),
                'actions' => view('transfers/datatables_actions', compact('transfer'))->render() 
                
            ];


            return $array;
        }


    }



}
