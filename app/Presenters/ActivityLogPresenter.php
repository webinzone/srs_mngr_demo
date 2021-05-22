<?php
namespace App\Presenters;

/**
 * Class AccessoryPresenter
 * @package App\Presenters
 */
class ActivityLogPresenter extends Presenter
{
    /**
     * Json Column Layout for bootstrap table
     * @return string
     */
    public static function dataTableLayout()
    {
        $layout = [
                      
           [
                "field" => "created_at",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Created Date')
            ],[
                "field" => "user",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('User Name')
            ],[
                "field" => "action",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Action')
            ],[
                "field" => "item",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Item')
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
        return (string) link_to_route('activity_logs.show', $this->f_name, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('activity_logs.show', $this->id);
    }

    public function name()
    {
        return $this->model->f_name;
    }
}
