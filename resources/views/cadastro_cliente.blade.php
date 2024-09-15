<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Cliente</title>
    <link rel="stylesheet" href="{{url('Css/cadastroCliente.css')}}">
</head>
<body>
    <form action="/criar_cliente" method= "post">
    @csrf

        <div class="container">
        
            <div class="container-tudo">

                <div class="container_grp">
                    <div id="label_name">
                        <label for="name">Nome: </label>
                    </div>

                    <div>
                        <input type="text" name="name" class="input-name" placeholder="Digite seu Nome">
                    </div>
                </div>
            
                <div class="container_grp">
                    <div id="label_cpf">
                        <label for="cpf">CPF: </label>
                    </div>
                
                    <div class=>
                        <input type="text" name="cpf" class="input-name" placeholder="Digite seu CPF">
                    </div>
                </div>

                <div class="container_grp">
                    <div id="label_email">
                        <label for="email">Email: </label>
                    </div>

                    <div>
                        <input type="email" name="email" class="input-name" placeholder="Digite seu Email">
                    </div>
                </div>

            </div>

                <div class="container_button">
                    <input type="submit" value="Salvar" id="input-button">
                </div>

            
            
        </div>
    
    </form>
    
</body>
</html>