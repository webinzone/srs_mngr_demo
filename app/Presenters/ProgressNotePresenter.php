<?php
namespace App\Presenters;

/**
 * Class AccessoryPresenter
 * @package App\Presenters
 */
class ProgressNotePresenter extends Presenter
{
    /**
     * Json Column Layout for bootstrap table
     * @return string
     */
    public static function dataTableLayout()
    {
        $layout = [
            [
                "field" => "id",
                "searchable" => false,
                "sortable" => true,
                "switchable" => true,
                "title" => trans('Id'),
                "visible" => false
            ],[
                "field" => "prg_note",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans(' Prg_Note')
            ],[
                "field" => "staff",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Staff')
            ],[
                "field" => "career",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Career')
            ],[
                "field" => "created_at",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Created Date')
            ],[
                "field" => "actions",
                "searchable" => false,
                "sortable" => false,
                "title" => trans('table.actions'),
                "visible" => true
            ]
                
        ];

        return json_encode($layout);
    }


    /**
     * Pregenerated link to this accessories view page.
     * @return string
     */
    public function nameUrl()
    {
        return (string) link_to_route('progress_notes.show', $this->f_name, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('progress_notes.show', $this->id);
    }

    public function name()
    {
        return $this->model->f_name;
    }
}
