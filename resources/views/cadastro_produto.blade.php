<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="{{url('Css/cadastroProduto.css')}}">
</head>
<body>

    <form action="/criar_produto" method="post">
    @csrf
        <div class="container">
            <div class="container-tudo">

                <div class="container_grp">
                    <label for="name" id="label_name">Nome: </label>
                    <input type="text" name="name" class="input-name" required>
                </div>

                <div class="container_grp">
                    <label for="descricao" id="label_descricao">Descrição: </label>
                    <input type="text" name="descricao" class="input-descricao" required>
                </div>

                <div class="container_grp">
                    <label for="preco" id="label_preco">Preço: </label>
                    <input type="number" name="preco" class="input-preco" required>
                </div>

                <div class="container_button">
                    <input type="submit" id="input-button" value="Salvar">
                </div>

            </div>
        </div>

    </form>

</body>
</html>
