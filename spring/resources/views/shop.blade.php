<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    @foreach ($shops as $shop)
      <p>user_id: {{ $shop->id }}</p>
      <p>{{ $shop->shop_name }}</p>
    @endforeach

  </body>
</html>
