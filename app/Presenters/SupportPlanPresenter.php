<?php
namespace App\Presenters;

/**
 * Class AccessoryPresenter
 * @package App\Presenters
 */
class SupportPlanPresenter extends Presenter
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
                "title" => trans('Name')
            ],[
                "field" => "hygiene",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Personal Hygiene')
            ],[
                "field" => "nutrition",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Eating ana Nutrition')
            ],[
                "field" => "health_care",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Health Care')
            ],[
                "field" => "medication",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Medication')
            ],[
                "field" => "social_contact",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Social Contact and Emotional Wellbeing')
            ],[
                "field" => "behaviour",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Behaviour')
            ],[
                "field" => "goals",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Goals/Finances/Other')
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
        return (string) link_to_route('support_plans.show', $this->f_name, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('support_plans.show', $this->id);
    }

    public function name()
    {
        return $this->model->f_name;
    }
}
