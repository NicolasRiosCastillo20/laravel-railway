@extends('layout.layoutBlog')

@section('title', 'Contacto')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row content-items">

                <div class="col-12">
                    <div class="section-heading">
                        <div class="section-subheading">MOCCA Aventura Y Cafe</div>
                        <h1>Contactanos</h1>
                    </div>
                </div>

                <div class="col-xl-4 col-md-5 content-item">
                    <div class="contact-info section-bgc">
                        <h3>Ponerse en contacto</h3>
                        <ul class="contact-list">
                            <li>
                                <i class="material-icons material-icons-outlined md-22">location_on</i>
                                <div class="footer-contact-info">
                                    <p>
                                        CRA 22a #7-14 Armenia Quindio
                                    </p>
                                </div>
                            </li>
                            <li>
                                <i class="material-icons material-icons-outlined md-22">smartphone</i>
                                <div class="footer-contact-info">
                                    <p class="formingHrefTel">+57 3117043170 - +57 3123695751</p>

                                </div>
                            </li>
                            <li>
                                <i class="material-icons material-icons-outlined md-22">email</i>
                                <div class="footer-contact-info">
                                    <a href="moccaaventuracyf27@gmail.com">moccaaventuracyf27@gmail.com</a>
                                </div>
                            </li>
                            <li>
                                <i class="material-icons material-icons-outlined md-22">schedule</i>
                                <div class="footer-contact-info"><p>Lunes - Domingo: 7:00 Am - 10:00 Pm</p></div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-8 col-md-7 content-item">
                    <form id="formContact" class="form-submission contact-form contact-form-padding" novalidate>
                        @csrf
                        <input type="hidden" name="Subject" value="Contact form">
                        <div class="row gutters-default">
                            <div class="col-12">
                                <h3>Formulario de contacto</h3>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="contact-name" class="form-field-label">Nombre Completo</label>
                                    <input type="text" class="form-field-input" name="name" value="" autocomplete="off" id="contact-name" required data-pristine-required-message="This field is required.">
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6 col-12">
                                <div class="form-field">
                                    <label for="contact-phone" class="form-field-label">Numero Telefonico</label>
                                    <input type="tel" class="form-field-input mask-phone" name="phone" value="" autocomplete="off" id="contact-phone" required data-pristine-required-message="This field is required.">
                                </div>
                            </div>
                            <div class="col-xl-4 col-12">
                                <div class="form-field">
                                    <label for="contact-email" class="form-field-label">Correo Electronico</label>
                                    <input type="email" class="form-field-input" name="email" value="" autocomplete="off" id="contact-email" required data-pristine-required-message="This field is required." data-pristine-email-message="Please enter a valid email address.">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-field">
                                    <label for="contact-message" class="form-field-label">Ingrese su mensaje</label>
                                    <textarea name="message" required class="form-field-input" id="contact-message" cols="30" rows="6"></textarea>
                                </div>
                                <div class="form-btn">
                                    <button type="button" onclick="createContact()" class="btn btn-w240 ripple"><span>Enviar</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
