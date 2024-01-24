<?php

namespace App\Http\Controllers;

use App\Http\Requests\CorporationFormRequest;
use Symfony\Component\HttpFoundation\Request;
use App\Http\Requests\CorporationUpdateRequest;
use App\Http\Resources\RegisterCorporationResource;
use App\Services\CorporationService;

class RegisterCorporationController extends Controller
{
    protected $corporationService;

    public function __construct(CorporationService $corporationService)
    {
        $this->corporationService = $corporationService;
    }

    public function index()
    {
        $corporations = $this->corporationService->getAllCorporative();

        return RegisterCorporationResource::collection($corporations);
    }

    public function store(CorporationFormRequest $request)
    {
        dd($request);
        $data = $request->all();
        $corporation = $this->corporationService->createCorporation($data);

        return new RegisterCorporationResource($corporation);
    }

    public function update($id, CorporationUpdateRequest $request)
    {
        $data = $request->all(); 
        $corporation = $this->corporationService->updateCorporation($id, $data);

        if ($corporation) {
            return response()->json(['mensagem' => 'Empresa atualizada com sucesso.']);
        } else {
            return response()->json(['mensagem' => 'Erro ao atualizar']);
        }
    }

    public function show($id, Request $request)
    {
        $corporation = $this->corporationService->getCorporationById($id);

        return response()->json(['corporation' => $corporation]);
    }

    public function destroy($id)
    {
        $deleted = $this->corporationService->deleteCorporation($id);

        if ($deleted) {
            return response()->json(['mensagem' => 'Empresa excluída com sucesso.']);
        } else {
            return response()->json(['mensagem' => 'Erro ao excluir a empresa.']);
        }
    }
}
