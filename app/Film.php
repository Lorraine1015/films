<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'year', 'duration', 'link','genre_id'
    ];
    
    public function catalogs(){
        return $this->belongsToMany('App\Catalog');

    }
    public function genre(){
        return $this->belongsTo('App\Genre');
    }
    
}
