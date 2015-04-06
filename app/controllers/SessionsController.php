<?php

class SessionsController extends BaseController {

    public function showAdminHome(){  
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );

        $id = Auth::id();
        $usuario = DB::table('users')->where('id','=',$id)->first();

        if ($usuario->power == 1)
        {
            return Redirect::to('/');
        }else{

            //$payments = DB::table('payments')->where('state','=','En revisión')->get();
            return View::make('admin.home', ['menu' => $menu_home]);
        }
    }
    
    public function store()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );        

    	$house = Input::get('house');
    	$password = Input::get('password');	
    	$user = DB::table('users')->where('house','=',$house)->get();
        if($user != NULL)
        {

            $id = $user[0]->id;
            $realuser = User::find($id);
            $result = Hash::check($password,$realuser->password);
            //$boolean = (int) $result;
            /*
            echo $password; 
            echo '</br>';   
            echo $realuser->password;
            echo '</br>';
            echo $boolean;die;
            */
            //echo $realuser->password;die;
            if (!empty($user))
            {
                //echo $user[0]->password; die;
                //if ($user[0]->password == $password)
                if (Hash::check($password,$realuser->password))    
                {
                    Auth::login($realuser);
                    $adminid = Auth::id();
                    //echo $adminid; die;
                    $usuario = DB::table('users')->where('id','=',$adminid)->first();
                    if($usuario->power == 1)
                    {
                        return Redirect::to('home');
                    }else{

                        return View::make('admin.home', ['menu' => $menu_home]);                       
                    }
                }
                
                else{
                    return Redirect::to('/');
                }
                
            }
            
        }else
        {
            return Redirect::to('/');
        }    
    }

    public function destroy()
    {

    	Auth::logout();
    	return Redirect::to('/'); 
    }

	

}


