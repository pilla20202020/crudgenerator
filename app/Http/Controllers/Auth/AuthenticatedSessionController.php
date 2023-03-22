<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Log\LoginLog;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        // dd($request->all());
        $request->authenticate();

        $request->session()->regenerate();
        $loginDetails = [
            'user_id' => auth()->user()->id,
            'ip' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'login_at' => now(),
        ];
        LoginLog::create($loginDetails);
        // return redirect()->intended(RouteServiceProvider::HOME);
        if (auth()->user()->user_type == 'EMPLOYEE') {
            return redirect(RouteServiceProvider::EMPLOYEE_DASHBOARD);
        } elseif (auth()->user()->user_type == 'APPLICANT') {
            return redirect(RouteServiceProvider::APPLICANT_DASHBOARD);
        } else {
            return redirect(RouteServiceProvider::ADMIN_DASHBOARD); //->intended(RouteServiceProvider::HOME);

        }
    }

    public function userloginfrommail($id, $password)
    {

        $user = User::where('id', $id)->first();



        $credentials = $user->only('email', 'password');

        // $authenticate = Auth::attempt($this->only('email', 'password'), $this->boolean('remember'));
        $authenticate = Auth::attempt(['email' => $user->email,'password'=>$password]);

        if($authenticate){
            if ($user->user_type == 'EMPLOYEE') {
                return redirect(RouteServiceProvider::USER);
            } elseif($user->user_type == 'COMPANY') {
                return redirect(RouteServiceProvider::ORGANIZATION);
            } else {

                return redirect(RouteServiceProvider::HOME); //->intended(RouteServiceProvider::HOME);

            }
        }else{
            $notification = array(
                'message' => 'Username and password did not match',
                'alert-type' => 'error'
              );
          return redirect()->back()->with($notification);
        }

    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $loginDetails = [
            'user_id' => auth()->user()->id,
            'ip' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'type' => 'Logout',
            'logout_at' => now(),
        ];
        LoginLog::create($loginDetails);
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
