<?php
namespace App\Presenters;

/**
 * Class AccessoryPresenter
 * @package App\Presenters
 */
class ProgressPresenter extends Presenter
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
                "title" => trans('id'),
                "visible" => false
            ],[
                "field" => "name",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans(' Name')
            ],[
                "field" => "age",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Age')
            ],[
                "field" => "gender",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Gender')
            ],[
                "field" => "room_no",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Room no')
            ],[
                "field" => "p_note",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Progress not')
            ],[
                "field" => "sign",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Sign')
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
        return (string) link_to_route('progresses.show', $this->f_name, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('progresses.show', $this->id);
    }

    public function name()
    {
        return $this->model->f_name;
    }
}
