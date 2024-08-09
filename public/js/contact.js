// instancia de notificacion
var notyf = new Notyf({
    duration: 5000,
    position: {
        x: 'right',
        y: 'top'
    },
});


//instancia de Tingle.js
var modal = new tingle.modal({
    footer: true,
    stickyFooter: false,
    closeMethods: ['overlay', 'button', 'escape'],
    closeLabel: "Close",
    cssClass: ['custom-class-1', 'custom-class-2'],
    onOpen: function() {
        console.log('modal open');
    },
    onClose: function() {
        console.log('modal closed');
    },
    beforeClose: function() {
        return true;
    }
});


const createContact = () => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let formanData = $('#formContact').serialize()
    $.ajax({
        url: window.location.href + '/createContact',
        type: 'POST',
        data: formanData,
        success: function(response) {
            console.log(response);
            notyf.success('Se Envio Correctamente');
            setTimeout(function() {
                location.reload();
            }, 6000);
        },
        error: function (error) {
             notyf.error('Algo Salio Mal Intente Nuevamente')
        }
    });
}


const getMessageContact = (id_contact) => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: window.location.href + '/' + id_contact,
        type: 'GET',
        success: function(response) {
            modal.setContent(response.view);
            modal.open();
        },
        error: function(xhr) {
            if (xhr.status === 404) {
                notyf.error('No Se Encontro Registrado.');
            } else {
                notyf.error('Error Al Eliminar')
            }
        }
    });
}


const deleteContact = (id_contact) => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: window.location.href + '/' + id_contact,
        type: 'DELETE',
        success: function (response) {
            $('#contact-' + id_contact).remove();
            notyf.success(response.message);
        },
        error: function(xhr) {
            if (xhr.status === 404) {
                notyf.error('Contacto no encontrado.');
            } else {
                notyf.error('Error Al Eliminar')
            }
        }
    })
}
