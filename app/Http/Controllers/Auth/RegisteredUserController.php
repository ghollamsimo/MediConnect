<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Specialiter;
use App\Models\Speciality;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $specialiters = Speciality::all();
        return view('auth.register', ['specialities' => $specialiters]);
    }

    public function showusername(): View {
        $information = User::all();
        return view('home' , ['information' => $information]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role' => ['required'],
            'speciality' => ['required_if:role,Médecin', 'exists:specialities,id'],

        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        if ($request->role == 'patient') {
            $patient = Patient::create(['user_id' => $user->id]);
        } elseif ($request->role == 'Medecin') {
            $medecin = Doctor::create([
                'user_id' => $user->id,
                'speciality_id' => $validatedData['speciality']
            ]);
        }elseif ($request->role == 'Admin'){
            $admin = Admin::create(['user_id' => $user->id]);

        }

        if ($user->role == 'patient') {
            Auth::login($user);
            return redirect()->route('home');
        } elseif ($user->role == 'Medecin') {
            Auth::login($user);
            return redirect()->route('doctor');
        }elseif ($user->role == 'Admin'){
            Auth::login($user);
            return redirect()->route('dashboard');
        }



        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function role()
    {
        if (auth()->user()->role === 'admin') {
            return redirect('/dashboard');
        } elseif (auth()->user()->role === 'medecin') {
            return redirect('/medcin');
        } else {
            return redirect('/');
        }
    }
}
