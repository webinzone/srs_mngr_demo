<?php
namespace App\Http\Transformers;

use App\Helpers\Helper;
use Gate;
use App\Models\Progress;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class ProgressesTransformer
{

    public function transformProgresses (Collection $Progresses, $total)
    {
        $array = array();
        foreach ($Progresses as $progress) {
            $array[] = self::transformProgress($progress);
        }
        return (new DatatablesTransformer)->transformDatatables($array, $total);
    }

    public function transformProgress (Progress $progress = null)
    {
        if ($progress) {

            $array = [
                'id' => (int) $progress->id,
                'name' => e($progress->name),
                'age' => e($progress->age),
                'gender' => e($progress->gender),
                'room_no' => e($progress->room_no),
                'p_note' => e($progress->p_note),
                'sign' => e($progress->sign),
               
                'created_at' => e($progress->created_at),
                'actions' => view('progresses/datatables_actions', compact('progress'))->render() 
                
            ];


            return $array;
        }


    }



}
