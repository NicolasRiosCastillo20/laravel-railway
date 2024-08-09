<div style=" max-height: 80vh;  overflow-y: auto;">
    <div class="col-xl-11 col-md-7 content-item">
        <form id="formCreateService" class="form-submission contact-form contact-form-padding" novalidate>
            @csrf
            <input type="hidden" name="Subject" value="Contact form">
            <div class="row gutters-default">
                <div class="col-12">
                    <h3>Crear Servicio</h3>
                </div>
                <div class="col-xl-4 col-sm-6 col-12">
                    <div class="form-field">
                        <label for="Service">Servicio</label>
                        <input type="text" class="form-field-input" name="service" value="" autocomplete="off" id="Service" placeholder="Ingrese el nombre del servicio" required>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-6 col-12">
                    <div class="form-field">
                        <label for="icon">Icono</label>
                        <input type="text" class="form-field-input" name="icon" value="" placeholder="Ingrese el icono del servicio" autocomplete="off" id="icon">
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="">
                        <label for="icon">Selecciona la imagen</label>
                        <input type="file" class="" name="imagenService" id="imagenService" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-field">
                        <label for="shortDescription">Ingrese descripcion corta</label>
                        <textarea name="shortDescription" required class="form-field-input" id="shortDescription" placeholder="Ingrese una descripcion corta" cols="3" rows="2"></textarea>
                    </div>
                    <input type="hidden" name="longDescription" id="longDescription">
                    <div class="col-12">
                        <div id="editor">
                            <p>Ingrese la descripcion larga</p>
                            <p><br /></p>
                        </div>
                    </div>

                </div>
                <div class="form-btn" style="margin-top: 1rem; display: flex; justify-content: end">
                    <button type="button" onclick="createService()" class="btn btn-w240 btn-small ripple"><span>Guardar Servicio</span></button>
                </div>
            </div>
        </form>
    </div>
</div>




