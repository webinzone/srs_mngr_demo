<?php
namespace App\Presenters;

/**
 * Class AccessoryPresenter
 * @package App\Presenters
 */
class TransferPresenter extends Presenter
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
                "field" => "user_name",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Resident Name')
            ],[
                "field" => "dob",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Date of birth')
            ],[
                "field" => "gender",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Gender')
            ],[
                "field" => "nationality",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Nationality')
            ],[
                "field" => "languages",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Languages Spoken')
            ],[
                "field" => "religion",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Religion')
            ],[
                "field" => "medicare_no",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Medicare no')
            ],[
                "field" => "pension_no",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Pension no')
            ],[
                "field" => "chemist",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Chemist Details')
            ],[
                "field" => "date",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Date')
            ],[
                "field" => "from",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('From')
            ],[
                "field" => "address",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Address')
            ],[
                "field" => "ph",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Phone')
            ],[
                "field" => "fax",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Fax')
            ],[
                "field" => "to",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('To')
            ],[
                "field" => "reason",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Reason for transfer')
            ],[
                "field" => "medication_chart",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Current Medication chart attached?')
            ],[
                "field" => "medication_list",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Medication List')
            ],[
                "field" => "websterpak",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Websterpak')
            ],[
                "field" => "medication_sent",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Medication Sent')
            ],[
                "field" => "last_time_medication",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Last Time Medication Given')
            ],[
                "field" => "accompanying_reports",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Accompanying Reports')
            ],[
                "field" => "next",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Next')
            ],[
                "field" => "advised",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Has been advised of the transfer')
            ],[
                "field" => "guardian",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Guardian')
            ],[
                "field" => "guardian_advised",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Has been advised of the transfer')
            ],[
                "field" => "case_manager",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Case Manager')
            ],[
                "field" => "case_manager_advised",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Has been advised of the transfer')
            ],[
                "field" => "nomini",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Person Nominated')
            ],[
                "field" => "nomini_advised",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Has been advised of the transfer')
            ],[
                "field" => "admin",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Administrator')
            ],[
                "field" => "admin_advised",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Has been advised of the transfer')
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
        return (string) link_to_route('transfers.show', $this->f_name, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('transfers.show', $this->id);
    }

    public function name()
    {
        return $this->model->f_name;
    }
}
