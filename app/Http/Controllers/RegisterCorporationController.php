<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CorporationService;
use App\Http\Resources\RegisterCorporationResource;
use App\Models\corporationRegistration;
class RegisterCorportionController extends Controller
{
    protected $CorporationService;

    public function __construct(corporationRegistration $CorporationService)
    {
        $this->CorporationService = $CorporationService;
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $register = $this->CorporationService->register($data);

        return response()->json(['mensagem'=>'Cadastro realizado com sucesso','$data'=>$register]);
    }

    public function show($id)
    {
        $corporation_registration = corporationRegistration::findOrFail($id);

        return new RegisterCorporationResource($corporation_registration);
    }
}


