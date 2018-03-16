<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', ['as'=>'/','uses'=>'LoginController@getLogin']);
Route::get('/', 'ProductsController@index')->name('/');



Route::get('/about_us', 'ProductsController@about')->name('aboutus');

Route::get('/feedback', 'ProductsController@getFeedback')->name('feedback');


Route::post('/login', ['as'=>'login','uses'=>'Auth\LoginController@postLogin']);


Route::get('/noPermission', function(){
	return view('permission.noPermission');
});


Route::group( ['middleware'=>['authen']], function(){
		Route::get('/logout', ['as'=>'logout', 'uses'=>'LoginController@getLogout']);
		
		Route::get('/dashboard', ['as'=>'dashboard','uses'=>'DashboardController@dashboard']);

});


Auth::routes();


Route::get('pagenotfound',  'HomeController@errorPage')->name('errorPage');


Route::get('/login', 'ProductsController@login')->name('login');



//Route::get('/{from_user}/{id}/{name}', 'ProductsController@viewthisproduct')->name('viewthisproduct');

Route::group(['middleware'=>['auth']],function(){
	Route::get('/home', 'ProductsController@home')->name('/home');
	Route::get('/sendmail/', 'MailController@sendMail')->name('sendMail');
	/*Route::get('/email/', 'MailController@email')->name('email');*/

	Route::get('/messages/', 'ProductsController@seeMessages')->name('seeMessages');
	Route::get('/comments/', 'ProductsController@seeComments')->name('seeComments');

	Route::post('post/share', 'ProductsController@store')->name('share');
	Route::get('/myprofile/{id}', 'ProductsController@showProfile')->name('profile');
	Route::put('/edited/profile/{id}', 'ProductsController@edit')->name('editprofile');
	Route::get('/myposts', 'ProductsController@ownposts')->name('ownposts');
	Route::get('/picks', 'ProductsController@picks')->name('picks');
	Route::get('/myproducts/{name}', 'ProductsController@showmyproducts')->name('myproducts');
	Route::get('/account', 'ProductsController@account')->name('account');	
	Route::post('/personal/', 'ProductsController@personal')->name('personal');
	Route::get('/account/academia', 'ProductsController@academia')->name('academia');	
	Route::post('/academia/', 'ProductsController@addAcademic')->name('addAcademic');
	Route::get('/account/career', 'ProductsController@career')->name('career');
	Route::post('/career', 'ProductsController@addCareer')->name('addCareer');
	Route::get('/account/religion', 'ProductsController@addCareer')->name('religion');
	Route::post('/religion', 'ProductsController@addReligion')->name('addReligion');
	Route::get('/account/favorite', 'ProductsController@favorite')->name('favorite');
	Route::post('/favorite', 'ProductsController@addFavorite')->name('addFavorite');
	Route::get('/shared/{input}/{category}', 'ProductsController@search')->name('search');
	Route::get('/search/', 'ProductsController@find')->name('searchitem');
	Route::get('/autocomplete/', 'ProductsController@autocomplete')->name('autocomplete');
	Route::get('/users/pick/{for_user}/{picked}', 'ProductsController@pickUsers')->name('pickUsers');
	Route::delete('/users/unpick/{picked}', 'ProductsController@unpickUsers')->name('unpickUsers');
	Route::get('/{product_id}/edit', 'EditsController@editproduct')->name('editproduct');
	Route::get('/{id}/edit', 'ProductsController@editthisproducts')->name('editthisproduct');
	Route::put('/edited/product/{id}', 'ProductsController@editmyproduct')->name('editmyproduct');
	Route::get('/delete/{id}', 'ProductsController@deleteproduct')->name('deleteproduct');
	Route::delete('/deleted/{id}', 'ProductsController@deletemyproduct')->name('deletemyproduct');
	Route::get('upload/{id}', 'UploadsController@index')->name('uploadimage');
	Route::put('upload/image', 'UploadsController@multiple_upload')->name('imageuploaded');
	
	Route::post('comment/add/{on_post}', 'CommentsController@store')->name('addcomment');

	Route::get('/chat', function () {
		return view('fellows.chatroom.chat');
	});


	Route::get('/vue', function () {
		return view('vue');
	});

	Route::get('/{id}/', 'ProductsController@usersProfile')->name('user');

	

	
	Route::post('/{from_user}/{to_user}', 'ProductsController@sendMessage')->name('sendMessage');

	Route::post('/{on_comment}/', 'ProductsController@sendReply')->name('sendReply');

	Route::post('/{on_message}/{to_user}', 'ProductsController@replyMessage')->name('replyMessage');

	Route::put('/edited/personal/{id}', 'ProductsController@editPersonal')->name('editpersonal');
	Route::put('/edited/academia/{id}', 'ProductsController@editAcademia')->name('editacademia');
	Route::put('/edited/career/{id}', 'ProductsController@editCareer')->name('editcareer');
	Route::put('/edited/religion/{id}', 'ProductsController@editReligion')->name('editreligion');
	Route::put('/edited/favorite/{id}', 'ProductsController@editFavorite')->name('editfavorite');




});




//facebook socialite
	Route::get('/login/facebook', 'Auth\LoginController@redirectToProvider')->name('facebookLogin');
	Route::get('/login/facebook/callback', 'Auth\LoginController@handleProviderCallback')->name('authFacebook');




/*Route::get('/user/logout', 'HomeController@logout')->name('/user/logout');*/

Route::prefix('admin')->group(function(){

	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/', 'AdminController@index')->name('admin.dashboard');

});



Route::post('admin/password/email','AdminAuth\PasswordController@sendResetLinkEmail');
Route::post('admin/password/reset','AdminAuth\PasswordController@reset');
Route::get('admin/password/reset/{token?}','AdminAuth\PasswordController@showResetForm');
