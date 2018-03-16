<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Socialite;
use App\User;
use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        

       try {
		$user = Socialite::driver('facebook')->user();
	}catch (Exception $e) {
		return redirect('facebookLogin');
	}
	
	$authUser = $this->findOrCreateUser($user);
	Auth::login($authUser, true);
	return redirect()->route('/home');
    }
		
    private function findOrCreateUser($facebookUser)
    {
		$authUser = User::where('facebook_id', $facebookUser->id)->first();
		if($authUser){
		return $authUser;
		}
		
		$userSocial = new User;
	
		
			$userSocial->firstname = $facebookUser->name;
		
			$userSocial->email = $facebookUser->email;
			$userSocial->facebook_id = $facebookUser->id;
			$userSocial->featured_image = $facebookUser->avatar;
			$userSocial->save();
		
	
	    
     }


}
