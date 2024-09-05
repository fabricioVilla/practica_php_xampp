<?php
 include '../elementos/formulario_contacto.php'
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/lista_usuarios.css">
    <link rel="stylesheet" href="../css/modal.css">
</head>
<script>
    function mostrarModal(accion){
        console.log("accion: ", accion);
        event.preventDefault();
        console.log("mostrarModal: ");
        document.getElementById('modal').className='';
        document.getElementById('titulo_modal').innerText=accion==1?'Agregar contacto':'Editar contacto';
        document.getElementById('guardar_buton').className=accion==1?'':'ocultar';
        document.getElementById('editar_buton').className=accion==2?'':'ocultar';
        document.getElementById('fecha_union').className=accion==2?'formulario_contacto_input':'ocultar';
        document.getElementById('label_fecha_u').className=accion==2?'':'ocultar';
    }

    function mostrarModalEditar(accion,id,nombre,email,telefono,rol,salario,fecha){
        event.preventDefault();
        mostrarModal(accion);
        document.getElementById('nombre').value=nombre;
        document.getElementById('correo').value=email;
        document.getElementById('telefono').value=telefono;
        document.getElementById('rol').value=rol;
        document.getElementById('fecha_union').value=fecha;
        document.getElementById('salario').value=salario; 
        document.getElementById('id_fila_usuario').value=id;         
    }

    function crearTabla(resultado){
        if(resultado.length>0){
                            var html = '';
                            
                            resultado.forEach(element => {

                                html+=`<tr id="${element.id+element.email}">
                                        <td>${element.id}</td>
                                        <td>${element.nombre}</td>
                                        <td>${element.email}</td>
                                        <td>${element.telefono}</td>
                                        <td>
                                            <p class="marcador_rol">${element.rol}</p>
                                            
                                        </td>
                                        <td>${element.fecha}</td>
                                        <td>${element.salario}</td>
                                        <td >
                                            <div class="action-buttons">
                                                <button class="boton_icono centrar_flex" 
                                                onclick="mostrarModalEditar(2,${element.id},'${element.nombre}','${element.email}',${element.telefono},'${element.rol}',${element.salario},${element.fecha});">
                                                    <img class="iconos" src="../recursos/images/icono pluma-8.png" alt="">
                                                </button>
                                                <button class="boton_icono centrar_flex" onclick="eliminarElemento(${element.id})">
                                                    <img class="iconos" src="../recursos/images/icono basura-8.png" alt="">
                                                </button>
                                            </div>
                                            
                                        </td>
                                    </tr>`

                                
                            });
                            document.getElementById('tabla_contactos').innerHTML = html;
                        }
    }
    function recuperarContactos(){
        event.preventDefault();
            try {
                fetch('../funciones/consultar_contactos.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({})
                    })
                    .then(response => response.json())
                    .then(result => {
                        console.log('Response from PHP:', result);
                       crearTabla(result.resultado);
                    })
            } catch (error) {
                console.log("error: ", error);
                
            }
    }

    function eliminarElemento(id){
        event.preventDefault();
        try {
            fetch('../funciones/eliminar_contacto.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({"id":id})
                })
                .then(response => response.json())
                .then(result => {
                    console.log('Response from PHP:', result);
                    if(result.status=="ok"){
                        window.location.reload(); 
                    }
                })
        } catch (error) {
            console.log("error: ", error);
            
        }

    }

    function buscar(valor){
        //console.log("::::::::::::::::::::::",valor);
        event.preventDefault();
        try {
            fetch('../funciones/buscar_contacto.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({"correo_tel":valor})
                })
                .then(response => response.json())
                .then(result => {
                    //console.log('Response from PHP:', result);
                    if(result.status=="ok"){
                        crearTabla(result.resultado);
                    }
                })
        } catch (error) {
            console.log("error: ", error);
            
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        recuperarContactos();
    });
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
                <button class="btn_agregar_contacto" onclick="mostrarModal(1);" style="cursor:pointer;">agregar <br> nuevo contacto</button>
            </div>
            <div class="header_auto">
                <label>Mostras  <input class="elementos_mostrar" type="number" id="input2" placeholder="10"> entradas</label>
            </div>
            <div class="header_auto centrarImg" style="margin: auto;">
                <img class="logo" src="../recursos/logo istrategy.svg" alt="">
            </div>
            <div class="header_auto centrar_flex">
                <label for="">Buscardor: </label>   
                <input class="buscador" type="text" placeholder="tel o correo" onkeyup="buscar(this.value)">
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
                        <tbody class="contenido_tabla" id="tabla_contactos">
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
                                        <button class="boton_icono centrar_flex" onclick="">
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
