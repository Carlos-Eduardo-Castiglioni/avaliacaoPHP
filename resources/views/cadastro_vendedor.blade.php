<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Vendedor</title>
    <link rel="stylesheet" href="{{url('Css/cadastroVendedor.css')}}">
</head>
<body>

    <form action="/criar_vendedor" method="post">
    @csrf
        <div class="container">
            <div class="container-tudo">

                <div class="container_grp">
                    <label for="name" id="label_name">Nome: </label>
                    <input type="text" name="name" class="input-name" required>
                </div>

                <div class="container_grp">
                    <label for="matricula" id="label_matricula">Matrícula: </label>
                    <input type="text" name="matricula" class="input-matricula" required>
                </div>

                <div class="container_grp">
                    <label for="comissao" id="label_comissao">Comissão: </label>
                    <input type="number" name="comissao" class="input-comissao" required>
                </div>

                <div class="container_button">
                    <input type="submit" id="input-button" value="Salvar">
                </div>

            </div>
        </div>

    </form>

</body>
</html>
