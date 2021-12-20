<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ImpersonateController extends Controller
{
    public function index($id){
        $user = User::where('id',$id)->first();
        // dd($user);
        if($user){
            session()->put('impersonate', $user->id);
        }
        return redirect('dashboard');
    }

    public function destroy(){
        session()->forget('impersonate');
        return redirect('admin/user');
    }
}
