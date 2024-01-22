<?php

namespace App\Service;

use App\Models\corporationRegistration;
use Illuminate\Http\Request;

class CorporationService
{
    public function register(array $data): corporationRegistration
    {
        $register_validate = $this->validateData($data); //método de validação de dados.

        $corporation_registration = new corporationRegistration($register_validate); //Aqui eu crio uma variavel para resgatar dados da model.

        $corporation_registration->save(); //Aqui eu salvo no banco de dados.

        return $corporation_registration; //Retornando o método
    }

    private function validateData(array $data, Request $request):array
    {
        $data = $request->all();
        $post = corporationRegistration::create([
            'profile_registrations_id'=>$data['profile_registrations_id'],
            'office'=>$data['office'],
            'function'=>$data['function'],
            'type_of_technology'=>$data['type_of_technology'],
            'company'=>$data['company'],
            'modality'=>$data['modality'],
            'wage'=>$data['wage'],        ]);

        return ($data);
    }
}
