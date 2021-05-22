<?php
namespace App\Http\Transformers;

use App\Helpers\Helper;
use Gate;
use App\Models\ProgressNote;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class ProgressNotesTransformer
{

    public function transformProgressNotes (Collection $progress_notes, $total)
    {
        $array = array();
        foreach ($progress_notes as $progress_note) {
            $array[] = self::transformProgressNote($progress_note);
        }
        return (new DatatablesTransformer)->transformDatatables($array, $total);
    }

    public function transformProgressNote (ProgressNote $progress_note = null)
    {
        if ($progress_note) {

            $array = [
                'id' => (int) $progress_note->id,
                'prg_note' => e($progress_note->prg_note),
                'staff' => e($progress_note->staff),
                'career' => e($progress_note->career),

                'created_at' => e($progress_note->created_at),
                'actions' => view('progress_notes/datatables_actions', compact('progress_note'))->render() 
                
            ];


            return $array;
        }


    }



}
