<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

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
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
        $this->middleware('guest')->except('logout');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    // public function showLoginForm()
    // {
    //     return view('auth.login');
    // }

    // public function login(Request $request)
    // {
    //     $this->validate($request, [
    //         'username' => 'required|username',
    //         'password' => 'required|min:8'
    //     ]);
    //     if (Auth::guard('user')->attempt([
    //         'username' => $request->username,
    //         'password' => $request->password
    //     ], $request->get('remember'))) {
    //         return redirect()->intended(route('customer.product.product'));
    //     }
    //     return back()->withInput($request->only('user', 'remember'));
    // }
    
    // public function logout(Request $request)
    // {
    //     Auth::guard('user')->logout();
    //     $request->session()->invalidate();
    //     return redirect()->route('auth.login');
    // }
}
