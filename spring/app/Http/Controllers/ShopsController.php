<?php

namespace App\Http\Controllers;
use App\Shop;
use App\Day;

use Illuminate\Http\Request;

class ShopsController extends Controller
{
    public function get_shop_name(Request $request)
    {
      $shops = Shop::all();
      $value = $request->session()->get('key');
      //dd($value);
      return view('spring',compact($shops, 'shops'));
    }

    public function details(int $id)
    {
      $shop = Shop::find($id);
      return view('details',compact($shop, 'shop'));
    }

    public function list(Request $reqest)
    {
      $shops = Shop::where('shop_name','LIKE',$reqest->input('%shop_name%'))->get();

      /*->where('',$reqest->input(''))

      ->where('',$reqest->input(''))->where('',$reqest->input(''));*/
      /*var_dump($reqest->input('shop_name'));*/
      return view('list',compact($shops,'shops'));
    }

    public function days(Request $reqest)
    {
      return view('days');
    }

    public function new(Request $reqest)
    {
      return view('new');
    }

    public function new_post(Request $reqest)
    {
      $shop = new Shop;
      $shop->shop_name = $reqest->input('shop_name');
      $shop->place_name = $reqest->input('place_name');
      $shop->max_people_number = $reqest->input('max_people_number');
      $reqest->file('image')->move(public_path('images'), 'a.jpg');
      $reqest->file('image_two')->move(public_path('images'), 'b.jpg');
      $reqest->file('image_three')->move(public_path('images'), 'c.jpg');
      $reqest->file('image_four')->move(public_path('images'), 'd.jpg');
      $shop->image = "/images/a.jpg";
  //    $request->file('image')->move(public_path('images'), 'b.jpg');
      $shop->image_two = "/images/b.jpg";
  //    $request->file('image')->move(public_path('images'), 'c.jpg');
      $shop->image_three = "/images/c.jpg";
    //  $request->file('image')->move(public_path('images'), 'd.jpg');
      $shop->image_four = "/images/d.jpg";
      $shop->save();
      //$reqest->file('image')->move(public_path('images'), 'a.jpg');
      // /imagess/a.jpg
      dd($shop);
      dd($reqest);
    }

    public function sample_shop_day(Request $reqest){
      $day = new Day;
      // ちめい
      $shop_name = "aaa";
      $shop_id = Shop::where('shop_name', 'LIKE', "%$shop_name%")->get();
      // 日付-日付
 // dd($shop_id[0]["id"]);
      // この日のだめな店舗を取得する
      $days = Day::where('shop_id', '=' , $shop_id[0]["id"])->get();
      dd($days);
      $shops = [];
      foreach ($days as $key => $value) {
        // もしmatchしていたものに関しては、表示をしない
        // if

      }
      dd($day::all());
      // $day =
    }
/*    public function login_user(Request $reqest)
    {
      $users = User::where('email',$reqest->input('email'))->where('password',$reqest->input('password'))->get()->first();
      //
      /*if ($users) {
        // login success
      }else{
        // not login

      }*/

/*      return view('login2',compact($users, 'users'));
    }*/

}
