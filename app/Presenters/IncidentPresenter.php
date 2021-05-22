<?php
namespace App\Presenters;

/**
 * Class AccessoryPresenter
 * @package App\Presenters
 */
class IncidentPresenter extends Presenter
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
                "field" => "i_date",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Incident Date')
            ],[
                "field" => "i_time",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Incident Time')
            ],[
                "field" => "s_name",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Staff Name')
            ],[
                "field" => "s_sign",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Staff Sign')
            ],[
                "field" => "p_name",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Person effected in incident')
            ],[
                "field" => "place",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Location')
            ],[
                "field" => "doctor",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Doctor')
            ],[
                "field" => "nok",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('NOK')
            ],[
                "field" => "case_mgr",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Case Mgr')
            ],[
                "field" => "management",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Management')
            ],[
                "field" => "dhhs",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('DHSS')
            ],[
                "field" => "n_date",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Notified Date')
            ],[
                "field" => "n_time",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Notified Time')
            ],[
                "field" => "res_hos",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Resident transfferd to the hospital')
            ],[
                "field" => "i_details",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Incident Details')
            ],[
                "field" => "actions",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Action Taken')
            ],[
                "field" => "action_date",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Action Date')
            ],[
                "field" => "o_det",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Other Details')
            ],[
                "field" => "i_prescribed",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Prescribed reportable incident')
            ],[
                "field" => "police_noti",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Police notified')
            ],[
                "field" => "sp_update",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Does the resident’s support plan need updating')
            ],[
                "field" => "reported",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Reported to the Department')
            ],[
                "field" => "auth_name",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Authorized Officer’s Name')
            ],[
                "field" => "rep_date",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Reported Date')
            ],[
                "field" => "rep_time",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Reported Time')    
            ],[
                "field" => "created_at",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Created Date')
            ],[
                "field" => "actions_taken",
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
        return (string) link_to_route('incidents.show', $this->f_name, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('incidents.show', $this->id);
    }

    public function name()
    {
        return $this->model->f_name;
    }
}
