<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="asset(css/app.css)" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
        $( "#datepicker" ).datepicker();} );
    </script>
    <title>Tarefas</title>
</head>
<body>
    <form>
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo">

        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario">

        <label for="privaciadade">Privacidade</label>
        <select name="privacidade">
            <option name="privacidade"> Selecione</option>
            <option name="privacidade"> Público</option>
            <option name="privacidade"> Privado</option>
        </select>

        <label for="descricao"> Descrição</label>
        <input type="text" name="descricao" id="descricao">

        <label for="tipo"> Tipo</label>
        <input id="tipo" name="tipo" type="text">

        <label for="status">Status</label>
        <select name="status">
            <option name="status"> A Fazer</option>
            <option name="status">Fazendo</option>
            <option name="status">Feito</option>
        </select>

        <p>Data da Conclusão: <input type="text" name="datepicker" id="datepicker"></p>

    </form>
</body>
</html>