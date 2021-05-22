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
class Booking extends SnipeModel
{
    protected $presenter = 'App\Presenters\BookingPresenter';
    use Presentable;

    
    protected $table = 'bookings';
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


    protected $searchableAttributes = ['c_name', 'b_from', 'b_to', 'bed', 'pay_via', 'quated_fee', 'freq_fee', 'dob', 'age', 'reffer_ph', 'f_address', 'reason', 'p_car', 'd_history', 'behav', 'substances', 'c_meds', 'case_mngr', 'social_wrkr', 'forensic_history', 'notes'];

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
        'c_name', 
        'b_from', 
        'b_to', 'bed', 
        'pay_via', 
        'quated_fee', 
        'freq_fee', 
        'dob', 
        'age', 
        'reffer_ph', 
        'f_address', 
        'reason', 
        'p_car', 
        'd_history', 
        'behav', 
        'substances', 
        'c_meds', 
        'case_mngr', 
        'social_wrkr', 
        'forensic_history', 
        'notes'
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
