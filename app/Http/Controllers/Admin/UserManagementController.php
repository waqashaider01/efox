<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\City;
use App\Models\Suburb;
use App\Mail\SendMAil;
use Mail;


class UserManagementController extends Controller
{
    public function viewManagement()

    {
        $usermanagements = User::where('role_as', '!=', '1')->get();
        $registeruser = User::where('verified_status', '!=', '0')->where('role_as', '!=', '1')->get();
        return view('admin.user-management', compact('usermanagements','registeruser'));
    }

    public function destroyManagement($id)

    {
        $destroy = User::find($id)
                        ->delete();
        if($destroy){
            session()->flash('message', 'User deleted Successfully!');
            return redirect()->back();
        }
    }

    public function User()

    {
        $cities = City::all();
        $suburbs = Suburb::all();
        return view('admin.add-user', compact('cities','suburbs'));
    }

    public function sendemail(Request $request)
    {
        $data = [
            'email'=>$request->email,
            'message'=>$request->message,
        ];
        Mail::to($request->email)->send(new SendMAil($data));

        return redirect()->back()->with('message', 'Mail Sended Successfully!');
    }

    public function viewmails()
    {
        return view('admin.email.contactmail');
    }
}