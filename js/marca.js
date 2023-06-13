let array_check = [];
$("#formulario_marca").on('submit', function(e){
    e.preventDefault()
    var valor = true;
    var boton = "btn-agregar-marca";
    var verificarimg = $("#id_marca").val();
    var id_marca = $('#id_marca').val();
    var marca_nombre = $('#marca_nombre').val();
    var marca_imagen = $('#marca_imagen').val();
    var marca_estado = $('#marca_estado').val();
    valor = validar_campo_vacio('marca_nombre',marca_nombre, valor);
    valor = validar_campo_vacio('marca_estado',marca_estado, valor);
    if(verificarimg == null){
        valor = validar_campo_vacio('marca_imagen',marca_imagen, valor);
    }
    let formcito = new FormData(this);
    formcito.append('datos' , JSON.stringify(datos))

    if(valor){
        $.ajax({
            type: "POST",
            url: urlweb + "api/Marca/guardar_marca",
            data: formcito,
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
                        respuesta('¡Marca guardada! Recargando...', 'success');
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                        break;
                    case 2:
                        respuesta('Error al guardar marca', 'error');
                        break;
                    case 3:
                        respuesta('La marca ya se encuentra registrada', 'error');
                        break;
                    case 4:
                        respuesta('Debe ingresar una imagen', 'error');
                        break;
                    default:
                        respuesta('¡Algo catastrofico ha ocurrido!', 'error');
                        break;
                }
            }
        });
    }
})

function limpiarcontenidomarca(){
    $('#id_marca').val('');
    $('#marca_nombre').val('');
    $('#visualizar').attr('src', '');
    $('#marca_estado').val('');
}
function quitarcheck(){
    $('input[type=checkbox]').each(function(){
        $(this).attr('checked',false)
    })
}
function editarmarca(id_marca){
    quitarcheck()
    dibujarcheck()
    $.ajax({
        type: "POST",
        url: urlweb + "api/Marca/mostrardatos",
        data: {
            id_marca :id_marca
        },
        dataType: 'json'
    }).done(function(datos_editar){

        let almacenar = datos_editar.result.code;
        let check = datos_editar.result.check;
        $("#id_marca").val(id_marca);
        $("#marca_nombre").val(almacenar.marca_nombre);
        $('#visualizar').attr('src',urlweb+almacenar.marca_imagen);
        $("#marca_estado").val(almacenar.marca_estado);
        if(check.length > 0){
            check.map(function (el,index){
                $(`#categoria_check_${el.id_categoria}`).attr('checked',true);
                datos.find(d => d.id_categoria === el.id_categoria && (d.valor_check = true))
            })
        }

    });
    function edicion(marca_nombre, marca_imagen, marca_estado){

    }

}
function verimgmarca(marca_imagen){
    $("#mostrarimg").attr('src', urlweb+marca_imagen);
}
function previewImageMarca(input, preview) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#'+preview).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
function dibujarcheck(){

    let body = '';
    if (datos.length > 0){
        datos.map(function(el,index){
         body +=
             `
                <div class="col-lg-3">
                    <input type="checkbox" name="categoria_check_${el.id_categoria}" onclick="guardar_bool(${index},${el.id_categoria})" id="categoria_check_${el.id_categoria}" value="${el.id_categoria}">
                    <label for="categoria_check_${index}">${el.categoria_nombre}</label>
                </div>
             `
            valor_check_categoria(index)
        })
    }
    $('#input_check').html(body);
}
function abrirmodalagg(){
    dibujarcheck()
}
function  valor_check_categoria(index){
    datos[index]['valor_check'] = false;
}

function guardar_bool(index,id){
    let valor = $(`#categoria_check_${id}`).is(':checked')
    datos[`${index}`].valor_check = valor;
}