<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Notifications\RegisterUser;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    public function confirm($id, $token)
    {

        $user = User::where('id', $id)->where('confirmation_token', $token)->first();

        if($user) {

            $user->update(['confirmation_token' => null]);
            $this->guard()->login($user);

            return redirect('/login')->with('success', 'Votre compte a bien été activé !');
           // return redirect($this->redirect())->with('success', 'Votre compte a bien été activé !');
        }
        
        else{

            return redirect('/login')->with('error', 'Token invalide ou expiré.');
        }

    }


    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $user->notify(new RegisterUser());

        return redirect('/register')->with('success', " vous êtes inscrit avec succès ! Nous avons envoyé par mail votre lien d'activation. Connectez-vous pour activer votre compte.");
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
           
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'prenom' => $data['prenom'],
            'date_naissance' => $data['date_naissance'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'confirmation_token' => str_replace('/', '', bcrypt(str::random(16))),
        ]);
    }
}
