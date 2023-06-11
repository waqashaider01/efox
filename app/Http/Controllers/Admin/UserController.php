<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;

class UserController extends Controller
{
    public function newUsers()
    {
        $dayusers = User::where('created_at', '>=', Carbon::now()->subDay())
                                                ->where('role_as', '!=', '1')->orderBy('id', 'DESC')->get();
        $weekusers = User::where('created_at', '>=', Carbon::now()->subDays(7))
                                                ->where('role_as', '!=', '1')->orderBy('id', 'DESC')->get();
        return view("admin.new-users", compact('dayusers','weekusers'));
    }

    public function destroyUser($id)
    {
        $destroyUser = User::find($id)
                                ->delete();
        if($destroyUser){
            session()->flash('message', 'User deleted Successfully!');
            return redirect()->back();
        }
    }
}
