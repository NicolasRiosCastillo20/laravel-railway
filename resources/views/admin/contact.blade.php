@extends('layout.layoutBlog')

@section('title', 'admin')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row content-items">

                <div class="col-12">
                    <div class="section-heading">
                        <div class="section-subheading">MOCCA Aventura Y Cafe</div>
                        <h1>Contactaos Registrados</h1>
                    </div>
                </div>

                <div class="section" style="padding-top: 0">
                    <div class="table-responsive-outer">
                        <div class="table-responsive">
                            <table>
                                <thead>

                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Nombre</th>
                                        <th>Correo</th>
                                        <th class="text-center" >telefono</th>
                                        <th class="text-center col-1">Mensaje</th>
                                        <th class="text-center col-1">Eliminar</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact )
                                        <tr id="contact-{{ $contact->id }}">
                                            <td class="text-center">{{ $contact->id }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td class="text-center">
                                                <a href="https://wa.me/{{ $contact->phone }}" target="_blank">
                                                    {{ $contact->phone }}
                                                </a>

                                            </td>
                                            <td>
                                                <div class="btn-group align-items-center justify-content-center">
                                                    <a onclick="getMessageContact({{ $contact->id }})" class="btn btn-small btn-with-icon ripple">
                                                        <span>
                                                            Mensaje
                                                        </span>
                                                        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="assets/img/sprite.svg#arrow-right"></use></svg>
                                                    <span class="el-ripple-circle" style="left: 277.5px; top: 45.9062px;"></span></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group align-items-center justify-content-center">
                                                    <a onclick="deleteContact({{ $contact->id }})" class="btn btn-small btn-with-icon ripple">
                                                        <span>
                                                            Eliminar
                                                        </span>
                                                        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="assets/img/sprite.svg#arrow-right"></use></svg>
                                                    <span class="el-ripple-circle" style="left: 277.5px; top: 45.9062px;"></span></a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
