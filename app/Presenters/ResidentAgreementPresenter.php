<?php
namespace App\Presenters;

/**
 * Class AccessoryPresenter
 * @package App\Presenters
 */
class ResidentAgreementPresenter extends Presenter
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
                "field" => "r_name",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Resident Name')
            ],[
                "field" => "room_no",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Room No')
            ],[
                "field" => "bed",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Bed')
            ],[
                "field" => "dob",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Date of Birth')
            ],[
                "field" => "guardian",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Guardian')
            ],[
                "field" => "admin",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Administrator')
            ],[
                "field" => "p_nomini",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Person Nominated')
            ],[
                "field" => "i_period",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Indefinite period of stay form')
            ],[
                "field" => "f_period",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Fixed period stay form')
            ],[
                "field" => "ending_on",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Ending on')
            ],[
                "field" => "acc_fee",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Fee for accommodation and personal support')
            ],[
                "field" => "pay_method",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('How to pay')
            ],[
                "field" => "freq_pay",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Frequency of payment')
            ],[
                "field" => "advnc_fee",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Fee in advance charged for other items/service provide by SRS')
            ],[
                "field" => "secu_depo",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Security deposite charged')
            ],[
                "field" => "reserv_fee",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Reservation for charged')
            ],[
                "field" => "condition_rep",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Condition report provided to the resident?')
            ],[
                "field" => "res_service",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Specify items and services provided to the resident')
            ],[
                "field" => "spl_item",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Any special items that may apply to the resident')
            ],[
                "field" => "pers_prop",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Personal properties belonging resident brought into SRS')
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
        return (string) link_to_route('resident_agreements.show', $this->r_name, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('resident_agreements.show', $this->id);
    }

    public function name()
    {
        return $this->model->r_name;
    }
}
