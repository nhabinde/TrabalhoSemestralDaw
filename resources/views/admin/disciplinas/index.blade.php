@extends('layouts.admin.admin')

@section('page-name')
    Lista de Disciplina
@endsection

@section('breadcrumb')
    {{--    <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> Cursos</a></li>--}}
    <li class="breadcrumb-item"><a href="/"> Disciplina</a></li>
    <li class="breadcrumb-item active">Lista</li>
@endsection

@section('conteudo')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Lista</strong></h2>
                    {{--                    <ul class="header-dropdown">--}}
                    {{--                        <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle"--}}
                    {{--                                                data-toggle="dropdown" role="button" aria-haspopup="true"--}}
                    {{--                                                aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>--}}
                    {{--                            <ul class="dropdown-menu dropdown-menu-right slideUp float-right">--}}
                    {{--                                <li><a href="javascript:void(0);">Action</a></li>--}}
                    {{--                                <li><a href="javascript:void(0);">Another action</a></li>--}}
                    {{--                                <li><a href="javascript:void(0);">Something else</a></li>--}}
                    {{--                            </ul>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="remove">--}}
                    {{--                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>--}}
                    {{--                        </li>--}}
                    {{--                    </ul>--}}
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Nivel</th>
                                <th>Modulo</th>
                                <th>Ac????o</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($disciplinas as $disciplina)
                                <tr>
                                    <td>{{$disciplina->nome}}</td>
                                    <td>{{$disciplina->modulo->nivel->designacao}}</td>
                                    <td>{{$disciplina->modulo->designacao}}</td>
{{--                                    <td>4</td>--}}
                                    <td>
                                        <button class="btn btn-danger">Eliminar</button>
                                        <a href="/" class="btn btn-primary">Detalhes</a>
{{--                                        <a href="/" class="btn btn-success">Ver inscritos</a>--}}
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


    <style>
        table.dataTable {
            border-collapse:unset !important;
        }
    </style>

@endsection
