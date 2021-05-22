<?php
namespace App\Http\Transformers;

use App\Helpers\Helper;
use Gate;
use App\Models\Handover;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class HandoversTransformer
{

    public function transformHandovers (Collection $handovers, $total)
    {
        $array = array();
        foreach ($handovers as $handover) {
            $array[] = self::transformHandover($handover);
        }
        return (new DatatablesTransformer)->transformDatatables($array, $total);
    }

    public function transformHandover (Handover $handover = null)
    {
        if ($handover) {

            $array = [
                'id' => (int) $handover->id,
                'room' => e($handover->room),
                'res_name' => e($handover->res_name),
                'me_staffs' => e($handover->me_staffs),
                'em_staffs' => e($handover->em_staffs),
                'created_at' => e($handover->created_at),
                'actions' => view('handovers/datatables_actions', compact('handover'))->render() 
                
            ];


            return $array;
        }


    }



}
