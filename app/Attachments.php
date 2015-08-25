<?php namespace App;

use Illuminate\Database\Eloquent\Model;


class Attachments extends Model {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'attachments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'instrument_id',
        'filename',
        'mime',
        'original_filename',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function customer(){
        return $this -> belongsTo('App\Instrument');
    }


}