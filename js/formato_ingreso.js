let array_productos =[];
function buscar_productos(){
    let valor = $('#agg_producto').val()
    $.ajax({
        type: "POST",
        url: urlweb + "api/Producto/listar_productos_input",
        data: {
            valor:valor
        },
    }).done(function (r){
        let datos = JSON.parse(r);
        let body = `<ul style="list-style: none; position: absolute; z-index: 999; background: #F5F5F9; box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px; width: 45%; margin: 1%">`
        if (datos.length > 0){
            datos.map(function (el,index){
                body+=
                    `
                     <li onclick="traerdatos_product(${el.id_producto},'${el.producto_nombre}','${el.marca_nombre}','${el.subcategoria_nombre}')">${el.producto_nombre}</li>
                     `
            })
        }else{
            body+=
                `<li>sin resultados</li>`
        }
        body += `</ul>`
        $('#lista_productos').html(body)
    });
}
function traerdatos_product(id_producto,producto_nombre,producto_marca,subcategoria_nombre){
    $('#lista_productos').html('')
    $('#agg_producto').val('')
    let options = {
        id: id_producto,
        nombre: producto_nombre,
        marca: producto_marca,
        cantidad: '1',
        subcategoria: subcategoria_nombre,
    }
    array_productos.push(options);
    pintar_tabla()
}
//Muestra los datos obtenidos en la tabla
function pintar_tabla(){
    let body = ""
    if(array_productos.length > 0){
        array_productos.map(function (el,index){
            body += `
            <tr>
                <td>${el.nombre}</td>
                <td>
                    <div class="menu_input_number_container" style="width: 72px!important;">
                        <span class="input-number-decrement cursor-pointer" onmousedown="array_producto_restar('cantidad_${index}',${index}); event.preventDefault()"><i class="fa fa-minus text-dark"></i></span>
                        <input class="input-number" type="text" id="cantidad_${index}" name="cantidad" onkeyup="editarcantidad(${index}); validar_numeros(this.id)" value="${el.cantidad}" style="width: 40px !important; border: none; outline: none">
                        <span class="input-number-increment cursor-pointer" onmousedown="array_producto_sumar('cantidad_${index}',${index}); event.preventDefault()"><i class="fa fa-plus text-dark"></i></span>
                    </div>
                </td>
                <td>${el.marca}</td>
                <td>${el.subcategoria}</td>
                <td>
                    <a class="bg-danger btn btn-sm text-white" onclick="accion_eliminar(${index})"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            `
        })
    }
    $('#llenado_tabla').html(body)
}
//Resta el valor del input
function array_producto_restar(id,index){
    var spam_auto= $('#'+id);
    var valor = spam_auto.val()
    if(valor > 0){
        valor--
        spam_auto.val(valor)
        array_productos[index].cantidad = valor
    }
}
//Suma el valor del input
function array_producto_sumar(id,index){
    let spam_auto = $('#'+id);
    var valor = spam_auto.val()
    valor++
    spam_auto.val(valor)
    array_productos[index].cantidad = valor
}
function editarcantidad (index) {
    let valor = $(`#cantidad_${index}`).val();
    array_productos[`${index}`].cantidad = valor
}
//Quita registro de la tabla
function accion_eliminar(index) {
    array_productos.splice(index,1)
    pintar_tabla()
}
$("#formularrio_formato_ingreso").on('submit', function(e){
    e.preventDefault()
    var valor = true;
    var boton = "btn-agregar-formato_ingreso";
    var id_formato = $("#id_formato").val();
    var id_cliente = $("#id_cliente").val();
    var fecha_ingreso = $("#fecha_ingreso").val();
    var documento_serie = $("#documento_serie").val();
    valor = validar_campo_vacio('documento_serie',documento_serie, valor);
    valor = validar_campo_vacio('id_cliente',id_cliente, valor);
    let formcito = new FormData(this);
    formcito.append('array_productos' , JSON.stringify(array_productos))
    if (array_productos.length>0){
        valor=true

    }else{
        valor = false
    }

    if(valor){
        $.ajax({
            type: "POST",
            url: urlweb + "api/Producto/guardar_formato_ingreso",
            data:formcito,
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
                        respuesta('¡Formato guardado! Recargando...', 'success');
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                        break;
                    case 2:
                        respuesta('Error al guardar formato de ingreso', 'error');
                        break;
                    case 3:
                        respuesta('Ya existe un formato con esa serie', 'error');
                        break;
                    case 4:
                        respuesta('Ya existe un formato con ese correlativo', 'error');
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