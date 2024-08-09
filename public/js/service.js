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

// Inicializa Quill cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    window.quill = new Quill('#editor', {
        theme: 'snow'
    });
});

const formModalCreateService = () => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: window.location.href + '/fromCreateService',
        type: 'POST',
        success: function(response) {
            modal.setContent('<div class="custom-modal-scroll">' + response.view + '</div>');
            modal.open();
            const editorElement = document.querySelector('#editor');
            if (editorElement && !window.quill) {
                window.quill = new Quill('#editor', {
                    theme: 'snow'
                });
            }
        },
        error: function (error) {
             notyf.error('Algo salió mal. Intente nuevamente');
        }
    });
}


const createService = () => {
    if (!window.quill) {
        console.error('Quill no está inicializado');
        return;
    }
    const longDescription = window.quill.root.innerHTML;
    document.getElementById('longDescription').value = longDescription;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let formulario = document.getElementById('formCreateService');
    let formData = new FormData(formulario);

    $.ajax({
        url: window.location.href + '/CreateService',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
            console.log(response);
            notyf.success('Se registro correctamente');
            setTimeout(function() {
                location.reload();
            }, 6000);
        },
        error: function(error) {
            notyf.error('Algo salió mal. Intente nuevamente');
        }
    });
}


const getShortDescription = (id_service) => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: window.location.href + '/getShortDescription/' + id_service,
        type: 'GET',
        success: function (response) {
            modal.setContent(response.view);
            modal.open();
        },
        error: function(xhr) {
            if (xhr.status === 404) {
                notyf.error('Servicio no encontrado.');
            } else {
                notyf.error('Error Al Eliminar')
            }
        }
    })
}


const getLongDescription = (id_service) => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: window.location.href + '/getLongDescription/' + id_service,
        type: 'GET',
        success: function (response) {
            modal.setContent(response.data.longDescription);
            modal.open();
        },
        error: function(xhr) {
            if (xhr.status === 404) {
                notyf.error('Servicio no encontrado.');
            } else {
                notyf.error('Error Al Eliminar')
            }
        }
    })
}


const deleteService = (id_service) => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: window.location.href + '/' + id_service,
        type: 'DELETE',
        success: function (response) {
            $('#service-' + id_service).remove();
            notyf.success(response.message);
        },
        error: function(xhr) {
            if (xhr.status === 404) {
                notyf.error('Servicio no encontrado.');
            } else {
                notyf.error('Error Al Eliminar')
            }
        }
    })
}
