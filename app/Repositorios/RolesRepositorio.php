<?php 

namespace App\Repositorios;

use App\Interfaces\IRolesRepositorio;
use App\Models\Roles;

class RolesRepositorio implements IRolesRepositorio {

    public function obtenerRoles($opcion){
        switch ($opcion) {
            case 1:
                return Roles::where('estado', 'A')->get();
                break;
            case 2:
                return Roles::where('estado', 'I')->get();
                break;            
            default:
                return Roles::all();
                break;
        }
    }
}

?>