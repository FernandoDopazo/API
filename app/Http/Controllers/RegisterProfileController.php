<?php

namespace App\Http\Controllers;

use App\Http\Resources\RegisterProfileResource;
use App\Services\ProfileService;
use App\Http\Requests\ProfileFormRequest;

class RegisterProfileController extends Controller
{
    protected $ProfileService;

    public function __construct(ProfileService $profileService)
    {
        $this->ProfileService = $profileService;
    }

    public function index()
    {
        $profile = $this->ProfileService->getAllProfiles();

        return RegisterProfileResource::collection($profile);
    }

    public function store(ProfileFormRequest $request)
    {
        $profile = $this->ProfileService->createProfiles($request->all());

        return response()->json(['mensagem' => 'Perfil cadastrado com sucesso.']);
    }

}
