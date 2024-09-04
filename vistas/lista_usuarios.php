<?php
 include '../elementos/formulario_contacto.php'
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="../css/lista_usuarios.css">
    <link rel="stylesheet" href="../css/modal.css">
</head>
<script>
    function mostrarModal(){
        console.log("mostrarModal: ");
        document.getElementById('modal').className=''
        document.getElementById('titulo_modal').innerText='Agregar contacto'
    }
</script>
<body>
    <div class="body_principal">

        <div id="modal" class="ocultar">
           
           <?php 
           echo $html_modal; 
           ?> 
        </div>
        


        <div class="header">
            <div class="header_auto">
                <button class="btn_agregar_contacto" onclick="mostrarModal();" style="cursor:pointer;">agregar <br> nuevo contacto</button>
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
