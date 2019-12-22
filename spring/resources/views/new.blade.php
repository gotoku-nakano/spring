@extends('/layouts/layout')
@section('content')
<head>
<!-- Custom styles for this template -->
<link href="css/login_style.css" rel="stylesheet">
</head>
    {{-- 個別ページの内容 --}}

    <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">物件登録</h5>

            <form class="form-signin" action="/shop/new" method="post" enctype="multipart/form-data">
            <!--  <form class="" action="/shop/new" method="post" enctype="multipart/form-data"> -->
              {{ csrf_field() }}
              <div class="form-label-group">
                <input type="text" name="shop_name" id="inputshopname" class="form-control" placeholder="Shop name" required autofocus>
                <label for="inputEmail">店舗名</label>
              </div>

              <div class="form-label-group">
                <input type="text" name="place_name" id="inputplacename" class="form-control" placeholder="Place name" required>
                <label for="inputPassword">住所</label>
              </div>


              <select name="max_people_number" id="people" class="form-control col-sm-1">
                <option value="人数">人数</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <p>宿泊可能人数</p>
                <input id="file" type="file" name="image">
                <input id="file_two" type="file" name="image_two">
                <input id="file_three" type="file" name="image_three">
                <input id="file_four" type="file" name="image_four">

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">登録</button>

            </form>
          </div>
        </div>
      </div>

@endsection
