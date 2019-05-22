<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tela Inicial</title>
</head>
<body>
    <div>
        <a href="{{route('tarefas.create')}}">Criar Tarefas</a>
    </div>
    <div>
        <a href="{{route('tarefas.index')}}">Lista de Tarefas</a>
    </div>
    <div>
        <a href="{{route('tipo.create')}}">Tipos de Tarefas</a>
    </div>
    <div>
        <a href="{{route('usuario.create')}}"> Cadastrar Usuario</a>
    </div>
    <div>
        <a href="{{route('usuario.index')}}"> Lista de Usuario</a>
    </div>
</body>
</html>