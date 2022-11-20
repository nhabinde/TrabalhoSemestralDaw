@extends('layouts.admin.admin')

@section('page-name')
    Adicionar Pedido
@endsection

@section('breadcrumb')
    {{--    <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> Niveis</a></li>--}}
    <li class="breadcrumb-item"><a href="/"> Pedidos</a></li>
    <li class="breadcrumb-item active">Adicionar</li>
@endsection

@section('conteudo')
    <div class="row clearfix">
        <form action="{{route('admin.temas.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2>Informação de <strong>Pedido</strong> <small>Cadastrar pedido</small></h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="form-group  col-md-12 ">
                                <label class="control-label" for="name">Descrição</label>
                                <textarea required="true" type="text" class="form-control" name="descricao"
                                          placeholder="Nome"
                                >{{ old('descricao') }}</textarea>
                            </div>
                                <div class="form-group  col-md-8 ">
                                    <label class="control-label" for="name">Documento</label>
                                    <input required="false" type="file" class="form-control" name="file[]"
                                           placeholder="Carregue o documento">
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
