<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\City;
use App\Models\Suburb;
use Redirect;

class SellerController extends Controller
{
    public function sellerRegistration(Request $request){
        $user = User::create([
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'city_id' => $request->city,
            'suburb_id' => $request->suburb,
            'address' => $request->address,
            'role_as' => '2',
            'password' => Hash::make($request->password),
            'ip' => $request->ip(),
        ]);

        event(new Registered($user));
        if($request->has('page') && $request->get('page') == 'admin'){
            // nothing 
        }else{
            Auth::login($user);
        }
        

        return redirect::back()->with('message','Account has been Registered Successfully!');
    
    }

    public function signUp(){
        $cities = City::all();
        $suburbs = Suburb::all();
        return view('frontend.signup', compact('cities', 'suburbs'));
    }
}
