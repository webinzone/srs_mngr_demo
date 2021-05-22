<?php
namespace App\Presenters;

/**
 * Class AccessoryPresenter
 * @package App\Presenters
 */
class HandoverPresenter extends Presenter
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
                "field" => "room",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Room')
            ],[
                "field" => "res_name",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Resident Name')
            ],[
                "field" => "me_staffs",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Morning Staff-Evening Staff')
            ],[
                "field" => "em_staffs",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Evening Staff-Morning Staff')
           
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
        return (string) link_to_route('handovers.show', $this->f_name, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('handovers.show', $this->id);
    }

    public function name()
    {
        return $this->model->f_name;
    }
}
