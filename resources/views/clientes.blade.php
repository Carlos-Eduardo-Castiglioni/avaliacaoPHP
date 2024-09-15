<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista Cliente</title>
  <link rel="stylesheet" href="{{url('Css/listaCliente.css')}}">
</head>
<body>
  <div class="container">
    <h1>Clientes</h1>
    <table>
      <thead>
        <tr id="titulo">
          <th>Nome</th>
          <th>CPF</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($clientes as $cliente)
        <tr>
          <td>{{$cliente->name}}</td>
          <td>{{$cliente->cpf}}</td>
          <td>{{$cliente->email}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</body>
</html>
