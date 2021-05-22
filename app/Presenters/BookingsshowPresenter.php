<?php
namespace App\Presenters;

/**
 * Class AccessoryPresenter
 * @package App\Presenters
 */
class BookingsshowPresenter extends Presenter
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
                "field" => "c_name",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Client Name')
            ],[
                "field" => "b_from",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('BookFrom')
            ],[
                "field" => "created_at",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Created Date')
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
        return (string) link_to_route('bookings.show', $this->c_name, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('bookings.show', $this->id);
    }

    public function name()
    {
        return $this->model->c_name;
    }
}
