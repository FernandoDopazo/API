<?php

namespace App\Services;

use App\Models\profileRegistration;
use Illuminate\Database\Eloquent\Collection;

class ProfileService
{

    public function getAllProfiles(): Collection //método para resgatar uma coleção de perfis
    {
        return profileRegistration::all();
    }

    public function createProfiles(array $data): profileRegistration //método para inserção de dados no data base
    {
        return profileRegistration::create($data);
    }
}
