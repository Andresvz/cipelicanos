<?php

class PerfilesController extends BaseController {
    
    
     public function index() {
   
        $usuarios = Usuario::where('tipo_usuario','=','cliente')->get();
        $usuarios->pendientes = 'NO';
        
        foreach ($usuarios as $usuario){
            if($usuario->estado == 'INACTIVO'){
                $usuarios->pendientes = 'SI';
                break;
            }
        }

         return View::make('mod_cliente.perfil')
                   ;
    }
    
    
    
    
    
    
    
}
