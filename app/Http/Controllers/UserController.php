<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UserController extends Controller
{
    public function index(){
        $users = DB::table('users')
                            ->select('*')
                            ->get();
        // dd($users);
        return view('admin.user.index', compact('users'));
    }

    public function deactivate($id){
        $users = User::where('id', $id)
        ->update(['active' => 0]);
        return redirect('/admin/user');
        // dd($users);
    }
    public function activate($id){
        $users = User::where('id', $id)
        ->update(['active' => 1]);
        return redirect('/admin/user');
        // dd($users);
    }
    
}
