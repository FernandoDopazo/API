<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class corporationRegistration extends Model
{
    use HasFactory;

    protected $fillable = ['profile_registrations_id','office','function','type_of_technology','company','modality','wage'];

    protected $table = 'corporation_registrations';

    public function seed()
    {
        return $this->hasOne(corporationRegistration::class);
    }
}
