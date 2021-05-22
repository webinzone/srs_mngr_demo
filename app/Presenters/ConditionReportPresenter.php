<?php
namespace App\Presenters;

/**
 * Class AccessoryPresenter
 * @package App\Presenters
 */
class ConditionReportPresenter extends Presenter
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
                "field" => "items",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Items')
            ],[
                "field" => "clean",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Clean')
            ],[
                "field" => "undamaged",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Undamaged')
            ],[
                "field" => "working",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Working')
            ],[
                "field" => "prop_comments",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Landlord/Proprietor Comments')
            ],[
                "field" => "res_comments",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Resident Comments')
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
        return (string) link_to_route('condition_reports.show', $this->room, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('condition_reports.show', $this->id);
    }

    public function name()
    {
        return $this->model->room;
    }
}
