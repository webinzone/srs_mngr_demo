<?php
namespace App\Http\Transformers;

use App\Helpers\Helper;
use Gate;
use App\Models\RentDetail;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class RentDetailsTransformer
{

    public function transformRentDetails (Collection $rent_details, $total)
    {
        $array = array();
        foreach ($rent_details as $rent_detail) {
            $array[] = self::transformRentDetail($rent_detail);
        }
        return (new DatatablesTransformer)->transformDatatables($array, $total);
       
    }

    public function transformRentDetail (RentDetail $rent_detail = null)
    {
        if ($rent_detail) {

            $array = [
                'id' => (int) $rent_detail->id,
                'srs_name' => e($rent_detail->srs_name),
                'rent_payment' => e($rent_detail->rent_payment),
                'res_name' => e($rent_detail->res_name),
                'res_sign' => e($rent_detail->res_sign),
                'created_at' => e($rent_detail->created_at),
                'actions' => view('rent_details/datatables_actions', compact('rent_detail'))->render()               
            ];
            

            return $array;
        }


    }
   
}
