<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Base_Gas_Concentration extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'base_gas_concentration';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'instrument_id',
        'name',
        'concentration',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function instrument(){
        return $this -> belongsTo('App\Instrument');
    }


}