<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/login_style.css" rel="stylesheet">

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

    <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">ログイン</h5>

            <form class="form-signin" action="/login_user" method="post">
              {{ csrf_field() }}
              <div class="form-label-group">
                <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                <label for="inputEmail">メール</label>
              </div>

              <div class="form-label-group">
                <input type="text" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">パスワード</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">メールアドレスを保存する</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">ログイン</button>
              <hr class="my-4">
            <!--
              <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"><i class="fab fa-google mr-2"></i> Sign in with Google</button>
              <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit"><i class="fab fa-facebook-f mr-2"></i> Sign in with Facebook</button>
            -->
            </form>
            <form class="form-create-user" action="/create_user" method="get">
              {{ csrf_field() }}
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">新規登録</button>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
  </body>
</html>
