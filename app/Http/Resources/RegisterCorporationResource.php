<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RegisterCorporationResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'profile_registrations_id' => $this->profile_registrations_id,
            'office' => $this->office,
            'function' => $this->function,
            'type_of_technology' => $this->type_of_technology,
            'company' => $this->company,
            'modality' => $this->modality,
            'wage' => $this->wage,
            'created_at' => $this->created_at->format('D-m-y H:i:s'),
        ];
    }
}
