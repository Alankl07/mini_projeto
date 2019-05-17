<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" >
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
        $( "#datepicker" ).datepicker();} );
    </script>
    <title>Cadastro Usuário</title>
</head>
<body>
    <h1>Cadastro de Usuário</h1>
    <form>
        <div>
            <label for="nome">Nome</label>
            <input name="nome" id="name" class="form-control" type="text" >
        </div>

        <div>    
            <label for="sexo">Sexo</label>
            <select name="sexo">
                <option name="sexo" > Selcione</option>
                <option name="sexo" > Masculino</option>
                <option name="sexo"> Feminino</option>
            </select>
        </div>

        <div>    
            <p>Date: <input class="form-control" type="text" name="datepicker" id="datepicker"></p>
        </div>

        <div>    
            <label for="email">E-mail</label>
            <input name="email" id="email" class="form-control" type="text" >
        </div>

        <div>
            <label for="tel">Telefone</label>
            <input name="tel" id="tel" class="form-control" type="text" >
        </div>

        <div>
            <label for="login">Login</label>
            <input name="tel" id="tel" class="form-control" type="text" >
        </div>

        <div>
            <label for="senha">Senha</label>
            <input name="senha" id="senha" class="form-control" type="text" >
        </div>

        <div>
            <button style="   margin-top:50px"  disabled="disabled">Cadastrar</button>
        </div>
    </form>
</body>
</html>