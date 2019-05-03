<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return filter_var(request()->input('identity'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    }

    protected function credentials(Request $request)
    {
        $request->merge([
            $this->username() => $request->input('identity'),
        ]);

        return $request->only($this->username(), 'password');
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'identity'             => 'required',
            'password'             => 'required',
            'g-recaptcha-response' => 'recaptcha',
        ]);
    }

    protected function authenticated(Request $request, $user)
    {
        toast('Welcome back '.$user->first_name, 'success', 'top-right');
    }

    protected function sendFailedLoginResponse(Request $request)
    {
        throw ValidationException::withMessages([
            'identity' => [trans('auth.failed')],
        ]);
    }

    public function logout(Request $request)
    {
        if (!auth()->check()) {
            toast('You have not logged in before!', 'warning', 'top-right');

            return redirect(route('login'));
        }

        $this->guard()->logout();

        $request->session()->invalidate();

        toast('You\'ve been logged out!', 'success', 'top-right');

        return $this->loggedOut($request) ?: redirect(route('login'));
    }
}
