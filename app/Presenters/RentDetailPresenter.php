<?php
namespace App\Presenters;

/**
 * Class AccessoryPresenter
 * @package App\Presenters
 */
class RentDetailPresenter extends Presenter
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
                "field" => "srs_name",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('SRS Name')
            ],[
                "field" => "rent_payment",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Rent Payment')
            ],[
                "field" => "res_name",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Resident Name')
            ],[
                "field" => "res_sign",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Resident Sign')
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
                "switchable" => false,
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
        return (string) link_to_route('rent_details.show', $this->srs_name, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('rent_details.show', $this->id);
    }

    public function name()
    {
        return $this->model->srs_name;
    }
}
