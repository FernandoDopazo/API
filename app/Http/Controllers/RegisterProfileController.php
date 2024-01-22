<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProfileService;
use App\Http\Resources\RegisterProfileResource;
use App\Models\profileRegistration;

class RegisterProfileController extends Controller
{
    private $ProfileService;

    public function __construct(ProfileService $profileService)
    {
        $this->ProfileService = $profileService;
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $register = $this->ProfileService->register($data);

        return response()->json(['mensagem'=>'Cadastro realizado com sucesso','$data'=>$register]);
    }

    public function show($id)
    {
        $profile_registration = profileRegistration::findOrFail($id);

        return new RegisterProfileResource($profile_registration);
    }
}
