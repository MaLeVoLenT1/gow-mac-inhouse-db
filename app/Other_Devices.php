<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Other_Devices extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'other_devices';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function instrument(){
        return $this -> belongsTo('App\General_info');
    }


}