<?php
// pagina.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .body_principal{
            height: 100vh;
            width: 100vw;
            margin: 0;
            padding: 0;
        }
        .header{
            height: 70px;
            background-color: #334659;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .header_auto{
            width: fit-content;
            /* background-color: blue; */
            padding: 10px;
            color: white;
            max-height: 100%;
        }
        .contendor1{
            display: flex;
            width: 100%;
        }
        .menu{
            width: 300px;
            height: calc(100vh - 70px);
            background-color: #334659;
        }
        .cantidad{
            padding: 5px;
            background-color: orange;
        }
        .tabla_usuarios{
            width:calc(100% - 300px);
            min-width: 600px;
        }
        .etiqueta{
            padding: 5px;
        }
        .header_tabler{
            background-color: #cd3739;
        }
        .tabla_usuarios{
            width: 100%;
            border-collapse: collapse;
        }
        .header_tabler th{
            color: white;
            padding-top: 10px;
            padding-bottom: 10px;
            border: 2px solid #334659;
        }
        .contenido_tabla{
            border-left: 2px solid #334659;
            border-right: 2px solid #334659;
        }
        .contenido_tabla td{
            text-align: center;
            padding-top: 10px;
            padding-bottom: 10px;
            border-bottom: 2px solid #334659;
        }
        .btn_agregar_contacto{
            background-color: #cd3739;
            color: white;
            border: none;
        }
        .elementos_mostrar{
            width: 35px;
            background-color: #cd3739;
            border: none;
            color: white;
            text-align: center;
        }
        .centrar_flex{
            display: flex;
            justify-content: center;
        }
        .buscador{
            background-color: #334659;
            border: none;
            border: 1px solid white;
            margin-left: 5px;
            color: white;
        }
        .marcador_rol, .cantidad{
            padding: 3px;
            background-color: #cd3739;
            width: fit-content;
            margin: auto;
            border-radius: 5px;
        }
        .cantidad{
            min-width: 15px;
            text-align: center;
            margin-left: 4px;
        }
        .etiqueta{
            width: fit-content;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }
        .opcion{
            color: white;
            border: #cd3739;
            background: none;
        }
        .logo{
            height:auto;
            width: 200px;
        }
        .centrarImg{
            display: flex;
            justify-content: center;
            align-items: center;
            align-content: center;
        }
        .iconos{
            width: auto;
            height: 15px;
        }
        .action-buttons{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .boton_icono{
            background: none;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="body_principal">
        <div class="header">
            <div class="header_auto">
                <button class="btn_agregar_contacto">agragar<br>nuevo contacto</button>
            </div>
            <div class="header_auto">
                <label>Mostras  <input class="elementos_mostrar" type="number" id="input2" placeholder="10"> entradas</label>
            </div>
            <div class="header_auto centrarImg" style="margin: auto;">
                <img class="logo" src="../recursos/logo istrategy.svg" alt="">
            </div>
            <div class="header_auto centrar_flex">
                <label for="">Buscardor: </label>   <input class="buscador" type="text">
            </div>
        </div>
        <div class="contendor1">
            <div class="menu">
                <div class="etiquetas">
                    <br>
                    <div class="etiqueta"> 
                        <label for="password">trabajo  </label> <p class="cantidad" >4</p>
                    </div>

                </div> 
                <br>

                <button class="opcion">
                    Crea nueva etiqueta
                </button>
            
            
            </div>
            <div class="tabla_usuarios">
                <table  class="tabla_usuarios">
                        <thead class="header_tabler">
                            <tr >
                                <th >ID</th>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th>Teléfono</th>
                                <th>Rol</th>
                                <th>Fecha de Unión</th>
                                <th>Salario</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody class="contenido_tabla">
                            <!-- Aquí se pueden agregar filas de datos de ejemplo -->
                            <tr>
                                <td>1</td>
                                <td>Juan Pérez</td>
                                <td>juan.perez@example.com</td>
                                <td>(123) 456-7890</td>
                                <td>
                                    <p class="marcador_rol">Administrador</p>
                                    
                                </td>
                                <td>2024-01-15</td>
                                <td>$3000</td>
                                <td >
                                    <div class="action-buttons">
                                        <button class="boton_icono centrar_flex">
                                            <img class="iconos" src="../recursos/images/icono pluma-8.png" alt="">
                                        </button>
                                        <button class="boton_icono centrar_flex">
                                            <img class="iconos" src="../recursos/images/icono basura-8.png" alt="">
                                        </button>
                                    </div>
                                    
                                </td>
                            </tr>
                        
                        </tbody>
                    </table>
                
            </div>
        </div>
    </div>

    
</body>
</html>
