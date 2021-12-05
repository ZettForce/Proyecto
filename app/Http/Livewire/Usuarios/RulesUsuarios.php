<?php
namespace App\Http\Livewire\Usuarios;

class RulesUsuarios{
    public static function Reglas(){
        return[
            'agregar.nombre'=> 'required|string',
            'agregar.apellidoPaterno'=> 'required|string',
            'agregar.direccion'=> 'required',
            'agregar.telefono'=> 'numeric|nullable',
            'foto'=>'nullable|image' 
        ];
    }
}