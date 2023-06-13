//Se usa para agregar un nuevo menú al sistema
function gestionar_categoria(){
    var valor = true;
    //Definimos el botón que activa la función
    var boton = "btn-agregar-categoria";
    //Extraemos las variable según los valores del campo consultado
    var id_categoria = $('#id_categoria').val();
    var categoria_nombre = $('#categoria_nombre').val();
    var categoria_estado = $('#categoria_estado').val();
    var id_familia = $('#id_familia').val();
    //Validamos si los campos a usar no se encuentran vacios
    valor = validar_campo_vacio('categoria_nombre', categoria_nombre, valor);
    valor = validar_campo_vacio('categoria_estado', categoria_estado, valor);
    //valor = validar_campo_vacio('id_categoria', id_categoria, valor);
    //Si var valor no ha cambiado de valor, procedemos a hacer la llamada de ajax
    if(valor){
        //Cadena donde enviaremos los parametros por POST
        var cadena = "categoria_nombre=" + categoria_nombre +
            "&categoria_estado=" + categoria_estado+
            "&id_categoria=" + id_categoria+
            "&id_familia=" + id_familia;
        $.ajax({
            type: "POST",
            url: urlweb + "api/Categoria/guardar_categoria",
            data: cadena,
            dataType: 'json',
            beforeSend: function () {
                cambiar_estado_boton(boton, 'Guardando...', true);
            },
            success:function (r) {
                cambiar_estado_boton(boton, "<i class=\"fa fa-save fa-sm text-white-50\"></i> Guardar", false);
                switch (r.result.code) {
                    case 1:
                        if(id_categoria != ""){
                            respuesta('¡Categoria Editado Exitosamente', 'success');
                        } else {
                            respuesta('¡Categoria guardado! Recargando...', 'success');
                        }
                        setTimeout(function () { location.reload(); }, 1000);
                        break;
                    case 2:
                        respuesta('Error al guardar categoria', 'error');
                        break;
                    case 3:
                        respuesta('La categoria ya se encuentra registrada', 'error');
                        break;
                    default:
                        respuesta('¡Algo catastrofico ha ocurrido!', 'error');
                        break;
                }
            }
        });
    }
}
//Se usa para agregar un nuevo menú al sistema
function gestionar_opcion(){
    var valor = true;
    //Definimos el botón que activa la función
    var boton = "btn-agregar-opcion";
    //Extraemos las variable según los valores del campo consultado
    var id_menu = $('#id_menu').val();
    var id_opcion = $('#id_opcion').val();
    var opcion_nombre = $('#opcion_nombre').val();
    var opcion_funcion = $('#opcion_funcion').val();
    var opcion_icono = $('#opcion_icono').val();
    var opcion_orden = $('#opcion_orden').val();
    var opcion_mostrar = $('#opcion_mostrar').val();
    var opcion_estado = $('#opcion_estado').val();
    //Validamos si los campos a usar no se encuentran vacios
    valor = validar_campo_vacio('id_menu', id_menu, valor);
    valor = validar_campo_vacio('opcion_nombre', opcion_nombre, valor);
    valor = validar_campo_vacio('opcion_funcion', opcion_funcion, valor);
    valor = validar_campo_vacio('opcion_orden', opcion_orden, valor);
    valor = validar_campo_vacio('opcion_mostrar', opcion_mostrar, valor);
    valor = validar_campo_vacio('opcion_estado', opcion_estado, valor);

    //Si var valor no ha cambiado de valor, procedemos a hacer la llamada de ajax
    if(valor){
        //Cadena donde enviaremos los parametros por POST
        var cadena = "id_opcion=" + id_opcion +
            "&id_menu=" + id_menu +
            "&opcion_nombre=" + opcion_nombre +
            "&opcion_funcion=" + opcion_funcion +
            "&opcion_icono=" + opcion_icono +
            "&opcion_orden=" + opcion_orden +
            "&opcion_mostrar=" + opcion_mostrar +
            "&opcion_estado=" + opcion_estado;
        $.ajax({
            type: "POST",
            url: urlweb + "api/menu/guardar_opcion",
            data: cadena,
            dataType: 'json',
            beforeSend: function () {
                cambiar_estado_boton(boton, 'Guardando...', true);
            },
            success:function (r) {
                cambiar_estado_boton(boton, "<i class=\"fa fa-save fa-sm text-white-50\"></i> Guardar", false);
                switch (r.result.code) {
                    case 1:
                        if(id_opcion != ""){
                            respuesta('¡Opción Editada Exitosamente', 'success');
                            $('#opcionorden' + id_opcion).html(r.result.opcion.opcion_orden);
                            //$('#opcionicono' + id_opcion).html(r.result.opcion.opcion_icono);
                            $('#opcionnombre' + id_opcion).html(r.result.opcion.opcion_nombre);
                            $('#opcionfuncion' + id_opcion).html(r.result.opcion.opcion_funcion);
                            $('#botonopcion' + id_opcion).html("<button data-toggle=\"modal\" data-target=\"#gestionOpciones\" class=\"btn btn-sm btn-warning btne\" onclick=\"cambiar_texto_formulario('exampleModalLabel', 'Editar Opción'); edicion_opcion(" + r.result.opcion.id_opcion + ", '" +r.result.opcion.opcion_nombre+"', '" + r.result.opcion.opcion_funcion + "', '" + r.result.opcion.opcion_icono + "', " + r.result.opcion.opcion_orden + ", " + r.result.opcion.opcion_mostrar + ", " + r.result.opcion.opcion_estado + ")\" >Editar</button>");
                            colocar_estado_texto(r.result.opcion.opcion_mostrar, 'opcionmostrar' + id_opcion, 'SI', 'NO')
                            colocar_estado_texto(r.result.opcion.opcion_estado, 'opcionestado' + id_opcion, 'HABILITADO', 'DESHABILITADO')
                        } else {
                            respuesta('¡Opción guardado! Recargando...', 'success');
                            setTimeout(function () {
                                location.reload();
                            }, 1000);
                        }
                        break;
                    case 2:
                        respuesta('Error al guardar menú', 'error');
                        break;
                    case 3:
                        respuesta('La función ya se encuentra registrada dentro del Menú', 'error');
                        break;
                    default:
                        respuesta('¡Algo catastrofico ha ocurrido!', 'error');
                        break;
                }
            }
        });
    }
}
//Funcion para colocar datos a editar
function edicion_menu(id_menu, menu_nombre, menu_controlador, menu_icono, menu_orden, menu_mostrar, menu_estado){
    $('#id_menu').val(id_menu);
    $('#menu_nombre').val(menu_nombre);
    $('#menu_controlador').val(menu_controlador);
    $('#menu_icono').val(menu_icono);
    $('#menu_orden').val(menu_orden);
    $('#menu_mostrar').val(menu_mostrar);
    $('#menu_estado').val(menu_estado);
    cambiar_color_estado('menu_estado');
    cambiar_color_estado('menu_mostrar');
}
//Limpia el formulario antes de agregar un nuevo menú
function agregacion_menu(){
    $('#id_menu').val("");
    $('#menu_nombre').val("");
    $('#menu_controlador').val("");
    $('#menu_icono').val("fa fa-");
    $('#menu_orden').val("");
    $("#menu_mostrar").css('color','white');
    $("#menu_mostrar").css('background','#17a673');

    $("#menu_estado").css('color','white');
    $("#menu_estado").css('background','#17a673');
}
//Se usa para gestionar la relacion entre un menu y una relacion
function gestionar_relacion(id_rol, id_menu, relacion){
    var valor = true;
    //Validamos si los campos a usar no se encuentran vacios
    valor = validar_parametro_vacio(id_rol, valor);
    valor = validar_parametro_vacio(id_menu, valor);
    valor = validar_parametro_vacio(relacion, valor);
    //Si var valor no ha cambiado de valor, procedemos a hacer la llamada de ajax
    if(valor){
        //Definimos el mensaje y boton a afectar
        var mensaje_previo = "Eliminando...";
        var mensaje_posterior = "Eliminar Acceso";
        var boton = "btn-eliminarrelacion" + id_rol;
        //Definimos el botón que activa la función
        if(relacion == 1){
            boton = "btn-agregarrelacion" + id_rol;
            mensaje_previo = "Agregando...";
            mensaje_posterior = "Permitir Acceso";
        }
        //Cadena donde enviaremos los parametros por POST
        var cadena = "id_rol=" + id_rol +
            "&id_menu=" + id_menu +
            "&relacion=" + relacion;
        $.ajax({
            type: "POST",
            url: urlweb + "api/menu/configurar_relacion",
            data: cadena,
            dataType: 'json',
            beforeSend: function () {
                cambiar_estado_boton(boton, mensaje_previo, true);
            },
            success:function (r) {
                cambiar_estado_boton(boton, mensaje_posterior, false);
                switch (r.result.code) {
                    case 1:
                        if(relacion == 1){
                            //Si relacion es 1, mostramos el botón de eliminar
                            $('#btn-agregarrelacion' + id_rol).addClass('no-show');
                            $('#btn-eliminarrelacion' + id_rol).removeClass('no-show');
                        } else {
                            //Si relacion es 1, mostramos el botón de permitir
                            $('#btn-agregarrelacion' + id_rol).removeClass('no-show');
                            $('#btn-eliminarrelacion' + id_rol).addClass('no-show');
                        }
                        colocar_estado_texto(relacion, 'acceso' + id_rol, 'CON ACCESO', 'SIN ACCESO')
                        respuesta('¡Relación Editada Exitosamente!', 'success');
                        break;
                    case 2:
                        respuesta('Error al modificar relación', 'error');
                        break;
                    default:
                        respuesta('¡Algo catastrofico ha ocurrido!', 'error');
                        break;
                }
            }
        });
    }
}
//Limpia el formulario antes de agregar un nuevo menú
function agregacion_opcion(){
    $('#id_opcion').val("");
    $('#opcion_nombre').val("");
    $('#opcion_funcion').val("");
    $('#opcion_icono').val("");
    $('#opcion_orden').val("");
    $("#opcion_mostrar").css('color','white');
    $("#opcion_mostrar").css('background','#17a673');

    $("#opcion_estado").css('color','white');
    $("#opcion_estado").css('background','#17a673');
}
//Funcion para colocar datos a editar opcion
function edicion_opcion(id_opcion, opcion_nombre, opcion_funcion, opcion_icono, opcion_orden, opcion_mostrar, opcion_estado){
    $('#id_opcion').val(id_opcion);
    $('#opcion_nombre').val(opcion_nombre);
    $('#opcion_funcion').val(opcion_funcion);
    $('#opcion_icono').val(opcion_icono);
    $('#opcion_orden').val(opcion_orden);
    $('#opcion_mostrar').val(opcion_mostrar);
    $('#opcion_estado').val(opcion_estado);
    cambiar_color_estado('opcion_mostrar');
    cambiar_color_estado('opcion_estado');
}
//Funcion para cargar información de los permisos de la opción
function cargar_permisos(id){
    $('#permiso_gestionar').load(urlweb + 'menu/gestion_permisos/' + id);
}
//Funcion para cargar las restricciones de la opción
function cargar_restricciones(id){
    $('#restricciones_gestionar').load(urlweb + 'menu/gestion_restricciones/' + id);
}
//Funcion para guardar los permisos
function agregar_permiso(){
    var valor = true;
    var id_permiso_opcion = $("#id_permiso_opcion").val();
    var permiso_accion = $("#permiso_accion").val();
    var permiso_estado = 1;
    //Validamos si los campos a usar no se encuentran vacios
    valor = validar_campo_vacio('permiso_accion',permiso_accion, valor);
    valor = validar_campo_vacio('id_permiso_opcion',id_permiso_opcion, valor);
    //Si var valor no ha cambiado de valor, procedemos a hacer la llamada de ajax
    if(valor){
        //Definimos el mensaje y boton a afectar
        var boton = "btn-agregar-permiso";
        //Cadena donde enviaremos los parametros por POST
        var cadena = "id_opcion=" + id_permiso_opcion +
            "&permiso_accion=" + permiso_accion +
            "&permiso_estado=" + permiso_estado;
        $.ajax({
            type: "POST",
            url: urlweb + "api/menu/agregar_permiso",
            data: cadena,
            dataType: 'json',
            beforeSend: function () {
                cambiar_estado_boton(boton, "Guardando...", true);
            },
            success:function (r) {
                cambiar_estado_boton(boton, "<i class=\"fa fa-save fa-sm text-white-50\"></i> Guardar", false);
                switch (r.result.code) {
                    case 1:
                        $('#permiso_gestionar').load(urlweb + 'menu/gestion_permisos/' + id_permiso_opcion);
                        respuesta('¡Permiso Agregado Exitosamente!', 'success');
                        break;
                    case 2:
                        respuesta('Error al agregar permiso', 'error');
                        break;
                    case 3:
                        respuesta('El permiso ya se encuentra registrado en esta opción', 'warning');
                        break;
                    default:
                        respuesta('¡Algo catastrofico ha ocurrido!', 'error');
                        break;
                }
            }
        });
    }
}
//Funcion para eliminar un permiso
function eliminar_permiso(id_permiso){
    var valor = true;
    //Validamos si los campos a usar no se encuentran vacios
    valor = validar_parametro_vacio(id_permiso, valor);
    //Si var valor no ha cambiado de valor, procedemos a hacer la llamada de ajax
    if(valor){
        //Definimos el mensaje y boton a afectar
        var boton = "btn-eliminarrelacion" + id_permiso;
        //Cadena donde enviaremos los parametros por POST
        var cadena = "id_permiso=" + id_permiso;
        $.ajax({
            type: "POST",
            url: urlweb + "api/menu/eliminar_permiso",
            data: cadena,
            dataType: 'json',
            beforeSend: function () {
                cambiar_estado_boton(boton, "Eliminando...", true);
            },
            success:function (r) {
                cambiar_estado_boton(boton, "Eliminar Permiso", false);
                switch (r.result.code) {
                    case 1:
                        $('#permiso' + id_permiso).remove();
                        respuesta('¡Permiso Eliminado!', 'success');
                        break;
                    case 2:
                        respuesta('Error al eliminar permiso', 'error');
                        break;
                    default:
                        respuesta('¡Algo catastrofico ha ocurrido!', 'error');
                        break;
                }
            }
        });
    }
}
//Se usa para gestionar la relacion entre un menu y una relacion
function gestionar_acceso(id_rol, id_opcion, relacion){
    var valor = true;
    //Validamos si los campos a usar no se encuentran vacios
    valor = validar_parametro_vacio(id_rol, valor);
    valor = validar_parametro_vacio(id_opcion, valor);
    valor = validar_parametro_vacio(relacion, valor);
    //Si var valor no ha cambiado de valor, procedemos a hacer la llamada de ajax
    if(valor){
        //Definimos el mensaje y boton a afectar
        var mensaje_previo = "Eliminando...";
        var mensaje_posterior = "Eliminar Acceso";
        var boton = "btn-eliminaracceso" + id_rol;
        //Definimos el botón que activa la función
        if(relacion == 1){
            boton = "btn-agregaracceso" + id_rol;
            mensaje_previo = "Agregando...";
            mensaje_posterior = "Permitir Acceso";
        }
        //Cadena donde enviaremos los parametros por POST
        var cadena = "id_rol=" + id_rol +
            "&id_opcion=" + id_opcion +
            "&relacion=" + relacion;
        $.ajax({
            type: "POST",
            url: urlweb + "api/menu/configurar_acceso",
            data: cadena,
            dataType: 'json',
            beforeSend: function () {
                cambiar_estado_boton(boton, mensaje_previo, true);
            },
            success:function (r) {
                cambiar_estado_boton(boton, mensaje_posterior, false);
                switch (r.result.code) {
                    case 1:
                        if(relacion == 1){
                            //Si relacion es 0, mostramos el botón de permitir
                            $('#btn-agregaracceso' + id_rol).addClass('no-show');
                            $('#btn-eliminaracceso' + id_rol).removeClass('no-show');
                        } else {
                            //Si relacion es 1, mostramos el botón de eliminar
                            $('#btn-agregaracceso' + id_rol).removeClass('no-show');
                            $('#btn-eliminaracceso' + id_rol).addClass('no-show');
                        }
                        colocar_estado_texto(relacion, 'acceso' + id_rol, 'CON ACCESO', 'SIN ACCESO')
                        respuesta('¡Relación Editada Exitosamente!', 'success');
                        break;
                    case 2:
                        respuesta('Error al modificar relación', 'error');
                        break;
                    default:
                        respuesta('¡Algo catastrofico ha ocurrido!', 'error');
                        break;
                }
            }
        });
    }
}

function editarcategoria(id_categoria){
    // $('#gestionProducto').modal('show');
    let guardarid = id_categoria;
    $.ajax({
        type: "POST",
        url: urlweb + "api/Categoria/mostrar",
        data: {
            guardarid :guardarid
        },
        dataType: 'json'
    }).done(function(datos_editar){
        console.log(datos_editar);
        let almacenar = datos_editar.result.code;
        $("#id_categoria").val(guardarid);
        $("#categoria_nombre").val(almacenar.categoria_nombre);
        $("#categoria_estado").val(almacenar.categoria_estado);
    });
    function edicion(categoria_nombre, categoria_estado){

    }

}

function limpiar3(){
    $('#categoria_nombre').val('');
    $('#categoria_estado').val('');
}