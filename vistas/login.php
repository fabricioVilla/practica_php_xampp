<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>
<script>

function login(){
    event.preventDefault();
    var body={
        "correo": document.getElementById('correo').value,
        "contrasenia":document.getElementById('password').value
    }
    
    console.log("::::::::::::: ",body);

    try {
        fetch('../funciones/login.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(body)
            })
            .then(response => response.json())
            .then(result => {
                console.log('Response from PHP:', result);
            })
    } catch (error) {
        console.log("error: ", error);
        
    }

}

</script>
<body>
    <div class="form-container centrar_formulario">
        <img class="logo_login" src="../recursos/Copia de logo istrategy.svg" alt="">
        <h2>Iniciar sesión</h2>
        <h3>ingresa tus datos a continuación</h3>
        <form action="procesar.php" method="post" class="formulario_login centrar_formulario">
            <label for="usuario">Correo electrónico</label>
            <input style="color: white;" type="text" id="correo"  required>
           
            <div class="contrasenia_opcion ">
                <div  class="text_contrasenia">
                    <label  for="password" >Contraseña</label>
                </div>
                <div class="text_opcion">
                    <label  for="">¿Olvidasde la contraseña?</label>
                </div>
                 
            </div>
            <input style="color: white;" type="password" id="password"  required>

            <label class="opcion_ecordarme">
                <input class="checkbox_recordar_session" type="checkbox" name="recordar" value="1"> Recordarme
            </label>

            <input type="submit" value="Iniciar sesión" onclick="login();">
        </form>
    </div>
</body>
</html>
