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
        'instrument_type',
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

}
