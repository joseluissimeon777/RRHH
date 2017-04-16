<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{

    protected $table = 'home';


    public $fillable =[
        'nombre',
        'descripcion'
    ];


    protected $casts=[
        'nombre'=>'string',
        'descripcion'=>'string'
    ];





}
