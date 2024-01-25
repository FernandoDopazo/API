<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class corporationRegistration extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = ['office', 'function', 'type_of_technology', 'company', 'modality', 'wage'];

    protected $table = 'corporation_registrations';
}
