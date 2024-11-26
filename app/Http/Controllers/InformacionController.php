<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infos;

class InformacionController extends Controller
{
    public function Informacion(){
        $getInformacion = Informacion::all();
        return view('/informacion', compact('getInformacion'));
    }

    public function crearInfo(Request $request){
        $request->validate([
            'titulo' => 'required',
            'subtitulo' => 'required',
            'parrafo' => 'required',
            'image' => 'required'
        ]);
        Informacion::create($request->all());
        return redirect()->to('/informacion');
    }

    public function editInfo($id){
        $editInfo = Informacion::where('id', $id)->firstOrFail();
        return view('/editInfo', compact('editInfo'));
    }

    public function updateInfo(Request $request, $id){
        $updateInfo = Informacion::findOrFail($id);
        $requestInfo = $request->all();
        $updateInfo->update($requestInfo);
        return redirect()->to('/informacion');
    }
}