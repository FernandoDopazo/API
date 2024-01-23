<?php

namespace App\Services;

use App\Models\profileRegistration;
use Illuminate\Http\Request;

class ProfileService
{
    public function register(array $data): profileRegistration
    {
        $register_validate = $this->validateData($data); //método de validação de dados.

        $profile_registration = new profileRegistration($register_validate); //Aqui eu crio uma variavel para resgatar dados da model.

        $profile_registration->save(); //Aqui eu salvo no banco de dados.

        return $profile_registration; //Retornando o método
    }

    private function validateData(array $data, Request $request): array
    {
        $data = $request->all();
        $post = profileRegistration::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'country' => $data['country'],
            'city' => $data['city'],
        ]);

        return $data;
    }
}
