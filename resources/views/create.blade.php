
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
  </head>
  <body>
    <div class="container">
    
      <h2>Tworzenie punktu</h2><br/>
      <form method="post" action="{{url('wspolrzednes')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4">
            <label for="Name">Nazwa:</label>
            <input type="text" class="form-control" name="nazwa">
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Długość geograficzna:</label>
            <input type="text" class="form-control" name="wspolrzedna1">
          </div>
          <div class="form-group col-md-4">
            <label for="Name">Szerokość geograficzna:</label>
            <input type="text" class="form-control" name="wspolrzedna2">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12"></div>
          <div class="form-group col-md-4" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Stwórz</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>