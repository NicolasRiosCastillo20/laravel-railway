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


const formModalCreateExperience = () => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: window.location.href + '/fromCreateExperience',
        type: 'POST',
        success: function(response) {
            modal.setContent('<div class="custom-modal-scroll">' + response.view + '</div>');
            modal.open();
        },
        error: function (error) {
             notyf.error('Algo salió mal. Intente nuevamente');
        }
    });
}

const createExperience = () => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    let formulario = document.getElementById('formCreateExperience');
    let formData = new FormData(formulario);

    $.ajax({
        url: window.location.href + '/createExperience',
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


const deleteExperience = (id_experience) => {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: window.location.href + '/' + id_experience,
        type: 'DELETE',
        success: function (response) {
            $('#experience-' + id_experience).remove();
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
