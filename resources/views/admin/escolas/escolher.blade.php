@extends('layouts.admin.admin')

@section('page-name')
    Lista de Escolas
@endsection

@section('breadcrumb')
    {{--    <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> Escolas</a></li>--}}
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
                <form action="{{route("aluno.escola_estudante")}}" method="post">
                    @csrf
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
                                @foreach($escolas as $escola)
                                    <tr>
                                        <td>{{$escola->nome}}</td>
                                        <td>{{$escola->localizacao}}</td>
                                        <td>
                                            <input class="form-control" type="checkbox" name="{{$escola->id}}">
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="w-100">
                            <button class="btn btn-primary pull-right">Submeter</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


    <style>
        table.dataTable {
            border-collapse:unset !important;
        }
    </style>

@endsection

