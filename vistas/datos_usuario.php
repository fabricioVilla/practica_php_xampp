<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Login</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .body_principal_usuario{
            height: 100vh;
            width: 100vw;
            margin: 0;
            padding: 0;
            background-color: green;
        }
        .cuadro_foto{
            height: 250px;
            width: 200px;
            background-color: red;
            z-index: 3;
            margin-top: 20px;
        }
        .fondo_usuario{
            height: 200px;
            width: 100%;
            background-color: black;
            position: absolute;
            z-index: 1;
        }
        .barra_opociones{
            width: calc(95% - 200px);
            height: 80px;
            background-color: blue;
            margin-top: calc(250px - 60px);
            z-index: 1;
        }
        .header_usuario{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            position: relative;
            
        }
        .informacion_usuario{
            width: 95%;
            background-color: aqua;
            margin: auto;
            margin-top: 15px;
        }
        .barra_mensaje{
            height: 60px;
            width: 100%;
            background-color: orange;
        }
            
    </style>
</head>
<body>
    <div class="body_principal_usuario">
        <div class="header_usuario">
            <div class="fondo_usuario">

            </div>

            <div class="cuadro_foto">

            </div>
            <div class="barra_opociones">

            </div>
        </div>

       <div  class="informacion_usuario">
            <div class="barra_mensaje">
                dddd
            </div>
            <div class="barra_texto">
                
                Sobre mi... <br>
                Soy Pablo Martínez, un diseñador web con 6 años de experiencia en la creación de identidad para empresas. Me destaco por mi liderazgo y organización, y 
                estoy comprometido con mi empresa para ayudar a nuestros clientes a conseguir su identidad visual. Actualmente, busco mantenerme al día en cuanto a 
                tendencias digitales para que pueda contribuir con mi experiencia y habilidades dentro de iStrategy
            </div>
            <div class="barra_generales"></div>
        
       </div>

    </div>
</body>
</html>
