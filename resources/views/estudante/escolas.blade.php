@extends('layouts.admin.admin')

@section('page-name')
    Lista de minhas escolas
@endsection

@section('breadcrumb')
    {{--    <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> Cursos</a></li>--}}
    <li class="breadcrumb-item"><a href="/"> Escolas</a></li>
    <li class="breadcrumb-item active">Lista</li>
@endsection

@section('conteudo')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Lista</strong></h2>
                </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Localizacao</th>
                                    <th>Acção</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($aluno->escolas as $escola)
                                    <tr>
                                        <td>{{$escola->nome}}</td>
                                        <td>{{$escola->localizacao}}</td>
                                        <td>
                                            <form action="/delete/escola" method="post">
                                                @csrf
                                                <input type="hidden" name="escola_id" value="{{$escola->id}}">
                                                <button type="submit" class="btn btn-danger">Remover</button>
                                            </form>
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

