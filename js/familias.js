function gestionar_familia(){
    var valor = true;
    //Definimos el botón que activa la función
    var boton = "btn-agregar-familia";
    //Extraemos las variable según los valores del campo consultado
    var id_familia = $('#id_familia').val();
    var familia_nombre = $('#familia_nombre').val();
    var familia_descripcion = $('#familia_descripcion').val();
    var familia_serie = $('#familia_serie').val();
    var familia_correlativo = $('#familia_correlativo').val();
    var familia_estado = $('#familia_estado').val();
    //Para actualizar, el id le envío como id_actualizar_producto
    //var id_actualizar_producto = $('#id_actualizar_producto').val();
    //Validamos si los campos a usar no se encuentran vacios
    valor = validar_campo_vacio('familia_nombre',familia_nombre, valor);
    valor = validar_campo_vacio('familia_estado',familia_estado, valor);
    valor = validar_campo_vacio('familia_serie',familia_serie, valor);
    //Si var valor no ha cambiado de valor, procedemos a hacer la llamada de ajax
    if(valor){
        $.ajax({
            type: "POST",
            url: urlweb + "api/Familias/guardar_familia",
            data: {
                "id_familia" : id_familia,
                "familia_nombre" : familia_nombre,
                "familia_descripcion" : familia_descripcion,
                "familia_serie" : familia_serie,
                "familia_estado" : familia_estado
            },
            dataType: 'json',
            beforeSend: function () {
                cambiar_estado_boton(boton, 'Guardando...', true);
            },
            success:function (r) {
                cambiar_estado_boton(boton, "<i class=\"fa fa-save fa-sm text-white-50\"></i> Guardar", false);
                switch (r.result.code) {
                    case 1:
                        if(r.result.id_familia != ""){
                            respuesta('¡Familia Guardada Exitosamente', 'success');
                        } else {
                            respuesta('¡Familia guardado! Recargando...', 'success');
                        }
                        setTimeout(function () { location.reload(); }, 1000);
                        break;
                    case 2:
                        respuesta('Error al guardar familia', 'error');
                        break;
                    case 3:
                        respuesta('Ya existe una familia con ese nombre', 'error');
                        break;
                    case 4:
                        respuesta('Ya existe una familia con esa serie', 'error');
                        break;
                    default:
                        respuesta('¡Algo catastrofico ha ocurrido!', 'error');
                        break;
                }
            }
        });
    }
}
function gestionar_familia_edit(){
    var valor = true;
    var boton = "btn-editar-familia";
    var id = $('#id').val();
    var nombre = $('#nombre').val();
    var descripcion = $('#descripcion').val();
    var serie = $('#serie').val();
    var estado = $('#estado').val();
    valor = validar_campo_vacio('nombre',nombre, valor);
    valor = validar_campo_vacio('serie',serie, valor);
    valor = validar_campo_vacio('estado',estado, valor);
    if(valor){
        $.ajax({
            type: "POST",
            url: urlweb + "api/Familias/guardar_familia",
            data: {
                "id_familia" : id,
                "familia_nombre" : nombre,
                "familia_descripcion" : descripcion,
                "familia_serie" : serie,
                "familia_estado" : estado
            },
            dataType: 'json',
            beforeSend: function () {
                cambiar_estado_boton(boton, 'Guardando...', true);
            },
            success:function (r) {
                cambiar_estado_boton(boton, "<i class=\"fa fa-save fa-sm text-white-50\"></i> Guardar", false);
                switch (r.result.code) {
                    case 1:
                        if(r.result.id_familia != ""){
                            respuesta('¡Familia Editada Exitosamente', 'success');
                        } else {
                            respuesta('¡Familia guardado! Recargando...', 'success');
                        }
                        setTimeout(function () { location.reload(); }, 1000);
                        break;
                    case 2:
                        respuesta('Error al guardar familia', 'error');
                        break;
                    case 3:
                        respuesta('Ya existe una familia con ese nombre', 'error');
                        break;
                    case 4:
                        respuesta('Ya existe una familia con esa serie', 'error');
                        break;
                    default:
                        respuesta('¡Algo catastrofico ha ocurrido!', 'error');
                        break;
                }
            }
        });
    }
}
function editarfamilia(id_familia){
    let guardarid = id_familia;
    $.ajax({
        type: "POST",
        url: urlweb + "api/Familias/mostrar",
        data: {
            guardarid :guardarid
        },
        dataType: 'json'
    }).done(function(datos_editar){
        console.log(datos_editar);
        let almacenar = datos_editar.result.code;
        $("#id").val(guardarid);
        $("#nombre").val(almacenar.familia_nombre);
        $("#descripcion").val(almacenar.familia_descripcion);
        $("#serie").val(almacenar.familia_serie);
        $("#estado").val(almacenar.familia_estado);
    });
    function edicion(familia_nombre, familia_descripcion, familia_serie, familia_estado){
    }
}
function limpiarfamilia(){
    $('#familia_nombre').val('');
    $('#familia_descripcion').val('');
    $('#familia_estado').val('');
    $('#familia_serie').val('');
}