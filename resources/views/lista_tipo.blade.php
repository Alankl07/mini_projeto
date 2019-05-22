<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Nome</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tipo as $usu)
        <tr>       
            <td>{{$usu->Nome}}</td>
            <td>
            <form action = "{{route('tipo.destroy', $usu)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('tipo.edit', $usu)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>  
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>