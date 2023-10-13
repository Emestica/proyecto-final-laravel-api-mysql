<?php

namespace App\Http\Controllers;

use App\Interfaces\IRolesRepositorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class RolesController extends Controller
{

    private IRolesRepositorio $roleRepositorio;

    public function __construct(IRolesRepositorio $roleRepositorio)
    {
        $this->roleRepositorio = $roleRepositorio;
    }

    public function obtenerRoles(Request $request){
        $opcion = $request->opcion;
        Log::info('obtenerRoles() opcion: {opt}', 
            [
                'opt' => $opcion
            ]
        );
        return response()->json(
            [
                'data' => $this->roleRepositorio->obtenerRoles($opcion)
            ]
        );
    }
}
