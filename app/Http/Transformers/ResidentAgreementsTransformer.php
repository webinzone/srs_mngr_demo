<?php
namespace App\Http\Transformers;

use App\Helpers\Helper;
use Gate;
use App\Models\ResidentAgreement;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class ResidentAgreementsTransformer
{

    public function transformResidentAgreements (Collection $resident_agreements, $total)
    {
        $array = array();
        foreach ($resident_agreements as $resident_agreement) {
            $array[] = self::transformResidentAgreement($resident_agreement);
        }
        return (new DatatablesTransformer)->transformDatatables($array, $total);
    }

    public function transformResidentAgreement (ResidentAgreement $resident_agreement = null)
    {
        if ($resident_agreement) {

            $array = [
                'id' => (int) $resident_agreement->id,
                'r_name' => e($resident_agreement->r_name),
                'room_no' => e($resident_agreement->room_no),
                'bed' => e($resident_agreement->bed),
                'dob' => e($resident_agreement->dob),
                'guardian' => e($resident_agreement->guardian),
                'admin' => e($resident_agreement->admin),
                'p_nomini' => e($resident_agreement->p_nomini),
                'i_period' => e($resident_agreement->i_period),
                'f_period' => e($resident_agreement->f_period),
                'ending_on' => e($resident_agreement->ending_on),
                'acc_fee' => e($resident_agreement->acc_fee),
                'pay_method' => e($resident_agreement->pay_method),
                'freq_pay' => e($resident_agreement->freq_pay),
                'advnc_fee' => e($resident_agreement->advnc_fee),
                'secu_depo' => e($resident_agreement->secu_depo),
                'reserv_fee' => e($resident_agreement->reserv_fee),
                'condition_rep' => e($resident_agreement->condition_rep),
                'res_service' => e($resident_agreement->res_service),
                'spl_item' => e($resident_agreement->spl_item),
                'pers_prop' => e($resident_agreement->pers_prop),
                'created_at' => e($resident_agreement->created_at),
                'actions' => view('resident_agreements/datatables_actions', compact('resident_agreement'))->render() 
                
            ];


            return $array;
        }


    }



}
