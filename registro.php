



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilo_registro.css">
    <title>Formulario Registro</title>
</head>

<body>
  <form action="registrar.php" method="Post" class="formulario" role="form">
    <section class="form-register">
        <h4>Formulario Registro</h4>
        <input class="controls" type="text" name="id_cedula" id="id_cedula" placeholder="Ingrese su cedula(que va a ser su usuario)">
        <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre">
        <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido">
        <input class="controls" type="email" name="email" id="email" placeholder="Ingrese su Correo">
        <input class="controls" type="password" name="contrasenna" id="contrasenna" placeholder="Ingrese su Contraseña">

        <div class="wrap">
            
                <div class="radio_bu">
                    <h2>Tipo de Usuario</h2>

                    <input type="radio" name="tipo_usua" id="Administrador" value="Administrador">
                    <label for="Administrador">Administrador</label>

                    <input type="radio" name="tipo_usua" id="Usuario" value="Usario">
                    <label for="Usuario">Usuario</label>

                </div>

            
            <button class="botons" type="submit" id="liveAlertBtn">Registrar</button>
            
            <p><a href="index.php">¿Ya tengo Cuenta?</a></p>
    </section>
   </form>

</body>

</html>