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
class TransferRecord extends SnipeModel
{
    protected $presenter = 'App\Presenters\TransferRecordPresenter';
    use Presentable;

    
    protected $table = 'transfer_records';
    protected $casts = [
        'requestable' => 'boolean'
    ];


    use Acceptable;
    
    /**
     * The attributes that should be included when searching the model.
     * 
     * @var array
     */
   
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
    protected $fillable = ['user_name', 'dob', 'gender', 'nation', 'lan', 'religion', 'medi_no', 'pension_no', 'chemist', 'date', 'from', 'address', 'ph', 'fax', 'to', 'reason', 'medi_chart', 'medi_list', 'webst', 'medi_sent', 'last_time_medi', 'accomp_rpt', 'next', 'advised', 'guardian', 'guardian_adv', 'case_mngr', 'case_mngr_adv', 'nomini', 'nomini_adv', 'admin', 'admin_adv'];



   

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
