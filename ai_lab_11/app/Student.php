<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'Imie',
        'Nazwisko',
        'adress_id',
    ];
}
