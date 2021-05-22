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
class ResidentAgreement extends SnipeModel
{
    protected $presenter = 'App\Presenters\ResidentAgreementPresenter';
    use Presentable;

    
    protected $table = 'resident_agreements';
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


    protected $searchableAttributes = ['r_name', 'room_no', 'bed', 'dob', 'guardian', 'admin', 'p_nomini', 'i_period', 'f_period', 'ending_on', 'acc_fee', 'pay_method', 'freq_pay', 'advnc_fee','secu_depo', 'secu_depo', 'reserv_fee', 'condition_rep', 'res_service', 'spl_item', 'pers_prop'];

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
        'r_name', 
        'room_no', 
        'bed', 
        'dob', 
        'guardian', 
        'admin', 
        'p_nomini', 
        'i_period', 
        'f_period', 
        'ending_on', 
        'acc_fee', 
        'pay_method', 
        'freq_pay', 
        'advnc_fee', 
        'secu_depo', 
        'secu_depo', 
        'reserv_fee', 
        'condition_rep', 
        'res_service', 
        'spl_item', 
        'pers_prop'
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
