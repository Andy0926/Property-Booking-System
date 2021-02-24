<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $table = 'property';
    protected $fillable = ['name','type','location','agent','price','bed','bath','garage','area','summary','description'];

    public function image(){
        return $this -> hasOne('App\Image');
    }
}
