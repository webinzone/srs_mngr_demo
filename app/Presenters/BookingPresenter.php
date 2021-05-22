<?php
namespace App\Presenters;

/**
 * Class AccessoryPresenter
 * @package App\Presenters
 */
class BookingPresenter extends Presenter
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
                "field" => "b_to",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('BookTo')
            ],[
                "field" => "bed",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Bed')
            ],[
                "field" => "pay_via",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Paying Via')
            ],[
                "field" => "quated_fee",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Quated Fee')
            ],[
                "field" => "freq_fee",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Freq Fee')
            ],[
                "field" => "dob",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('DOB')
            ],[
                "field" => "age",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Age')
            ],[
                "field" => "reffer_ph",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Reffering Contact Information')
            ],[
                "field" => "f_address",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Former Address')
            ],[
                "field" => "reason",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Reason or referral-details of discharge')
            ],[
                "field" => "p_car",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Personal car needs')
            ],[
                "field" => "d_history",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Diagnosis History')
            ],[
                "field" => "behav",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Behaviours-wandering/agression')
            ],[
                "field" => "substances",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('History of or current substance abuse')
            ],[
                "field" => "c_meds",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Current meds/assistance requierd')
            ],[
                "field" => "case_mngr",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Casemanager')
            ],[
                "field" => "social_wrkr",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Social Worker')
            ],[
                "field" => "forensic_history",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Forensichistory')
            ],[
                "field" => "notes",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Notes')
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
