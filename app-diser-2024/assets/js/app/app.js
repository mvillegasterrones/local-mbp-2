// ** Aquí código de las funciones a nivel de APP ** //

const pg_body = () => ({
    on_load: () => {
        $('.instrumento').addClass('d-none')
        //!rubros().get_list()
        //!empresa().get_active()
    },
    on_show_hide: (hd, shw) => {
        $('#' + hd).removeClass('d-block').addClass('d-none')
        $('#' + shw).removeClass('d-none').addClass('d-block')
    }
})

const funciones = () => ({
    activar_fila: (i) => {
        // ? valor: 1 = Si
        // ? valor: 2 = No
        let valor  = $('#sel-opc-' + i).val()
        if (valor === '1') {
            $('#sel-opc-2-' + i).removeClass('d-none')
            $('#txt-valor-' + i).removeClass('d-none')
            $('#txt-valor-2-' + i).removeClass('d-none')

            $('#sel-opc-2-' + i).attr('required', 'required')
            $('#txt-valor-' + i).attr('required', 'required')
            $('#txt-valor-2-' + i).attr('required', 'required')

            $('#sel-opc-2-' + i).val('')
            $('#txt-valor-' + i).val('0')
            $('#txt-valor-2-' + i).val('0')
        } else {
            $('#sel-opc-2-' + i).addClass('d-none')
            $('#txt-valor-' + i).addClass('d-none')
            $('#txt-valor-2-' + i).addClass('d-none')

            $('#sel-opc-2-' + i).removeAttr('required')
            $('#txt-valor-' + i).removeAttr('required')
            $('#txt-valor-2-' + i).removeAttr('required')

            $('#txt-valor-2-' + i).attr('readonly', 'readonly')
            $('#sel-opc-2-' + i).val('')
            $('#txt-valor-' + i).val('0')
            $('#txt-valor-2-' + i).val('0')
        }
    },
    activar_casilla_x_fila: (i) => {
        // ? valor: 1 = Si
        // ? valor: 2 = No
        let valor  = $('#sel-opc-2-' + i).val()
        
        if (valor > 0) {
            if (valor > 1) {
                $('#txt-valor-' + i).removeAttr('readonly')
                $('#txt-valor-2-' + i).removeAttr('readonly')
                $('#txt-valor-' + i).val('')
                $('#txt-valor-2-' + i).val('')
                $('#txt-valor-' + i).focus()
            } else {
                $('#txt-valor-' + i).attr('readonly', 'readonly')
                $('#txt-valor-2-' + i).removeAttr('readonly')
                $('#txt-valor-' + i).val('1')
                $('#txt-valor-2-' + i).focus()
            }
        } else {
            $('#txt-valor-' + i).attr('readonly', 'readonly')
            $('#txt-valor-2-' + i).attr('readonly', 'readonly')
            $('#txt-valor-' + i).val('0')
            $('#txt-valor-2-' + i).val('0')
        }
    }
})