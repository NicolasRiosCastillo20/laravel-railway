<div style=" max-height: 80vh;  overflow-y: auto;">
    <div class="col-xl-11 col-md-7 content-item">
        <form id="formCreateExperience" class="form-submission contact-form contact-form-padding" novalidate>
            @csrf
            <input type="hidden" name="Subject" value="Contact form">
            <div class="row gutters-default">
                <div class="col-12">
                    <h3>Crear Experiencia</h3>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="form-field">
                        <label for="experience">Experiencia</label>
                        <input type="text" class="form-field-input" name="experience" value="" autocomplete="off" id="experience" placeholder="Ingrese el nombre de la Ecperiencia" required>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="">
                        <label for="icon">Selecciona la imagen</label>
                        <input type="file" class="" name="imagenExperience" id="imagenExperience" required>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="">
                        <label for="icon">Fecha de experienca</label>
                        <input type="date" class="" name="experience_date" id="experience_date" required>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-field">
                        <label for="shortDescription">Ingrese descripcion corta</label>
                        <textarea name="description" required class="form-field-input" id="description" placeholder="Ingrese una descripcion corta" cols="3" rows="2"></textarea>
                    </div>
                </div>
                <div class="form-btn" style="margin-top: 1rem; display: flex; justify-content: end">
                    <button type="button" onclick="createExperience()" class="btn btn-w240 btn-small ripple"><span>Guardar Experiencia</span></button>
                </div>
            </div>
        </form>
    </div>
</div>




