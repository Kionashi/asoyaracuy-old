<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	Auth::logout();
	return View::make('hello');
});
Route::get('/home','HomeController@showHome')->before('auth');
Route::get('/admin/home','SessionsController@showAdminHome')->before('auth');
Route::get('/debug',function()
{
        $users = User::all();
        foreach($users as $user)
        {
            $user->balance = 0;
            $user->save();            
        }  
});


Route::resource('users','UsersController');
Route::resource('sessions','SessionsController');
//Route::get('login','SessionsController@create');
Route::get('logout','SessionsController@destroy');
Route::get('/payment','HomeController@showPayment')->before('auth');
Route::get('/history','HomeController@showHistory')->before('auth');
Route::get('/contact','HomeController@showContact')->before('auth');
Route::get('/newuser','SessionsController@showNewuser')->before('auth');
Route::get('/admin/users','AdminController@showUsers')->before('auth');
Route::get('/admin/members','AdminController@showMembers')->before('auth');
Route::get('/admin/paymenthistory','AdminController@showPaymentHistory')->before('auth');
Route::get('/admin/payments','AdminController@showPayments')->before('auth');
Route::get('/admin/content','AdminController@showContent')->before('auth');
Route::get('/admin/documents','AdminController@showDocuments')->before('auth');
Route::get('/polls','AdminController@showPolls')->before('auth');
Route::get('/changepass','HomeController@showChangepass')->before('auth');
Route::get('/documents','HomeController@showDocuments')->before('auth');
Route::get('/admin/private','AdminController@showPrivateDocuments')->before('auth');
Route::get('/home/download/{id}','HomeController@downloadfile')->before('auth');
Route::get('/admin/fee','AdminController@showFee')->before('auth');
Route::get('/admin/specialfees','AdminController@showSpecialFees')->before('auth');
Route::get('/documents/meetings','HomeController@showMeetings')->before('auth');
Route::get('/documents/organization','HomeController@showOrganization')->before('auth');
Route::get('/documents/intercom','HomeController@showIntercom')->before('auth');
Route::get('/documents/members','HomeController@showMembers')->before('auth');
Route::get('/documents/documents','HomeController@showDocuments2')->before('auth');
Route::get('/documents/contracts','HomeController@showContracts')->before('auth');
Route::get('/documents/info','HomeController@showInfo')->before('auth');
Route::get('/documents/gallery','HomeController@showGallery')->before('auth');



Route::post('/users/changepass','UsersController@changepass')->before('auth');
Route::post('/register','UsersController@showRegister');
Route::post('/home/register','UsersController@register');
Route::post('/admin/home','SessionsController@showAdmin');
Route::post('pay','HomeController@pay');
Route::post('paycash','HomeController@paycash');
Route::post('applyfee','AdminController@applyFee');
Route::post('addfee','AdminController@addFee');
Route::post('searchusers','AdminController@searchusers');
Route::post('searchMembers','AdminController@searchMembers');
Route::post('searchDocuments','AdminController@searchDocuments');
Route::post('search','AdminController@searchpayments');
Route::post('searchspecialfee','AdminController@searchSpecialFeeUsers');
Route::post('deleteuser','AdminController@deleteUser');
Route::post('deletemember','AdminController@deleteMember');
Route::post('deletefee','AdminController@deleteFee');
Route::post('deletespecialfee','AdminController@deleteSpecialFee');
Route::post('paymenthistory','AdminController@paymenthistory');
Route::post('custompayment','AdminController@custompayment');
Route::post('customdocument','AdminController@customdocument');
Route::post('addcarousel','AdminController@addcarousel');
Route::post('addmember','AdminController@addMember');
Route::post('addspecialfee','AdminController@addSpecialFee');
Route::post('adddocumentbylink','AdminController@addDocumentByLink');

Route::post('adddocument','AdminController@addDocument');
Route::post('managecarousel','AdminController@managecarousel');
Route::post('managePayments','AdminController@managePayments');
Route::post('manageMembers','AdminController@manageMembers');
Route::post('manageDocuments','AdminController@manageDocuments');
Route::post('sendsuggest','HomeController@sendsuggest');
Route::post('sendrequest','HomeController@sendRequest');
Route::post('updateuser','AdminController@updateUser');
//Route::post('payment/paytransfer','HomeController@pay');
//Route::post('payment/paycheck','HomeController@registerpaycheck');
//Route::post('payment/paytransfer','HomeController@registerpaytransfer');
//Route::post('payment/paydeposit','HomeController@registerpaydeposit');
//Route::post('payment/paydeposit','HomeController@pay');
//Route::get('/pay','HomeController@pay')->before('auth');
Route::get('/tutorial','HomeController@showTutorial');