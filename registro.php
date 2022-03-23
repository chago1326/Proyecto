<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estiloRegistro.css">
    <title>Formulario Registro</title>
</head>

<body>
    <form action="registrar.php" method="Post" class="formulario" role="form">
        <section class="form-register">
            <h4>Formulario Registro</h4>
            <input class="controls" type="number" name="id_cedula" id="id_cedula"
                placeholder="Ingrese su cedula(que va a ser su usuario)" required>
            <input class="controls" type="text" name="nombre" id="nombre" placeholder="Ingrese su Nombre" required>
            <input class="controls" type="text" name="apellido" id="apellido" placeholder="Ingrese su Apellido"
                required>
            <input class="controls" type="email" name="email" id="email" placeholder="Ingrese su Correo" required>
            <input class="controls" type="password" name="contrasenna" id="contrasenna"
                placeholder="Ingrese su Contraseña" required>

            <div class="wrap">
                <select name="tipoUsua">
                    <option value="Administrador">Administrador</option>
                    <option value="Usuario" selected>Usuario</option>
                </select>


                <button class="botons" type="submit" id="liveAlertBtn">Registrar</button>

                <p><a href="index.php">¿Ya tengo Cuenta?</a></p>
        </section>
    </form>

</body>

</html>