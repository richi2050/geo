<?php

class AuthController extends \BaseController {

	public function showLogin()
    {
        // Verificamos que el usuario no esté autenticado
        if (Auth::check()) {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('/');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('login');
    }

    public function postLogin()
    {
    	//print_r(Input::all());
        // Guardamos en un arreglo los datos del usuario.
       $userdata = array(
            'user' => Input::get('username'),
            'password' => Input::get('password')
        );

        /*$userdataEmail = array(
            'email' => Input::get('username'),
            'password' => Input::get('password')
        );*/

        if (Auth::attempt($userdata, Input::get('remember-me', 0))) {
            
                    return Redirect::route('home');
            
        } else {
            return Redirect::to('/')
                ->with('mensaje_error', 'Tus datos son incorrectos')
                ->withInput();
        }
    }

    public function logOut()
    {
        Auth::logout();
        return Redirect::to('/')
            ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }


}