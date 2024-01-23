<?php

namespace App\Http\Controllers;

use App\Http\Requests\CorporationFormRequest;
use App\Http\Resources\RegisterCorporationResource;
use App\Services\CorporationService;

class RegisterCorporationController extends Controller
{
    protected $CorporationService;

    public function __construct(CorporationService $CorporationService)
    {
        $this->CorporationService = $CorporationService;
    }

    public function index()
    {
        $corporation = $this->CorporationService->getAllCorporative();

        return RegisterCorporationResource::collection($corporation);
    }

    public function store(CorporationFormRequest $request)
    {
        $corporation = $this->CorporationService->createCorporation($request->all());

        return response()->json(['mensagem' => 'Empresa cadastrada com sucesso.']);
    }
}
