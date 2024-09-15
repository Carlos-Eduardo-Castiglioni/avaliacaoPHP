<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista Vendedor</title>
  <link rel="stylesheet" href="{{url('Css/listaVendedor.css')}}">
</head>
<body>
  <div class="container">
    <h1>Usuários</h1>
    <table>
      <thead>
        <tr id="titulo">
          <th>Nome</th>
          <th>Matrícula</th>
          <th>Comissão</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($vendedores as $vendedor)
        <tr>
          <td>{{$vendedor->name}}</td>
          <td>{{$vendedor->matricula}}</td>
          <td>{{$vendedor->comissao}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
