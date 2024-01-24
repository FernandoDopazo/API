<?php

namespace App\Services;

use App\Models\CorporationRegistration;
use Illuminate\Database\Eloquent\Collection;

class CorporationService
{
    public function getAllCorporative(): Collection
    {
        return CorporationRegistration::all();
    }

    public function createCorporation(array $data): CorporationRegistration
    {
        dd($data);
         return CorporationRegistration::create($data);
    }

    public function updateCorporation($id, array $data): ?CorporationRegistration
    {
        $corporation = CorporationRegistration::find($id);

        if ($corporation) {
            $corporation->update($data);
            return $corporation;
        }

        return null; // Or you can throw an exception if the record is not found.
    }

    public function getCorporationById($id): ?CorporationRegistration
    {
        return CorporationRegistration::find($id);
    }

    public function deleteCorporation($id): bool
    {
        $corporation = CorporationRegistration::find($id);

        if ($corporation) {
            $corporation->delete();
            return true;
        }

        return false; // Or you can throw an exception if the record is not found.
    }
}
