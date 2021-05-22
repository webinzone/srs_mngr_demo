<?php
namespace App\Models;

use App\Models\Traits\Acceptable;
use App\Models\Traits\Searchable;
use App\Presenters\Presentable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Watson\Validating\ValidatingTrait;

/**
 * Model for Accessories.
 *
 * @version    v1.0
 */
class Transfer extends SnipeModel
{
    protected $presenter = 'App\Presenters\TransferPresenter';
    use Presentable;

    
    protected $table = 'transfers';
    protected $casts = [
        'requestable' => 'boolean'
    ];


    use Acceptable;
    
    /**
     * The attributes that should be included when searching the model.
     * 
     * @var array
     */
    use Searchable;


    protected $searchableAttributes = ['user_name', 'dob', 'gender', 'nationality', 'languages', 'religion', 'medicare_no', 'pension_no', 'chemist', 'date', 'from', 'address', 'ph', 'fax', 'to', 'reason', 'medication_chart', 'medication_list', 'websterpak', 'medication_sent', 'last_time_medication', 'accompanying_reports', 'next', 'advised', 'guardian', 'guardian_advised', 'case_manager', 'case_manager_advised', 'nomini', 'nomini_advised', 'admin', 'admin_advised'];

    /**
     * The relations and their attributes that should be included when searching the model.
     * 
     * @var array
     */
   
    /**
    * Accessory validation rules
    */
   


    /**
    * Whether the model should inject it's identifier to the unique
    * validation rules before attempting validation. If this property
    * is not set in the model it will default to true.
    *
    * @var boolean
    */

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name', 
        'dob', 
        'gender', 
        'nationality', 
        'languages', 
        'religion', 
        'medicare_no', 
        'pension_no', 
        'chemist', 
        'date', 
        'from', 
        'address', 
        'ph', 
        'fax', 
        'to', 
        'reason', 
        'medication_chart', 
        'medication_list',
        'websterpak', 
        'medication_sent', 
        'last_time_medication', 
        'accompanying_reports', 
        'next', 
        'advised', 
        'guardian', 
        'guardian_advised', 
        'case_manager', 
        'case_manager_advised', 
        'nomini', 
        'nomini_advised', 
        'admin', 
        'admin_advised'
    ];



   

    /**
     * Sets the requestable attribute on the accessory
     *
     * @author [A. Gianotto] [<snipe@snipe.net>]
     * @since [v4.0]
     * @return void
     */
    public function setRequestableAttribute($value)
    {
        if ($value == '') {
            $value = null;
        }
        $this->attributes['requestable'] = filter_var($value, FILTER_VALIDATE_BOOLEAN);
        return;
  }
}
