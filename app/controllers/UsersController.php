<?php

class UsersController extends BaseController 
{

	
    public function index()
    {
        $users =User::all();

		return View::make('users.index', ['users' => $users]);
    }

    public function show($email)
    {
    	$user = User::whereEmail($email)->first();	

		return View::make('users.show',['user' =>$user]);

    }
        public function showRegister()
    {
                $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        ); 
            $response = "";
            return View::make('users.register', ['response' => $response,'menu' => $menu_home]);    
    }    

    public function register()
    {
        $response = "";
        $usuario = DB::table('users')->where('house','=',Input::get('house'))->get();

        if($usuario)
        {
            $response = "Error, la quinta ya está registrada";
            return View::make('users.register', ['response' => $response]);
        }

        $validation =Validator::make(Input::all(),User::$rules);
        if($validation->fails())
        {

            return Redirect::back()->withInput()->withErrors($validation->messages());
        }
        $user = new User;
        $user->password = Hash::make(Input::get('password'));
        $user->email = Input::get('email');
        $user->house = Input::get('house');
        $user->phone = Input::get('phone');
        $user->name = Input::get('name');
        $user->CI = Input::get('CI');
        $user->last_name = Input::get('last_name');
        $user->power = Input::get('power');


        $user-> save();
        $Autorid = Auth::id();
        $action = 'Crear Usuario';
        $value = $user->house;
        $this->setHistory($Autorid,$action,$value);          

        return Redirect::to('/admin/home');
    } 


    public function changepass()
    {
        $response = '';
        $id = Auth::id();
        $user = User::find($id);

        $pass = Input::get('password');
        $pass2 = Input::get('password2');
        $pass3 = Input::get('password3');
        if (!Hash::check($pass3, $user->password))
        {
            $response = 'Contraseña Invalida';
        }        
        if($pass == $pass2)
        {
            $user->password = Hash::make($pass);
            $user->save();    
            $response= 'Contraseña Actualizada';


        }else if ($pass != $pass2)
        {
            $response = $pass.' Las contraseñas deben coincidir '.$pass2;
        }
        return View::make('users.changepass', ['response' => $response]);
    }

    public function setHistory($id,$action,$value)
    {
        $user= DB::table('users')->where ('id','=',$id)->first();
        $autor = $user->name;
        $action = $action;
        $value = $value;
        $date = getdate();

        $history = new History;
        $history->autor = $autor;
        $history->action = $action;
        $history->value = $value;
        $history->save();

        return $history;
    }
}
