<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    protected $table = 'projects';
    public $timestamps = true;

   
    protected $fillable = [
        'title',
        'introduction',
        'created_at',
        'location'
    ];
}
