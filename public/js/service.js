// notificaiones
var notyf = new Notyf({
    duration: 5000,
    position: { x: 'right', y: 'top' }
});


// configuaracion para el input con opciones de texto
let quill = null;

var modal = new tingle.modal({
    footer: true,
    closeMethods: ['overlay', 'button', 'escape']
});


// abrir el formulario de Crear el servicio
const formModalCreateService = () => {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url:  window.appRoutes.serviceFormCreate,
        type: 'POST',
        success: function (response) {

            // Inserta el HTML del formulario
            modal.setContent(
                '<div class="custom-modal-scroll">' + response.view + '</div>'
            );
            modal.open();

            // Espera a que el DOM exista y crea Quill UNA VEZ
            setTimeout(() => {

                const editor = document.querySelector('#editor');

                if (editor) {
                    quill = new Quill(editor, {
                        theme: 'snow'
                    });
                }

            }, 0);
        },
        error: function () {
            notyf.error('Algo salió mal. Intente nuevamente');
        }
    });
};


// crear servicio
const createService = () => {

    if (!quill) {
        notyf.error('El editor no está inicializado');
        return;
    }

    // Sincroniza Quill → input hidden
    document.getElementById('longDescription').value =
        quill.root.innerHTML;

    let formulario = document.getElementById('formCreateService');
    let formData = new FormData(formulario);

    $.ajax({
        url:  window.appRoutes.createService,
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        success: function () {
            notyf.success('Se registró correctamente');
            setTimeout(() => location.reload(), 1500);
        },
        error: function () {
            notyf.error('Algo salió mal. Intente nuevamente');
        }
    });
};


// ver descripcion corta
const getShortDescription = (id_service) => {
    console.log(window.appRoutes);
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: window.appRoutes.getShortDescriptionService,
        type: 'GET',
        data: {idService: id_service},
        success: function (response) {
            modal.setContent(response.view);
            modal.open();
            quill = null;
        },
        error: function () {
            notyf.error('Servicio no encontrado');
        }
    });
};



// ver descripcion larga
const getLongDescription = (id_service) => {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: window.appRoutes.getLongDescriptionService,
        type: 'GET',
        data: {idService: id_service},
        success: function (response) {
            modal.setContent(response.data.longDescription);
            modal.open();
            quill = null; // 🔑 IMPORTANTE
        },
        error: function () {
            notyf.error('Servicio no encontrado');
        }
    });
};


// eliminar servicio
const deleteService = (id_service) => {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: window.appRoutes.deleteService,
        type: 'DELETE',
        data: {idService: id_service},
        success: function (response) {
            $('#service-' + id_service).remove();
            notyf.success(response.message);
        },
        error: function () {
            notyf.error('Error al eliminar');
        }
    });
};
