<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\CommonMail;
use App\Models\Hr\Employee;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Carbon\Carbon;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required'],
        ]);
        

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'user_type' => 'EMPLOYEE',
            'password' => Hash::make($request->password),
        ]);

        $employee = Employee::create([
            'firstName' => $request->name,
            'emailAddress' => $request->email,
            'phone' => $request->phone,
            'organization_id' => '1',
            'createdBy' => '1',
            'createdOn ' => Carbon::now(),
            'status' => 1,

        ]);

        if ($user && !empty($user->email)) {
            try {
                $mail_data = [
                    'name' => $user->name,
                    'subject' => 'User Login Credentials',
                    'message' => 'Your Login credentials are:',
                    'password' => $request->password,
                    'view' => 'dftqc.emails.credentials'
                ];
                Mail::to($user->email)->send(new CommonMail($mail_data, $user));
            } catch (Exception $e) {
                Log::info($e->getMessage());
                createErrorLog(UsersController::class, 'store', $e->getMessage());
            }
        }

        // event(new Registered($user));

        // Auth::login($user);
        Auth::login($user);
        // return view('auth.verificationlink',compact('user'));
        return redirect(RouteServiceProvider::MustVerifyEmail);
    }

    public function applicantUserStore(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'phone' => ['required'],
            'password' => ['required'],
            'iAgree' => ['required'],
        ],['iAgree.required'=>'Please agree to privacy policy & terms !','email.unique'=>'Email already exist.','email.email' => 'Please enter valid email']);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->phone,
            'user_type' => 'APPLICANT',
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);
        // return view('auth.verificationlink',compact('user'));
        return redirect(RouteServiceProvider::MustVerifyEmail);
    }
}
