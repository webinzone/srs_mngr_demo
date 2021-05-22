<?php
namespace App\Http\Transformers;

use App\Helpers\Helper;
use Gate;
use App\Models\TransferRecord;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class TransferRecordsTransformer
{

    public function transformTransferRecords (Collection $transfer_records, $total)
    {
        $array = array();
        foreach ($transfer_records as $transfer_record) {
            $array[] = self::transformTransferRecord($transfer_record);
        }
        return (new DatatablesTransformer)->transformDatatables($array, $total);
    }

    public function transformTransferRecord (TransferRecord $transfer_record = null)
    {
        if ($transfer_record) {

            $array = [
                'id' => (int) $transfer_record->id,
                'user_name' => e($transfer_record->user_name),
                'dob' => e($transfer_record->dob),
                'gender' => e($transfer_record->gender),
                'nation' => e($transfer_record->nation),
                'lan' => e($transfer_record->lan),
                'religion' => e($transfer_record->religion),
                'medi_no' => e($transfer_record->medi_no),
                'pension_no' => e($transfer_record->pension_no),
                'chemist' => e($transfer_record->chemist),
                'date' => e($transfer_record->date),
                'from' => e($transfer_record->from),
                'address' => e($transfer_record->address),
                'ph' => e($transfer_record->ph),
                'to' => e($transfer_record->to),
                'reason' => e($transfer_record->reason),
                'medi_chart' => e($transfer_record->medi_chart),
                'medi_list' => e($transfer_record->medi_list),
                'webst' => e($transfer_record->webst),
                'medi_sent' => e($transfer_record->medi_sent),
                'last_time_medi' => e($transfer_record->last_time_medi),
                'accomp_rpt' => e($transfer_record->accomp_rpt),
                'next' => e($transfer_record->next),
                'advised' => e($transfer_record->advised),
                'guardian' => e($transfer_record->guardian),
                'guardian_adv' => e($transfer_record->guardian_adv),
                'case_mngr' => e($transfer_record->case_mngr),
                'case_mngr_adv' => e($transfer_record->case_mngr_adv),
                'nomini' => e($transfer_record->nomini),
                'nomini_adv' => e($transfer_record->nomini_adv),
                'admin' => e($transfer_record->admin),
                'admin_adv' => e($transfer_record->admin_adv),
                'created_at' => e($transfer_record->created_at),
                'actions' => view('transfer_records/datatables_actions', compact('transfer_record'))->render() 
                
            ];


            return $array;
        }


    }



}
