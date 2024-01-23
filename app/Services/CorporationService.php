<?php

namespace App\Services;

use App\Models\corporationRegistration;
use Illuminate\Database\Eloquent\Collection;

class CorporationService
{
    public function getAllCorporative(): Collection
    {
        return corporationRegistration::all();
    }

    public function createCorporation(array $data): corporationRegistration
    {
        return corporationRegistration::create($data);
    }
}
