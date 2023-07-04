<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ESTAS EN LA PAGINA CORRECTA 2</h1>
    <table border='1'>
    <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Correo</td>
        <td>Contraseña</td>
        <td>Fecha de Nacimiento</td>
        <td>Genero</td>
        <td>Busqueda</td>
        <td>Interes</td>
    </tr>
    <tr>
    </tr>
   @foreach ($usuarios as $usuario)
       <tr>
        <td>Id</td>
            <td>{{$usuario['id']}}</td>
            <td>{{$usuario['correo']}}</td>
            <td>{{$usuario['contraseña']}}</td>
            <td>{{$usuario['fecha_nac']}}</td>
            <td>{{$usuario['genero']}}</td>
            <td>{{$usuario['busqueda']}}</td>
            <td>{{$usuario['interes']}}</td>
        </tr>
   @endforeach
    </table>
</body>
</html>
