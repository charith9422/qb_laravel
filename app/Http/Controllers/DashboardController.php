<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id ;
        $user = User::find($user_id);  
        return view('dashboard')->with('posts',$user->posts);
    }

    public function admin(){
        $users = User::all();
        return view('admin',compact('users'));
        //return view('admin');
    }

    /* public function destroy($id){
        DB::table('users')->where('id',$id)->delete();
        return view('admin/routes');
    } */

    
}
