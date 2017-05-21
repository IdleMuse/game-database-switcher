<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameInstance extends Model
{
    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
