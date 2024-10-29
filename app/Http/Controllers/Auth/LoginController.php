<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request; 
use Illuminate\Support\Facades\Auth; 

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * 
     *
     * @var string
     */
    protected $redirectTo = '/admin/dashboard'; 
    /**
     * Yeni controller nümunəsini yarat.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * 
     *
     * @return \Illuminate\View\View
     */
    public function showLoginForm()
    {
        return view('auth.login'); 
    }

    /**
     * Giriş etmə prosesi.
     *
     * @param \Illuminate\Http\Request 
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended($this->redirectTo); 
        }

       
        return redirect()->back()->withErrors([
            'email' => 'Bu email və ya şifrə yanlışdır.',
        ]);
    }

    /**
     * 
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout(); 
        $request->session()->invalidate(); 
        $request->session()->regenerateToken(); 

        return redirect('/admin/login');
    }
}
