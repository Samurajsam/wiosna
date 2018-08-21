<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Lista punktów</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
    <div class="col-md-12">
      <div class="form-group col-md-4"><h2>Lista punktów</h2>
      </div>
    </div>
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nazwa</th>
        <th>Długość geograficzna</th>
        <th>Szerokość geograficzna</th>
      </tr>
    </thead>
    <tbody>
 
      @foreach($wspolrzednes as $wspolrzedne)
      <tr>
        <td>{{$wspolrzedne['id']}}</td>
        <td>{{$wspolrzedne['nazwa']}}</td>
        <td>{{$wspolrzedne['wspolrzedna1']}}</td>
        <td>{{$wspolrzedne['wspolrzedna2']}}</td>
 
        <td align="right"><a href="{{action('WspolrzedneController@edit', $wspolrzedne['id'])}}" class="btn btn-warning">Edytuj</a></td>
        <td align="left">
          <form action="{{action('WspolrzedneController@destroy', $wspolrzedne['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Usuń</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
    
  </table>
    <div class="col-md-12">
      <div class="float-md-right"><a href="{{action('WspolrzedneController@create')}}" class="btn btn-success">Nowy punkt</a>
      </div>
    </div>
  </div>
  </body>
</html>