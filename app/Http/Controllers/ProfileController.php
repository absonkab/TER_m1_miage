<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth;


class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function edit_profile(){

        $user = Auth()->user();
        $data['user'] = $user;
        return view('profile-edit', $data);


    }

public function update_profile(Request $request, $id){
        $request->valide([
            'image' =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $image_name =time().'-'.$request->image->extension();
        $request->image->move(public_path('users'),$image_name);
        $path ="/public/users/".$image_name;
        $user = User::where('id', $id)->first();
        $user->name = $request->name;
        $user->image = $path;
        $user->save();
        return redirect('profile');

        
    
    }

}
