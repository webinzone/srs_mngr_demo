<?php
namespace App\Http\Transformers;

use App\Helpers\Helper;
use Gate;
use App\Models\File;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class FilesTransformer
{

    public function transformFiles (Collection $files, $total)
    {
        $array = array();
        foreach ($files as $file) {
            $array[] = self::transformFile($file);
        }
        return (new DatatablesTransformer)->transformDatatables($array, $total);
    }

    public function transformFile (File $file = null)
    {
        if ($file) {

            $array = [
                'id' => (int) $file->id,
                'user_name' => e($file->user_name),
                'title' => e($file->title),
                'desc' => e($file->desc),
                'file_name' => e($file->file_name),
                'created_at' => e($file->created_at),
                'actions' => view('files/datatables_actions', compact('file'))->render() 
                
            ];


            return $array;
        }


    }



}
