<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profileRegistration extends Model
{
    use HasFactory;

    protected $fillable = ['name','surname','email','country','city']; //resgatando campos preenchiveis da migrate

    protected $table = 'profile_registrations'; //nome da tabela
}
