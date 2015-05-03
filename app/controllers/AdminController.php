<?php
class AdminController extends BaseController {

    public function __construct(){
        
    }

    public function showUsers()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $adminid = Auth::id(); 
        $man = DB::table('users')->where('id','=',$adminid)->first();
        //$results = DB::table('users')->where('house','=',$house)->get();

        if($man->power == 5 || $man->power == 2)
        {
            $users = DB::table('users')->where('power','=','1')->get();
            return View::make('admin.users', ['users' => $users, 'menu' => $menu_users]);    
        }else{
            return View::make('admin.home',['menu' => $menu_home] );
        }

        
    }

    public function showPayments()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $adminid = Auth::id(); 
        $man = DB::table('users')->where('id','=',$adminid)->first();
        if($man->power == 4 || $man->power == 2)
        {
            $payments = DB::table('payments')->where('state','=','En revisión')->get();
            
            return View::make('admin.payments', ['payments' => $payments, 'menu' => $menu_payments]);
        }else{
            return View::make('admin.home',['menu' => $menu_home] );

        }
    }

    public function showContent()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $adminid = Auth::id(); 
        $man = DB::table('users')->where('id','=',$adminid)->first();
        $files = DB::table('carrousel')->get();

        if($man->power == 3 || $man->power == 2)
        {
            return View::make('admin.content',['files' => $files,'menu' => $menu_content]);
        
        }else{
            return View::make('admin.home',['menu' => $menu_home] );

        }
    }

    public function showDocuments()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $adminid = Auth::id(); 
        $man = DB::table('users')->where('id','=',$adminid)->first();
        if($man->power == 3 || $man->power == 2)
        {
        
        $files = DB::table('documents')->get();
        return View::make('admin.documents', ['files' => $files, 'menu' => $menu_documents]);

        }else{

            return View::make('admin.home',['menu' => $menu_home] );

        }
    }    
    
    public function showMembers()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $adminid = Auth::id(); 
        $man = DB::table('users')->where('id','=',$adminid)->first();        
        $members = DB::table('contactgroups')->get();
        if($man->power == 3 || $man->power == 2)
        {
            return View::make('admin.members',['members' => $members, 'menu' => $menu_content]);
        
        }else{
            return View::make('admin.home',['menu' => $menu_home] );

        }
    }        
    public function showPaymentHistory()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $adminid = Auth::id(); 
        $man = DB::table('users')->where('id','=',$adminid)->first();
        if($man->power == 4 || $man->power == 2)
        {
            $payments = DB::table('payments')->where('state','!=','En revisión')->get();
            
            return View::make('admin.paymenthistory', ['payments' => $payments, 'menu' => $menu_payments]);
        }else{
            return View::make('admin.home',['menu' => $menu_home] );
        }  
    }    

    public function showSpecialFees()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );       
        $adminid = Auth::id(); 
        $man = DB::table('users')->where('id','=',$adminid)->first();
        if($man->power == 4 || $man->power == 2)
        {
            $users = DB::table('users')
                ->leftJoin('specialfees', 'users.id', '=', 'specialfees.userid')
                ->get(); 
            //echo "<pre>";print_r($users);echo "</pre>";die;
            return View::make('admin.specialfees', ['users' => $users, 'menu' => $menu_payments]);
        }else{
            return View::make('admin.home',['menu' => $menu_home, 'response' => 'No tienes los permisos para acceder a esta area'] );
        }          

    }

    public function addcarousel()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $name = Input::file('file')->getClientOriginalName();
        $newname = Input::file('file')->getFilename();   
        $subpath = 'storage/carousel/';    
        //$subpath = $prepath.'/';
        Input::file('file')->move($subpath,$name);

        $path = $subpath.$name;
        //$path = $subpath.$name;
        DB::insert('insert into carrousel (path, name) values (?,?)', array($path,$name));
        $id = Auth::id();
        $action = 'Subir elemento del carrusel al servidor';
        $value = $name;
        $this->setHistory($id,$action,$value);
        $files = DB::table('carrousel')->get();
        return View::make('admin.content',['files' => $files, 'menu' => $menu_content]);
    } 
    public function addMember()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $name = Input::file('file')->getClientOriginalName();
        $newname = Input::file('file')->getFilename();
        //$newname2 = str_random(8);
        $newname2 = $newname;    
        //$pathofexile = 'http://localhost/AsoYaracuy/app/storage/members';
        $subpath = 'storage/members/';    
        Input::file('file')->move($subpath,$name);
        //C:\wamp\www\AsoYaracuy\app\storage
        $path = $subpath.$name;
        //$destinationPath = 'storage\\members\\'.str_random(8);
        $name2 = Input::get('name');
        $email = Input::get('email');
        $description = Input::get('description');
        $group = Input::get('group');
        //echo $email;die;
        DB::table('contactgroups')->insert(
            array('group' => $group, 'name' => $name2, 'path' => $path, 'email' => $email, 'description' => $description)
        );
        $id = Auth::id();
        $action = 'Agregar Nuevo Contacto';
        $value = $email;
        $this->setHistory($id,$action,$value);         
        //DB::insert('insert into contactgroups (group, name, path, email, description) values (?,?,?,?,?)', array($group,$name2, $path, $email, $description));
        $members = DB::table('contactgroups')->get();
        return View::make('admin.members',['members' => $members, 'menu' => $menu_content]);
    }    
    
    public function addDocument()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $name = Input::file('file')->getClientOriginalName();
        $newname = Input::file('file')->getFilename();        
        $subpath = 'C:\wamp\www\AsoYaracuy\app\storage\documents/';
        Input::file('file')->move($subpath,$name);
        //Input::file('file')->move($subpath,$newname);
        $path = $subpath.$name;
        DB::insert('insert into documents (route, name) values (?,?)', array($path,$name));
        $id = Auth::id();
        $action = 'Subir archivo al servidor';
        $value = $name;
        $this->setHistory($id,$action,$value);        
        $files = DB::table('documents')->get();
        return View::make('admin.documents',['files' => $files, 'menu' => $menu_documents]);
    }
    
    
    public function addDocumentByLink()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
    
        $url = Input::get('url');
        $name = Input::get('name');
        $category = Input::get('category');
        DB::insert('insert into documents (route,name,category) values(?,?,?)', array($url, $name, $category));
        $id = Auth::id();
        $action = 'Agregar un nuevo enlace de documento al servidor';
        $value = $name;
        $this->setHistory($id,$action,$value);        
        $files = DB::table('documents')->get();
        return View::make('admin.documents',['files' => $files,'menu' => $menu_documents]);
    }
    
    public function addFee()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $value = Input::get('value');
        $fee = Fee::where('status','=',1)->first();
        if ($fee != NULL)
        {
            $fee->status = 0;
            $fee->save();      
        }
       
        $newfee = new Fee;
        $newfee->value = $value;
        $newfee->status = 1;
        $newfee->save();

        $id = Auth::id();
        $action = 'Modificar tarifa';
        $this->setHistory($id,$action,$value);        

        $flee = DB::table('fees')->where('status','=','1')->first();
        return View::make('admin.fees',['fee' =>$flee, 'menu' => $menu_payments]);
    }     
    public function addSpecialFee()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $house = Input::get('house');
        $user = User::where('house','=',$house)->first();
        $value = Input::get('value');
        $id = $user->id;
        $debug = DB::table('specialfees')->where('userid','=',$id)->first();
        if($debug == NULL)
        {

            $fee = new SpecialFee;
            $fee->value = $value;
            $fee->userid = $id;
            $fee->save();   

            $id = Auth::id();
            $action = 'Crear tarifa especial';
            $data = $user.' '.$value;
            $this->setHistory($id,$action,$data);
            $response = 'tarifa especial creada'; 
        }else{
            $response = 'El usuario seleccionado ya tiene una tarifa especial asignada';
        }
        /*else{
            $debug->value = $value;
            $debug->save();
        }*/

        return View::make('admin.home',['response' =>$response, 'menu' => $menu_home]);
    }     

    
    public function searchusers()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );

    	$house = Input::get('busqueda'); 
    	$results = DB::table('users')->where('house','=',$house)->get();
    	return View::make('admin.user', ['results' => $results,'menu' => $menu_users]);
    }
    public function searchMembers()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $search = Input::get('busqueda'); 
        $member = DB::table('contactgroups')->where('group','=',$search)->first();
        if($member == NULL)
        {
            $member = DB::table('contactgroups')->where('name','=',$search)->first();
        }

        return View::make('admin.member', ['member' => $member,'menu' => $menu_content]);
    }
    public function searchSpecialFeeUsers()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );

        $house = Input::get('busqueda'); 
        //$users = DB::table('users')->where('house','=',$house)->first();
        $user = DB::table('users')
                ->where('house','=',$house)
                ->leftJoin('specialfees', 'users.id', '=', 'specialfees.userid')
                ->first();
        if(isset($user->value)){
            return View::make('admin.specialfee', ['aux' => 'fee','fee' => $user,'menu' => $menu_payments,]);
        }else{
          //  $user = DB::table('users')->where('house','=',$house)->first(); 
            return View::make('admin.specialfee',['aux' => 'user','fee' => $user,'menu' =>$menu_payments]);
        }   
       // return View::make('admin.custompayment', ['results' => $user, 'menu' => $menu_payments]);


    }    
    public function custompayment()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );

        $house = Input::get('busqueda'); 
        $results = DB::table('payments')->where('house','=',$house)->get();
        return View::make('admin.custompayment', ['results' => $results, 'menu' => $menu_payments]);
    }  

    public function managePayments()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
	    $payments = DB::table('payments')->where('state','=','En revisión')->get();
    	$works = Input::has('status');
    	$value = Input::get('status');
    	if($works)
    	{
    		foreach ($payments as $payment)
	    	{

		    	$id = $payment->id;
		    	//echo $id;
		    	$combo_id = 'combo'.$id;
                $box_id = 'box'.$id;
		    	//echo $combo_id;
		    	$checkbox = Input::get($combo_id);
		    	//var_dump($checkbox);
		   
		    	if($value == 'aprove')
		    	{ 	                    
		    		if(Input::get($box_id) === $combo_id)
		    		{
		    			
		    			DB::table('payments')
		            	->where('id',$id)
		            	->update(array('state' => 'Aprobado'));

                        $Autorid = Auth::id();
                        $action = 'Aprobar pago';
                        $value = $id;
                        $this->setHistory($Autorid,$action,$value);	
		    		}				
		             
		    	}else if($value == 'disaprove')
		    	{	
		    		if(Input::get($box_id) === $combo_id)
		    		{
		    			//echo 'adios';
		    			DB::table('payments')
		            	->where('id',$id)
		            	->update(array('state' => 'Rechazado'));	
                        $Autorid = Auth::id();
                        $action = 'Rechazar pago';
                        $value = $id;
                        $this->setHistory($Autorid,$action,$value);
		    		}
		    	}
    		}
    		//die;
    		$payments = DB::table('payments')->where('state','=','En revisión')->get();
        	return View::make('admin.payments', ['payments' => $payments,'menu' => $menu_payments]);
    	}
    return Redirect::to('/admin/payments');
    }

    public function manageMembers()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $members = DB::table('contactgroups')->get();
        $works = Input::has('status');
        $value = Input::get('status');
        if($works)
        {
            foreach ($members as $member)
            {

                $id = $member->id;
                //echo $id;
                $combo_id = 'combo'.$id;
                $box_id = 'box'.$id;
                //echo $combo_id;
                $checkbox = Input::get($combo_id);
                //var_dump($checkbox);
           
                if($value == 'delete')
                {   
                    if(Input::get($box_id) === $combo_id)
                    {                        
                        $miembro =DB::table('contactgroups')->where('id',$id)->first(); 
                        $pathy = $miembro->path;
                        File::delete($pathy);
                        DB::table('contactgroups')->where('id', '=', $id)->delete();  
                        $Autorid = Auth::id();
                        $action = 'Eliminar Contacto';
                        $value = $id;
                        $this->setHistory($Autorid,$action,$value);                         
                    }              
                }
            }
            $members = DB::table('contactgroups')->get();
            return View::make('admin.members', ['members' => $members,'menu' => $menu_content]);
        }else
        {
            return Redirect::to('/admin/home');
        }
    }


    public function manageCarousel()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $files = DB::table('carrousel')->get();
        $works = Input::has('status');
        $value = Input::get('status');
        if($works)
        {
            foreach ($files as $file)
            {

                $id = $file->id;
                //echo $id;
                $combo_id = 'combo'.$id;
                $box_id = 'box'.$id;
                //echo $combo_id;
                $checkbox = Input::get($combo_id);
                //var_dump($checkbox);
           
                if($value == 'include')
                {   
                    if(Input::get($box_id) === $combo_id)
                    {
                        
                        DB::table('carrousel')
                        ->where('id',$id)
                        ->update(array('state' => 'Adentro')); 
                        $Autorid = Auth::id();
                        $action = 'Agregar elemento al carrusel';
                        $value = $id;
                        $this->setHistory($Autorid,$action,$value);                        
                    }               
                     
                }else if($value == 'extend')
                {   
                    if(Input::get($box_id) === $combo_id)
                    {
                        
                        DB::table('carrousel')
                        ->where('id',$id)
                        ->update(array('state' => 'Afuera'));
                        $Autorid = Auth::id();
                        $action = 'Sacar elemento del carrusel';
                        $value = $id;
                        $this->setHistory($Autorid,$action,$value);                            
                    }
                }else if($value == 'delete')
                {   
                    if(Input::get($box_id) === $combo_id)
                    {
                        $fily = DB::table('carrousel')->where('id', '=', $id)->first();
                        $pathy = $fily->path;
                        File::delete($pathy);
                        DB::table('carrousel')->where('id', '=', $id)->delete();  
                        $Autorid = Auth::id();
                        $action = 'Eliminar archivo del carrusel';
                        $value = $id;
                        $this->setHistory($Autorid,$action,$value);                          
                    }
                }
            }        

        }
        $files = DB::table('carrousel')->get();
        return View::make('admin.content',['files' => $files,'menu' => $menu_content]);
    }



    public function manageDocuments()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $files = DB::table('documents')->get();
        $works = Input::has('status');
        $value = Input::get('status');
        if($works)
        {
            foreach ($files as $file)
            {

                $id = $file->id;
                //echo $id;
                $combo_id = 'combo'.$id;
                $box_id = 'box'.$id;
                //echo $combo_id;
                $checkbox = Input::get($combo_id);
                //var_dump($checkbox);
           
                if($value == 'publico')
                {   

                    if(Input::get($box_id) === $combo_id)
                    {
                       
                        DB::table('documents')
                        ->where('id',$id)
                        ->update(array('state' => 'Público')); 
                        $Autorid = Auth::id();
                        $action = 'Marcar documento como Publico';
                        $value = $id;
                        $this->setHistory($Autorid,$action,$value);                        
                    }               
                     
                }else if($value == 'private')
                {   
                    if(Input::get($box_id) === $combo_id)
                    {
                        
                        DB::table('documents')
                        ->where('id',$id)
                        ->update(array('state' => 'Privado'));    
                        $Autorid = Auth::id();
                        $action = 'Marcar documento como privado';
                        $value = $id;
                        $this->setHistory($Autorid,$action,$value);
                    }
                }else if($value == 'delete')
                {   
                    if(Input::get($box_id) === $combo_id)
                    {
                        $fily = DB::table('documents')->where('id', '=', $id)->first();
                        $pathy = $fily->route;
                        File::delete($pathy);
                        DB::table('documents')->where('id', '=', $id)->delete();    
                        $Autorid = Auth::id();
                        $action = 'Eliminar documento';
                        $value = $id;
                        $this->setHistory($Autorid,$action,$value);
                    }
                }
            }        

        }
        $files = DB::table('documents')->get();
        return View::make('admin.documents',['files' => $files,'menu' => $menu_documents]);
    }



    public function searchpayments()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );

    	$house = Input::get('busqueda');
    	$id =  DB::table('users')->where('house','=',$house)->first();
    	$results = DB::table('payments')->where('house','=',$id->house)
                                        ->where('state','=','En revisión')->get();
    	return View::make('admin.custompayment', ['results' => $results,'menu' => $menu_payments]);
    }
    
    public function searchdocuments()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );

        $document = Input::get('busqueda');
        $id =  DB::table('users')->where('name','=',$document)->first();
        $results = DB::table('documents')->where('name','=',$id->name)->get();
        return View::make('admin.customdocument', ['results' => $results,'menu' => $menu_documents]);
    }

    public function deleteUser()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
    	$house = Input::get('house');
    	DB::table('users')->where('house', '=', $house)->delete();
        $Autorid = Auth::id();
        $action = 'Eliminar Usuario';
        $value = $house;
        $this->setHistory($Autorid,$action,$value);        
    	//showUsers();
        $users = DB::table('users')->where('id','>','1')->get();
        
        return View::make('admin.users', ['users' => $users,'menu' => $menu_users]);

    }
    public function deleteFee()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $house = Input::get('house');
        $user =DB::table('users')->where('house', '=', $house)->first();
        $id = $user->id;
        //showUsers();
        $specialfee = SpecialFee::where('userid','=',$id)->first();
        if($specialfee != NULL)
        {
            $delete = SpecialFee::where('userid','=',$id)->delete();
            $response = 'tarifa especial borrada';
            $Autorid = Auth::id();
            $action = 'Eliminar tarifa especial';
            $value = $id;
            $this->setHistory($Autorid,$action,$value);                
        }else if ($specialfee == NULL)
        {
            $response ='no se encontro ninguna tarifa especial';
        }

        
        $users = DB::table('users')->where('power','=','1')->get();
        return View::make('admin.users', ['users' => $users, 'response' => $response,'menu' => $menu_users]);  
        

    }    
    public function deleteSpecialFee()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $house = Input::get('house');
        $user =DB::table('users')->where('house', '=', $house)->first();
        $id = $user->id;
        //showUsers();
        $specialfee = SpecialFee::where('userid','=',$id)->first();
        if($specialfee != NULL)
        {
            $delete = SpecialFee::where('userid','=',$id)->delete();
            $response = 'tarifa especial borrada';
            $Autorid = Auth::id();
            $action = 'Eliminar tarifa especial';
            $value = $id;
            $this->setHistory($Autorid,$action,$value);                
        }else if ($specialfee == NULL)
        {
            $response ='no se encontro ninguna tarifa especial';
            $adminid = Auth::id(); 
            $man = DB::table('users')->where('id','=',$adminid)->first();
            if($man->power == 4 || $man->power == 2)
            {
                $users = DB::table('users')
                    ->leftJoin('specialfees', 'users.id', '=', 'specialfees.userid')
                    ->get(); 
                //echo "<pre>";print_r($users);echo "</pre>";die;
                return View::make('admin.specialfees', ['users' => $users, 'menu' => $menu_payments]);
            }else{
                return View::make('admin.home',['menu' => $menu_home, 'response' => 'No tienes los permisos para acceder a esta area'] );
            }             

        }

        return View::make('admin.home', ['response' => $response,'menu' => $menu_users]);  
        

    }        

    public function deleteMember()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $group = Input::get('group');
        DB::table('contactgroups')->where('group', '=', $group)->delete();
        $adminid = Auth::id(); 
        $action = 'Eliminar Contacto';
        $value = $group;
        $this->setHistory($adminid,$action,$value);            
        $man = DB::table('users')->where('id','=',$adminid)->first();        
        $members = DB::table('contactgroups')->get();
        if($man->power == 3 || $man->power == 2)
        {
            return View::make('admin.members',['members' => $members,'menu' => $menu_content]);
        
        }else{
            return View::make('admin.home',['menu' => $menu_home] );

        }
    }

    public function showPolls()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        
        $menu = array(
		'home' 		=> '',
		'polls' 	=> 'current',
		'contact' 	=> '',
		'complaints' 	=> '',
		'documents' 	=> '',
		'account'	=> ''
		
	);
        $polls = DB::table('polls')->where('status','=','Habilitado')->get();
        
        return View::make('admin.polls', ['polls' => $polls,'menu' => $menu]);

    }

    public function showPrivateDocuments()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $files = DB::table('documents')->where('state','=','Privado')->get();
        return View::make('admin.privatedocuments', ['files' => $files,'menu' => $menu_documents]);
    }

    public function showFee()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $fee = DB::table('fees')->where('status','=','1')->first();
        return View::make('admin.fees',['fee' =>$fee,'menu' => $menu_payments]);
    }

    public function applyFee()
    {
        $menu_home = array(
            'home'                  => 'active',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_users = array(
            'home'                  => '',
            'admin_users'           => 'active',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_content = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => 'active',
            'admin_payments'        => '',
            'privates_documents'    => ''
        );
        $menu_payments = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => 'active',
            'privates_documents'    => ''
        );
        $menu_documents = array(
            'home'                  => '',
            'admin_users'           => '',
            'admin_content'         => '',
            'admin_payments'        => '',
            'privates_documents'    => 'active'
        );
        $users = User::all();
        $specials = SpecialFee::all();
        $fee = DB::table('fees')->where('status','=','1')->first();
        
        foreach($users as $user) 
        {
        $realfee = $fee->value; 
            foreach($specials as $special)
            {
                if($user->id == $special->userid)
                {
                    $realfee = $special->value;
                }    
            }
            $balance = $user->balance - $realfee;
            $user->balance = $balance;
            $user->save();
             
        }
        $Autorid = Auth::id();
        $action = 'Aplicar Tarifa';
        $value = 'N/A' ;
        $this->setHistory($Autorid,$action,$value);               
        return View::make('admin.home',['menu' => $menu_home] );    
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