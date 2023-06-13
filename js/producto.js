$("#formulario_producto").on('submit', function(e){
    e.preventDefault()
    var valor = true;
    var boton = "btn-agregar-producto";
    var verificarimg = $("#id_producto").val();
    var codigo_barra_producto = $("#codigo_barra_producto").val();
    var id_subcategoria = $('#id_subcategoria').val();
    var subcategoria_pertenecer = $('#subcategoria_pertenecer').val();
    var producto_nombre = $('#producto_nombre').val();
    var producto_precio = $('#producto_precio').val();
    var producto_descuento = $('#producto_descuento').val();
    var producto_precioantiguo = $('#producto_precioantiguo').val();
    var producto_stock = $('#producto_stock').val();
    var producto_marca = $('#producto_marca').val();
    var producto_reseña = $('#producto_reseña').val();
    var producto_caracteristicas = $('#producto_caracteristicas').val();
    var producto_detalle = $('#producto_detalle').val();
    var producto_valoracion = $('#producto_valoracion').val();
    var producto_imagen = $('#producto_imagen').val();
    var producto_estado = $('#producto_estado').val();
    var id_producto = $('#id_producto').val();
    var id_producto = $('#id_producto').val();
    valor = validar_campo_vacio('producto_nombre',producto_nombre, valor);
    valor = validar_campo_vacio('producto_precio',producto_precio, valor);
    valor = validar_campo_vacio('producto_stock',producto_stock, valor);
    valor = validar_campo_vacio('codigo_barra_producto',codigo_barra_producto, valor);
    valor = validar_campo_vacio('producto_marca',producto_marca, valor);
    valor = validar_campo_vacio('producto_caracteristicas',producto_caracteristicas, valor);
    valor = validar_campo_vacio('producto_estado',producto_estado, valor);
    if(valor){
        $.ajax({
            type: "POST",
            url: urlweb + "api/Producto/guardar_producto_inicio",
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
                        respuesta('¡Producto guardado! Recargando...', 'success');
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                        break;
                    case 2:
                        respuesta('Error al guardar producto', 'error');
                        break;
                    case 3:
                        respuesta('Ya existe un producto con ese nombre', 'error');
                        break;
                    case 4:
                        respuesta('Ya existe un producto con esa serie', 'error');
                        break;
                    case 5:
                        respuesta('Debe ingresar una imagen del producto', 'error');
                        break;
                    default:
                        respuesta('¡Algo catastrofico ha ocurrido!', 'error');
                        break;
                }
            }
        });
    }
})
function limpiar_Producto(){
    $('#producto_nombre').val('');
    $('#subcategoria_pertenecer').val('');
    $('#producto_precio').val('');
    $('#producto_stock').val('');
    $('#producto_descuento').val('');
    $('#codigo_barra_producto').val('');
    $('#producto_precioantiguo').val('');
    $('#producto_marca').val('');
    $('#producto_reseña').val('');
    $('#producto_caracteristicas').val('');
    $('#producto_detalle').val('');
    $('#producto_imagen').val('');
    $('#producto_estado').val('');
    $('#visualizar').attr('src',"");
}
function editarproducto(id_producto){
    let guardarid = id_producto;
    $.ajax({
        type: "POST",
        url: urlweb + "api/Producto/editar",
        data: {
            guardarid :guardarid
        },
        dataType: 'json'
    }).done(function(datos_editar){
        console.log(datos_editar);
        let almacenar = datos_editar.result.code;
        $("#id_producto").val(guardarid);
        $('#producto_nombre').val(almacenar.producto_nombre);
        $('#producto_precio').val(almacenar.producto_precio);
        $('#producto_stock').val(almacenar.producto_stock);
        $('#producto_descuento').val(almacenar.producto_descuento);
        $('#producto_precioantiguo').val(almacenar.producto_precioantiguo);
        $('#producto_marca').val(almacenar.producto_marca);
        $('#producto_reseña').val(almacenar.producto_reseña);
        $('#producto_caracteristicas').val(almacenar.producto_caracteristicas);
        $('#producto_detalle').val(almacenar.producto_detalle);
        $('#producto_valoracion').val(almacenar.producto_valoracion);
        $('#codigo_barra_producto').val(almacenar.codigo_barra_producto);
        $('#producto_estado').val(almacenar.producto_estado);
        $('#visualizar').attr('src',urlweb+almacenar.producto_imagen);
    });
    function edicion(producto_nombre, producto_precio, producto_stock, producto_descuento, producto_precioantiguo, producto_marca, producto_reseña, producto_caracteristicas, producto_detalle, producto_valoracion, codigo_barra_producto, producto_imagen, producto_estado){
    }

}
function verimg(id_producto){
    let guardarid = id_producto;
    $.ajax({
        type: "POST",
        url: urlweb + "api/Producto/editar",
        data: {
            guardarid :guardarid
        },
        dataType: 'json'
    }).done(function(datos_editar){
        console.log(datos_editar);
        let almacenar = datos_editar.result.code;
        $("#mostrarimg").attr('src', urlweb+almacenar.producto_imagen);
    });
}
function previewImage(input, preview) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#'+preview).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
function calcularPrecioAntiguo_Producto(){
    var precioActualInput = document.getElementById('producto_precio');
    var descuentoInput = document.getElementById('producto_descuento');
    var precioAntiguoInput = document.getElementById('producto_precioantiguo');

    var precioActual = parseFloat(precioActualInput.value);
    var descuento = parseFloat(descuentoInput.value);

    if (!isNaN(precioActual)) {
        if (descuentoInput.value === '') {
            precioAntiguoInput.value = '';
        } else {
            var precioAntiguo = precioActual / (1 - (descuento / 100));
            precioAntiguoInput.value = precioAntiguo.toFixed(2);
        }
    } else {
        precioAntiguoInput.value = '';
    }
}
function aumentarValoracion_Producto(inputId, cantidad){
    var input = document.getElementById(inputId);
    var valoracion = parseFloat(input.value);

    if (!isNaN(valoracion) && valoracion < 5) {
        valoracion += cantidad;
        if (valoracion > 5) {
            valoracion = 5;
        }
        input.value = valoracion.toFixed(1);
    }
}
function disminuirValoracion_Producto(inputId, cantidad){
    var input = document.getElementById(inputId);
    var valoracion = parseFloat(input.value);

    if (!isNaN(valoracion) && valoracion > 0) {
        valoracion -= cantidad;
        if (valoracion < 0) {
            valoracion = 0;
        }
        input.value = valoracion.toFixed(1);
    }
}
function traer_marcas_inicio(){
    let id_subcategoria = $('#id_subcategoria').val()
    $.ajax({
        type: "POST",
        url: urlweb + "api/Producto/traermarca",
        data: {
            id_subcategoria :id_subcategoria
        },
    }).done(function(r){
        let datos = JSON.parse(r);
        console.log(datos);
        let body = '';
        if(datos.length > 0){
            datos.map(function(el,index){
                body +=
                    `
                    <option value="${el.id_marca}">${el.marca_nombre}</option>
                `
            })
        }
        $('#producto_marca').html(body);
    });
}
