<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    //
    public function create_user(Request $reqest)
    {

      $user = new User;
      $user->name = $reqest->input('name');
      $user->email = $reqest->input('email');
      $user->password = $reqest->input('password');
      $user->save();
//      var_dump($user);
//      exit();
      return view('login2');
    }

    public function create_login(Request $reqest)
    {
      return view('sainin_two');
    }
    public function update(Request $request)
    {
      $user = new User;
      // var_dump($request->input('id'));
      // exit();
      $user = $user->find($request->input('id'));
      $user->name = 'gotoku';
      $user->save();

    }

    public function sainin(Request $request)
    {
      $users = User::all();
      return view('sainin',compact($users, 'users'));
    }

    public function login(Request $reqest)
    {
      return view('login');
    }

    public function login2(Request $reqest)
    {

      return view('login2');

    }

    public function login_user(Request $request)
    {
      $users = User::where('email',$request->input('email'))->where('password',$request->input('password'))->get()->first();
      if ($users == null){
        //dd($users);
        return view("");
      }
      //dd($users["name"]);
      // セッションへデータを保存する
      $request->session()->put('key', $users["name"]);

      $value = $request->session()->get('key');
      //dd($value);
      // 指定したデータがセッションに存在するかを調べる
      if ($request->session()->exists('key')) {
        return redirect('/');
      }
      if ($request->session()->has('key')) {
        // 存在しnullではない
      }

      //
      /*if ($users) {
        // login success
      }else{
        // not login

      }*/

      return view('login2',compact($users, 'users'));
    }


}
