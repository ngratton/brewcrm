<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'prenom',
        'nom',
        'titre',
        'email_1',
        'email_1_type',
        'email_2',
        'email_2_type',
        'phone_1',
        'phone_1_type',
        'phone_2',
        'phone_2_type',
        'companie_id',
        'notes',
    ];
}
