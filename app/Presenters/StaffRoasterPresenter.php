<?php
namespace App\Presenters;

/**
 * Class AccessoryPresenter
 * @package App\Presenters
 */
class StaffRoasterPresenter extends Presenter
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
                "field" => "s_date",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Date')
            ],[
                "field" => "s_name",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Staff Member')
            ],[
                "field" => "position",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Position')
            ],[
                "field" => "mon",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Monday')
            ],[
                "field" => "tues",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Tuesday')
            ],[
                "field" => "wed",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Wednsday')     
            ],[
                "field" => "thurs",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Thursday')
            ],[
                "field" => "fri",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Friday')
            ],[
                "field" => "sat",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Saturday')
            ],[
                "field" => "sun",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Sunday')
            ],[
                "field" => "total_hrs",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Total Hrs')
            ],[
                "field" => "total",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Total')
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
        return (string) link_to_route('staff_roasters.show', $this->f_name, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('staff_roasters.show', $this->id);
    }

    public function name()
    {
        return $this->model->f_name;
    }
}
