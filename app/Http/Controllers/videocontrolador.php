<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Video;

class videocontrolador extends Controller
{
    public function index()
   {
       $fis=Video::all();
       return view("ver", compact('fis'));

   }
   public function save(Request $request)
    {
 
       //obtenemos el campo file definido en el formulario
       $file = $request->file('file');
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
       
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));
 
        try{
            $nueva=new Video;
            $nueva->nombre_video=$nombre;
            $nueva->ruta='/storage/';
            $nueva->save();
            return "registrado";
        }catch(Exception $e){
            return "mala";
        }
       return "archivo guardado";

    }

}
