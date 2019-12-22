<!DOCTYPE html>
<html lang="ja" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title></title>

  </head>

  <body>
    <form class="" action="/create_user" method="post">
      {{ csrf_field() }}
      <p>name</p>
      <input type="text" name="name" value="">
      <p>e-mail</p>
      <input type="text" name="email" value="">
      <p>password</p>
      <input type="text" name="password" value="">
      <input type="submit">
    </form>
    
    @foreach ($users as $user)
      <p>user_id: {{ $user->id }}</p>
      <p>{{ $user->name }}</p>
      <p>{{ $user->email }}</p>
      <p>{{ $user->password }}</p>
      <a href="/mypage/{{$user->id}}">内容変更</a>
      <form class="" action="/create_user" method="post">
        {{csrf_field()}}
        @method('PUT')
        <input type="text" name="name" value="">
        <input type="hidden" value="{{$user->id}}" name="id" value="">
        <input type="submit" name="name" value="tui-tonaいよう">
      </form>
    @endforeach
  </body>

</html>
