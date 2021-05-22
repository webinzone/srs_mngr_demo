<?php
namespace App\Http\Transformers;

use App\Helpers\Helper;
use Gate;
use App\Models\StaffRoaster;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class StaffRoastersTransformer
{

    public function transformStaffRoasters (Collection $staff_roasters, $total)
    {
        $array = array();
        foreach ($staff_roasters as $staff_roaster) {
            $array[] = self::transformStaffRoaster($staff_roaster);
        }
        return (new DatatablesTransformer)->transformDatatables($array, $total);
    }

    public function transformStaffRoaster (StaffRoaster $staff_roaster = null)
    {
        if ($staff_roaster) {

            $array = [
                'id' => (int) $staff_roaster->id,
                's_date' => e($staff_roaster->s_date),
                's_name' => e($staff_roaster->s_name),
                'position' => e($staff_roaster->position),
                'mon' => e($staff_roaster->mon),
                'tues' => e($staff_roaster->tues),
                'wed' => e($staff_roaster->wed),
                'thurs' => e($staff_roaster->thurs),
                'fri' => e($staff_roaster->fri),
                'sat' => e($staff_roaster->sat),
                'sun' => e($staff_roaster->sun),
                'total_hrs' => e($staff_roaster->total_hrs),
                'total' => e($staff_roaster->total),
                'created_at' => e($staff_roaster->created_at),
                'actions' => view('staff_roasters/datatables_actions', compact('staff_roaster'))->render() 
                
            ];


            return $array;
        }


    }



}
