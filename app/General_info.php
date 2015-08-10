<?php namespace App;

use Carbon\Carbon;
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

    public function setDateOrdered($date)
    {
        $this->attributes['date_ordered'] = Carbon::createFromFormat('y-m-d', $date);
    }
    public function instruments()
    {
        return $this -> hasMany('App\Instrument');

    }
}
