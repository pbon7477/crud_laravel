<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminated\Support\Facades\Validator;

class UsuarioController extends Controller {
    
    public function index() {

        $usuarios = User::all();

        return view('admin.usuarios.index', ['usuariossA'=> $usuarios] );
    }

    
    public function create(){

        return view('admin.usuarios.create');
       
    }

    
    
    public function store(Request $request){
        
       $request->validate([
                            'name'=>'required | max:100',
                            'email' => 'required | unique:users',
                            'password' => 'required | confirmed'
       ]);

       $usuario = new User();
       $usuario->name = $request->name;
       $usuario->email = $request->email;
       $usuario->password = $request->password;

       $usuario->save();

       return redirect()->route('admin.usuarios.index')
                        ->with('mensaje','Se ha registrado al nuevo usuario exitosamente!.')
                        ->with('icono','success');
       

    }

  
    public function show(string $id){
        
        $usuario = User::find($id);
        
        return view('admin.usuarios.show', ['usuario'=>$usuario]);

        //return response()->json($usuario);
    }

    public function edit(string $id) {
        
        $usuario = User::findOrFail($id);

        return view('admin.usuarios.edit', ['usuario'=> $usuario] );
    }

 
    public function update(Request $request, string $id){   
        
        $request->validate([
            'name'=>'required | max:100',
            'email' => 'required | unique:users',
            'password' => 'required | confirmed'
        ]);

        $usuario = User::findOrfail($id);

        $usuario->name= $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->save();

        return redirect()->route('admin.usuarios.index')
                         ->with('mensaje','Se ha actualizado al usuario '. $request->name .' exiosamente!.' )
                         ->with('icono', 'success');
    }


    public function delete(string $id){

        $usuario = User::findOrFail($id);        
       
        return view('admin.usuarios.delete', ['usuario'=> $usuario]);
    } 

       public function destroy(string $id) {

        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('admin.usuarios.index')
                         ->with('mensaje','El usuario '. $usuario->name . ' ha sido eliminado exitosamente!.')
                         ->with('icono','success');
        //
    }

}
