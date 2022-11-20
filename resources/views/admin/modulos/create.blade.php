@extends('layouts.admin.admin')


@section('page-name')
    Adicionar Modulo
@endsection

@section('breadcrumb')
    {{--    <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> Niveis</a></li>--}}
    <li class="breadcrumb-item"><a href="/"> Modulo</a></li>
    <li class="breadcrumb-item active">Adicionar</li>
@endsection

@section('conteudo')
    <div class="row clearfix w-100">
        <form action="{{route('admin.modulos.store')}}" method="post">
            @csrf
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Informação de <strong>Modulo</strong> <small>Cadastrar nivel</small></h2>
                    </div>
                    <div class="body  w-100">
                        <div class="row clearfix w-100">
                            <div class="form-group  col-md-12 ">
                                <label class="control-label" for="name">Designação</label>
                                <input required="" type="text" class="form-control" name="designacao" placeholder="Nome"
                                       value="{{ old('designacao') }}">
                            </div>
                            <div class="form-group  col-md-12 ">-
                                <label class="control-label" for="name">Nivel</label>
                                <select class="form-control" name="nivel_id">
                                    @forelse($niveis as $nivel)
                                        <option value="{{$nivel->id}}" data-select2-id="6">{{$nivel->designacao}}</option>
                                    @empty
                                        <option value="" data-select2-id="6">Nenhum nivel disponivel</option>
                                    @endforelse
                                </select>
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
