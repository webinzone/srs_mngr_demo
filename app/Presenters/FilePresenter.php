<?php
namespace App\Presenters;

/**
 * Class AccessoryPresenter
 * @package App\Presenters
 */
class FilePresenter extends Presenter
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
                "title" => trans('User Name')
            ],[
                "field" => "title",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Title')
            ],[
                "field" => "desc",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('Description')
            ],[
                "field" => "file_name",
                "searchable" => true,
                "sortable" => true,
                "visible" => true,
                "title" => trans('File Name')
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
        return (string) link_to_route('files.show', $this->user_name, $this->id);
    }

    /**
     * Url to view this item.
     * @return string
     */
    public function viewUrl()
    {
        return route('files.show', $this->id);
    }

    public function name()
    {
        return $this->model->user_name;
    }
}
