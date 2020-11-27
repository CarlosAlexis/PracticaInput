<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
</head>

<body>
    @section ('formulario')
    <main>
    <form action="{{action('Controlador@verificacion')}}" method = "POST">
        {{csrf_field()}}
        <label for="user">Usuario</label>
        <input type="text" name = "user">
        <br>
        <label for="pass">Contraseña</label>
        <input type="password" name = "pass">
        <br>
       
        <input type="submit" value = "Enviar datos">
    </form>
    </main>
    @show
</body>

</html>