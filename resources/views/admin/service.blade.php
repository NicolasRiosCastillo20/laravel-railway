@extends('layout.layoutBlog')

@section('title', 'admin')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row content-items">

                <div class="col-12">
                    <div class="">
                        <div class="section-subheading">MOCCA Aventura Y Cafe</div>
                        <div class="col-12" style="display: flex; flex-direction: row">
                            <div class="col-10">
                                <h1>Servicios Registrados</h1>
                            </div>
                            <div class="col-2" style="display: flex; justify-content: end">
                                <div class="btn-group justify-content-center">
                                    <a onclick="formModalCreateService()" class="btn btn-small btn-with-icon ripple">
                                        <span>
                                            Crear Servicio
                                        </span>
                                        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="assets/img/sprite.svg#arrow-right"></use></svg>
                                    <span class="el-ripple-circle" style="left: 277.5px; top: 45.9062px;"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section" style="padding-top: 0">
                    <div class="table-responsive-outer">
                        <div class="table-responsive">
                            <table>
                                <thead>

                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Servicio</th>
                                        <th class="text-center">Icono</th>
                                        <th class="text-center col-2">Descripcion Corta</th>
                                        <th class="text-center col-2" >Descripcion detallada</th>
                                        <th class="text-center col-1">Eliminar</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($services as $service )
                                        <tr id="service-{{ $service->id }}">
                                            <td class="text-center">{{ $service->id }}</td>
                                            <td>{{ $service->service }}</td>
                                            <td class="text-center">{{ $service->icon }}</td>
                                            <td>
                                                <div class="btn-group align-items-center justify-content-center">
                                                    <a onclick="getShortDescription({{ $service->id }})" class="btn btn-small btn-with-icon ripple">
                                                        <span>
                                                            ver
                                                        </span>
                                                        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="assets/img/sprite.svg#arrow-right"></use></svg>
                                                    <span class="el-ripple-circle" style="left: 277.5px; top: 45.9062px;"></span></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group align-items-center justify-content-center">
                                                    <a onclick="getLongDescription({{ $service->id }})" class="btn btn-small btn-with-icon ripple">
                                                        <span>
                                                            ver
                                                        </span>
                                                        <svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9"><use xlink:href="assets/img/sprite.svg#arrow-right"></use></svg>
                                                    <span class="el-ripple-circle" style="left: 277.5px; top: 45.9062px;"></span></a>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="btn-group align-items-center justify-content-center">
                                                    <a onclick="deleteService({{ $service->id }})" class="btn btn-small btn-with-icon ripple">
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
