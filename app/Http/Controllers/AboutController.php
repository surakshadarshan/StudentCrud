<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetais;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function operation(Request $req)
    {
    //     $user= new User();
    //     $user->name= $req->name;
       
    //     $id = User::where('name', $user->name)->first()->id;
    //    // $userd = UserDetais::where('user_id', $id)->get();
    //    // dd($userd);
      
    //    return $id->hasMany(UserDetais::class);
    //    $user = UserDetais::find($id)->user_id($id)->with('userDetail');
    //   // return view('list',['members'=>$data]);
    
    // $user = DB::table('User')
    //     ->join('id','user.id','=','user_detais.user_id')
    //     ->select('*')
    //     ->where('users.id',$id)->get();

    $user = User::with('userDetails')->get();
    //dd($user);
          return view('list',['members'=>$user]);


     }

}
