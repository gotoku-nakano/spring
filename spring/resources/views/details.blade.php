<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/#page-top">SUMIKA</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Memu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">トリップボード</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="login2">ログイン</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#signup">ヘルプ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">{{ $shop->shop_name }}</h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="{{ $shop->image }}" alt="">
        </div>

        <div class="col-md-4">
          <h1 class="my-3">施設情報</h1>
          <ul>
            <li>住所<p>{{ $shop->place_name }}</p></li>
            <li>人数<p>{{ $shop->max_people_number}}</p></li>
            <!--<li></li>-->

          </ul>
          <input type="date" name="arrival" class="form-control col-sm-2">
          <input type="submit" name="予約" value="予約">
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4"><!--Related Projects--></h3>

      <div class="row">

        <div class="col-md-3 col-sm-6 mb-4">
                <img class="img-fluid" src="{{ $shop->image }}" alt="">
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
                <img class="img-fluid" src="{{ $shop->image_two }}" alt="">
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
                <img class="img-fluid" src="{{ $shop->image_three }}" alt="">
        </div>

        <div class="col-md-3 col-sm-6 mb-4">
                <img class="img-fluid" src="{{ $shop->image_four}}" alt="">
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

  </body>
</html>
