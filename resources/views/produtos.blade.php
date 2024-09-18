<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista Produtos</title>
  <link rel="stylesheet" href="{{url('Css/listaProduto.css')}}">
</head>
<body>
  <div class="container">
    <h1>Produtos</h1>
    <table>
      <thead>
        <tr id="titulo">
          <th>Nome</th>
          <th>Descrição</th>
          <th>Preço</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($produtos as $produto)
        <tr>
          <td>{{$produto->name}} </td>
          <td>{{$produto->descricao}}</td>
          <td>{{$produto->preco}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>

