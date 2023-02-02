<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Services\Login\RememberMeExpiration;
use App\Models\Admin;

class LoginController extends Controller
{
    use RememberMeExpiration;
    //
    public function index(){
        return view('backend.auth.login');
    }
    public function login(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
//        dd($credentials);

        if(!Auth::validate($credentials)):
            return redirect()->to('login')
                ->withErrors('Failed');
        endif;


        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user, $request->get('remember'));



//        Auth::login($user,$request);

        if($request->get('remember')):
            $this->setRememberMeExpiration($user);
        endif;

        return $this->authenticated($request, $user);
    }
    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }
}
