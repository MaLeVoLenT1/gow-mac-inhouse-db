<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Instrument extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'instrument';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'instrument_name',
        'instrument_serial',
        'PN',
        'series_number',
        'power',
        'volts',
        'frequency',
        'approvals',
        'flow_system_number',
        'special_features',
        'design_status',
        'notes',

    ];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [

    ];

    public function customer(){
        return $this -> belongsTo('App\General_info');
    }
    public function attachment(){
        return $this -> hasMany('App\Attachments');
    }
    public function impurities(){
        return $this -> hasMany('App\Impurities');
    }
    public function base_gas_concentration(){
        return $this -> hasMany('App\Base_Gas_Concentration');
    }


}
