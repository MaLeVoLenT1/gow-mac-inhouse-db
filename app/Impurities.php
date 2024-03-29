<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Impurities extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'impurities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'percentage',
        'instrument_id'

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