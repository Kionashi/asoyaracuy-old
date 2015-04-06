<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
    /**
     * The layout that should be used for responses.
     */
    protected $layout = 'layouts.main';

    /**
     * Show the user profile.
     */
    public function showHome()
    {
	$menu = array(
		'home' 		=> 'current',
		'polls' 	=> '',
		'contact' 	=> '',
		'complaints' 	=> '',
		'documents' 	=> '',
		'account'	=> ''
		
	);
        $files = DB::table('carrousel')->where('state','=','Adentro')->get();
        return View::make('home',['files' => $files, 'menu' => $menu]);
    }

    public function showPayment()
    {
    	$menu = array(
		'home' 		=> '',
		'polls' 	=> '',
		'contact' 	=> '',
		'complaints' 	=> '',
		'documents' 	=> '',
		'account'	=> 'current'
		
	);
        return View::make('payment', ['menu' => $menu]);
    }

    public function showTutorial()
    {
         return View::make('jquerytut');
    }
    public function showContact()
    {
	$menu = array(
		'home' 		=> '',
		'polls' 	=> '',
		'contact' 	=> 'current',
		'complaints' 	=> '',
		'documents' 	=> '',
		'account'	=> ''
		
	);
        $members = DB::table('contactgroups')->get();
        return View::make('contact',['members' => $members, 'menu' => $menu]);
    }
    public function showHistory()
    {
    	$id = Auth::id();
        $userhouse = DB::table('users')->where('id','=',$id)->get();
        $house = $userhouse[0]->house;     
		$payments = DB::table('payments')->where('house','=',$house)->get();
		$results = DB::table('users')->find($id);
		
        $balance = $results->balance;
        
        $menu = array(
		'home' 		=> '',
		'polls' 	=> '',
		'contact' 	=> '',
		'complaints' 	=> '',
		'documents' 	=> '',
		'account'	=> 'current'
		
	);
        
        return View::make('history', ['id' => $id,'payments' => $payments,'balance' => $balance, 'menu' => $menu]);
		
    }
    public function pay()
    { 
        date_default_timezone_set('America/Caracas');
        $date = Input::get('date');
        $realdate = date('Y/m/d h:i:s', time());
        $userid = Auth::id();
        $userhouse = DB::table('users')->where('id','=',$userid)->get();
        $house = $userhouse[0]->house;
        $user = DB::table('users')->where('house','=',$house)->get();
    	$pago = Input::get('payment');
    	$state= 'En revisión';
    	$bank = Input::get('bank');
    	$amount = Input::get('amount');
    	$confirmid = Input::get('confirmid');
    	//$user2 = DB::table('users')->where('id', '=', $userid)->find(1);
    /*
        $users = DB::table('users')->get();

        foreach ($users as $user)
        {
            if($user->id == $userid)
            {
                $balance = $user->balance;    
            }

        }
        */
    	DB::insert('insert into payments (house, type, bank, confirmid, amount, date, realdate, state) values (?,?,?,?,?,?,?,?)', array($house,$pago,$bank,$confirmid,$amount,$date,$realdate,$state));
        return Redirect::to('/home');
    }

    public function showChangepass()
    {
	$menu = array(
		'home' 		=> '',
		'polls' 	=> '',
		'contact' 	=> '',
		'complaints' 	=> '',
		'documents' 	=> '',
		'account'	=> 'current'
		
	);
        return View::make('users.changepass', ['menu' => $menu]);
    }

    public function showDocuments()
    {
    	$menu = array(
		'home' 		=> '',
		'polls' 	=> '',
		'contact' 	=> '',
		'complaints' 	=> '',
		'documents' 	=> 'current',
		'account'	=> ''
		
	);
        $files = DB::table('documents')->where('state','=','Publico')->get();
        return View::make('documents', ['files' => $files, 'menu' => $menu]);
    }

    public function showDocuments3()
    {
    	$menu = array(
		'home' 		=> '',
		'polls' 	=> '',
		'contact' 	=> '',
		'complaints' 	=> '',
		'documents' 	=> 'current',
		'account'	=> ''
		
	);
        $files = DB::table('documents')->where('state','=','Publico')->where('cateogry','=','documents')->get();
        return View::make('documents.documents', ['files' => $files, 'menu' => $menu]);
    }    

    public function showMeetings()
    {
    	$menu = array(
		'home' 		=> '',
		'polls' 	=> '',
		'contact' 	=> '',
		'complaints' 	=> '',
		'documents' 	=> 'current',
		'account'	=> ''
		
	);
        $files = DB::table('documents')->where('state','=','Publico')->where('category','=','meetings')->get();
        return View::make('documents.meetings', ['files' => $files, 'menu' => $menu]);
    }

    public function showOrganization()
    {
    	$menu = array(
		'home' 		=> '',
		'polls' 	=> '',
		'contact' 	=> '',
		'complaints' 	=> '',
		'documents' 	=> 'current',
		'account'	=> ''
		
	);
        $files = DB::table('documents')->where('state','=','Publico')->where('category','=','organization')->get();
        return View::make('documents.organization', ['files' => $files, 'menu' => $menu]);
    }
    
    public function showIntercom()
    {
    	$menu = array(
		'home' 		=> '',
		'polls' 	=> '',
		'contact' 	=> '',
		'complaints' 	=> '',
		'documents' 	=> 'current',
		'account'	=> ''
		
	);
        $files = DB::table('documents')->where('state','=','Publico')->where('category','=','intercom')->get();
        return View::make('documents.intercom', ['files' => $files, 'menu' => $menu]);
    }
    
    public function showMembers()
    {
    	$menu = array(
		'home' 		=> '',
		'polls' 	=> '',
		'contact' 	=> '',
		'complaints' 	=> '',
		'documents' 	=> 'current',
		'account'	=> ''
		
	);
        $files = DB::table('documents')->where('state','=','Publico')->where('category','=','members')->get();
        return View::make('documents.members', ['files' => $files, 'menu' => $menu]);
    }
        
    public function showDocuments2()
    {
    	$menu = array(
		'home' 		=> '',
		'polls' 	=> '',
		'contact' 	=> '',
		'complaints' 	=> '',
		'documents' 	=> 'current',
		'account'	=> ''
		
	);
        $files = DB::table('documents')->where('state','=','Publico')->where('category','=','documents')->get();
        return View::make('documents.documents', ['files' => $files, 'menu' => $menu]);
    }        
    
    public function showContracts()
    {
    	$menu = array(
		'home' 		=> '',
		'polls' 	=> '',
		'contact' 	=> '',
		'complaints' 	=> '',
		'documents' 	=> 'current',
		'account'	=> ''
		
	);
        $files = DB::table('documents')->where('state','=','Publico')->where('category','=','contracts')->get();
        return View::make('documents.contracts', ['files' => $files, 'menu' => $menu]);
    }    
    
    public function showInfo()
    {
    	$menu = array(
		'home' 		=> '',
		'polls' 	=> '',
		'contact' 	=> '',
		'complaints' 	=> '',
		'documents' 	=> 'current',
		'account'	=> ''
		
	);
        $files = DB::table('documents')->where('state','=','Publico')->where('category','=','info')->get();
        return View::make('documents.info', ['files' => $files, 'menu' => $menu]);
    }    
    
    public function showGallery()
    {
    	$menu = array(
		'home' 		=> '',
		'polls' 	=> '',
		'contact' 	=> '',
		'complaints' 	=> '',
		'documents' 	=> 'current',
		'account'	=> ''
		
	);
        $files = DB::table('documents')->where('state','=','Publico')->where('category','=','gallery')->get();
        return View::make('documents.gallery', ['files' => $files, 'menu' => $menu]);
    }     
        
        
    public function sendSuggest()
    {
        $subject = Input::get('title');
        $name = Input::get('name');
        $email = Input::get('email');
        $body = Input::get('body');
        $response = 'Su sugerencia ha sido enviada.';

	$para      = 'bigtor.cardozo@gmail.com';
	$titulo    = '[Contacto] - '.$subject;
	$mensaje   = '
	Nombre:'.$name.'
	E-mail: '.$email.'
	Mensaje: '.$body;
	$cabeceras = ' ';

	mail($para, $titulo, $mensaje, $cabeceras);
 	//return Redirect::to('/home')->with('response', $response);
 	return Redirect::action('HomeController@showHome', array('response' => $response));
 	return Redirect::route('/home', array('response' => $response));
        return Redirect::route('/polls', array('response' => $response));
    }

    public function downloadfile($id)
    {
        $file = DB::table('documents')->where('id','=',$id)->first();
        return Response::download($file->route);
    }

}