$("#formulario_proveedor").on('submit', function(e){
    e.preventDefault()
    var valor = true;
    var boton = "btn-agregar-proveedor";
    var id_proveedor = $("#id_proveedor").val();
    var proveedor_nombre = $("#proveedor_nombre").val();
    var proveedor_direccion = $("#proveedor_direccion").val();
    var proveedor_telefono = $("#proveedor_telefono").val();
    var proveedor_estado = $("#proveedor_estado").val();
    valor = validar_campo_vacio('proveedor_nombre',proveedor_nombre, valor);
    valor = validar_campo_vacio('proveedor_telefono',proveedor_telefono, valor);
    valor = validar_campo_vacio('proveedor_estado',proveedor_estado, valor);
    if(valor){
        $.ajax({
            type: "POST",
            url: urlweb + "api/Proveedor/guardar_editar_proveedor",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            dataType: 'json',
            beforeSend: function () {
                cambiar_estado_boton(boton, 'Guardando...', true);
            },
            success:function (r) {
                cambiar_estado_boton(boton, "<i class=\"fa fa-save fa-sm text-white-50\"></i> Guardar", false);
                switch (r.result.code) {
                    case 1:
                        respuesta('¡Proveedor guardado! Recargando...', 'success');
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                        break;
                    case 2:
                        respuesta('Error al guardar proveedor', 'error');
                        break;
                    case 3:
                        respuesta('Ya existe un proveedor con ese nombre', 'error');
                        break;
                    case 4:
                        respuesta('El número debe contener 9 dígitos', 'error');
                        break;
                    default:
                        respuesta('¡Algo catastrofico ha ocurrido!', 'error');
                        break;
                }
            }
        });
    }
})
function editarproveedor(id_proveedor){
    let guardarid = id_proveedor;
    $.ajax({
        type: "POST",
        url: urlweb + "api/Proveedor/editar",
        data: {
            guardarid :guardarid
        },
        dataType: 'json'
    }).done(function(datos_editar){
        console.log(datos_editar);
        let almacenar = datos_editar.result.code;
        $("#id_proveedor").val(guardarid);
        $('#proveedor_nombre').val(almacenar.proveedor_nombre);
        $('#proveedor_direccion').val(almacenar.proveedor_direccion);
        $('#proveedor_telefono').val(almacenar.proveedor_telefono);
        $('#proveedor_estado').val(almacenar.proveedor_estado);
    });
    function edicion(proveedor_nombre, proveedor_direccion, proveedor_telefono, proveedor_estado){
    }

}

