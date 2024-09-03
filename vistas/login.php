<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            border: 1px solid #ddd;
            padding: 20px;
            border: none;
        }
        .form-container h2 {
            margin-top: 0;
            width: 100%;
            text-align: center;
        }
        .form-container h3 {
            margin-top: 0;
            width: 100%;
            text-align: center;
        }
        .form-container label {
            display: block;
            width: 100%;
        }
        .form-container input[type="text"],
        .form-container input[type="password"] {
            width: 100%;
            padding: 8px;
            border: none;
            background-color: #2E465B;
            height: 25px;
        }
        .form-container input[type="checkbox"] {
            margin-right: 10px;
        }
        .form-container input[type="submit"] {
            background-color: #cd3739;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-container input[type="submit"]:hover {
            background-color: #cd3739;
        }
        .centrar_formulario{
            display: flex;
            justify-content: center;
            align-content: center;
            flex-wrap: wrap;
        }
        .formulario_login{
            width: 100%;
            max-width: 500px;
        }
        .logo_login{
            width: 300px;
            height: auto;
            margin-bottom: 15px;
        }
        .contrasenia_opcion{
            display: flex;
            width: 100%;
            margin-top: 15px;
        }
        .text_contrasenia{
            width: 100px;
        }
        .text_opcion{
            width: calc(100% - 100px);
            text-align: right;
            color: red;
        }
        .opcion_ecordarme{
            margin-top: 15px;
           
        }
        .checkbox_recordar_session{
            background-color: rebeccapurple;
        }
    </style>
</head>
<body>
    <div class="form-container centrar_formulario">
        <img class="logo_login" src="../recursos/Copia de logo istrategy.svg" alt="">
        <h2>Iniciar sesión</h2>
        <h3>ingresa tus datos a continuación</h3>
        <form action="procesar.php" method="post" class="formulario_login centrar_formulario">
            <label for="usuario">Correo electrónico</label>
            <input type="text" id="usuario" name="usuario" required>
           
            <div class="contrasenia_opcion ">
                <div  class="text_contrasenia">
                    <label  for="password" >Contraseña</label>
                </div>
                <div class="text_opcion">
                    <label  for="">¿Olvidasde la contraseña?</label>
                </div>
                 
            </div>
            


            <input type="password" id="password" name="password" required>

            <label class="opcion_ecordarme">
                <input class="checkbox_recordar_session" type="checkbox" name="recordar" value="1"> Recordarme
            </label>

            <input type="submit" value="Iniciar sesión">
        </form>
    </div>
</body>
</html>
