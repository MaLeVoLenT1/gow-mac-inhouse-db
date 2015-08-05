<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class General_info extends Model {
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'general_info';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
        'customer_name',
        'address',
        'order_number',
        'quote_number',
        'date_ordered',
    ];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [

    ];

}
