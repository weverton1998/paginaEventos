<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];
    
    protected $dates = ['date'];

    //oq a model pode alterar
    protected $guarded = [];

    //um evento tem um dono
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    //eventosa que um ususario participa
    public function users() {
        return $this->belongsToMany('App\Models\User');
    }
}
