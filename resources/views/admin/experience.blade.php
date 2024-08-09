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
                                <h1>Experiencias Registradas</h1>
                            </div>
                            <div class="col-2" style="display: flex; justify-content: end">
                                <div class="btn-group justify-content-center">
                                    <a onclick="formModalCreateExperience()" class="btn btn-small btn-with-icon ripple">
                                        <span>
                                            Crear Experiencia
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
                                        <th class="">Experiencia</th>
                                        <th class="text-center">Descripcion</th>
                                        <th class="text-center col-1">Eliminar</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    @foreach ($experiences as $experience )
                                        <tr id="experience-{{ $experience->id }}">
                                            <td class="text-center">{{ $experience->id }}</td>
                                            <td>{{ $experience->experience }}</td>
                                            <td class="text-center">{{ $experience->description }}</td>
                                            <td>
                                                <div class="btn-group align-items-center justify-content-center">
                                                    <a onclick="deleteExperience({{ $experience->id }})" class="btn btn-small btn-with-icon ripple">
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
