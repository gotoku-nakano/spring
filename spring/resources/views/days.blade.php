<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.min.css') }}">
    <script type="text/javascript" href="{{ asset('js/bootstrap-datepicker.ja.min.js') }}"></script>
    <script type="text/javascript" href="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
  </head>
  <body>
    <div class="input-group date" data-provide="datepicker">
    <input type="text" class="form-control"id="date_sample">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
    <h1>Hello, world!</h1>
    <div class="container">
    <div class="row mt-4">
        <div class="col-2">
            <label>日付：</label>
        </div>
        <div class="col-5">

            <!-- ここにカレンダー表示用のテキストボックスを追加 -->
            <input type="text" class="form-control" >

        </div>
    </div>
</div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>

        <!-- bootstrap-datepickerのjavascriptコード -->
        <script>
            $('#date_sample').datepicker();
        </script>

  </body>
</html>
