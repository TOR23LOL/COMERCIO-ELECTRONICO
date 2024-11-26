<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contactos;

class ContactosController extends Controller
{
    public function Contactos(){
        $getContactos = Contactos::all();
        return view('/footer', compact('getContactos'));
    }

    public function createCTS(Request $request){
        $request->validate([
            'direccion' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'image' => 'required'
        ]);
        Contactos::create($request->all());
        return redirect()->to('/footer');
    }

    public function editCTS($id){
        $editContactos = Contactos::where('id', $id)->firstOrFail();
        return view('editarCTS', compact('editContactos'));
    }

    public function updateCTS(Request $request, $id){
        $updateCTS = Contactos::findOrFail($id);
        $requestCTS = $request->all();
        $updateCTS->update($requestCTS);
        return redirect()->to('/footer');
    }
}
