@extends('layouts.admin.admin')

@section('page-name')
    Adicionar Nivel
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/">Escola</a></li>
    <li class="breadcrumb-item active">Adicionar</li>
@endsection

@section('conteudo')
    <div class="row clearfix">
        <form action="{{route('admin.escolas.store')}}" method="post">
            @csrf
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Informação de <strong>Escola</strong> <small>Cadastrar escola</small></h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="form-group  col-md-8 ">
                                <label class="control-label" for="name">Nome</label>
                                <input required="" type="text" class="form-control" name="nome" placeholder="Nome da escola"
                                       value="{{ old('nome') }}">
                            </div>
                            <div class="form-group  col-md-8 ">
                                <label class="control-label" for="name">Localizacao</label>
                                <input required="" type="text" class="form-control" name="localizacao" placeholder="Nome da escola"
                                       value="{{ old('localizacao') }}">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary btn-round">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
