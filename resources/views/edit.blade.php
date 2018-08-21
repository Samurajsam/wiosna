<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel CRUD - EDIT </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
      <h2>Aktualizuj Punkt</h2><br/>
        <form method="post" action="{{action('WspolrzedneController@update', $id)}}">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
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
          <div class="form-group col-md-12" style="margin-top:10px">
            <button type="submit" class="btn btn-success">Aktualizuj</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>