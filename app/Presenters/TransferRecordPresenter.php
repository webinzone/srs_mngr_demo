<?php
namespace App\Presenters;

/**
 * Class AccessoryPresenter
 * @package App\Presenters
 */
class TransferRecordPresenter extends Presenter
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
                "field" => "nation",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Nationality')
            ],[
                "field" => "lan",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Language Spoken')
            ],[
                "field" => "religion",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Religion')
            ],[
                "field" => "medi_no",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Medicare No')
            ],[
                "field" => "pension_no",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Pension No')
            ],[
                "field" => "chemist",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Chemist Detail')
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
                "title" => trans('Ph')
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
                "title" => trans('Reason For Transfer')
            ],[
                "field" => "medi_chart",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Current Medication Chart Attached?')
            ],[
                "field" => "medi_list",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('If no, list any medication the resident on')
            ],[
                "field" => "webst",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Websterpak')
            ],[
                "field" => "medi_sent",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('If no, list any medication sent with resident if any')
            ],[
                "field" => "last_time_medi",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Last time Medication given')
            ],[
                "field" => "accomp_rpt",
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
                "field" => "guardian_adv",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Has been advised of the transfer')
            ],[
                "field" => "case_mngr",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Case Manager')
            ],[
                "field" => "case_mngr_adv",
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
                "field" => "nomini_adv",
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
                "field" => "admin_adv",
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
        return (string) link_to_route('transfer_records.show', $this->user_name, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('transfer_records.show', $this->id);
    }

    public function name()
    {
        return $this->model->user_name;
    }
}
