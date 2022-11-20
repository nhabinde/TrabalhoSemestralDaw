@extends('layouts.admin.admin')


@section('page-name')
    Adicionar Disciplina
@endsection

@section('breadcrumb')
    {{--    <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> Niveis</a></li>--}}
    <li class="breadcrumb-item"><a href="/"> Disciplina</a></li>
    <li class="breadcrumb-item active">Adicionar</li>
@endsection

@section('conteudo')
    <div class="row clearfix w-100">
        <form action="{{route('admin.disciplinas.store')}}" method="post">
            @csrf
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Informação de <strong>Disciplina</strong> <small>Cadastrar Disciplina</small></h2>
                    </div>
                    <div class="body  w-100">
                        <div class="row clearfix w-100">
                            <div class="form-group  col-md-12 ">
                                <label class="control-label" for="name">nome</label>
                                <input required="" type="text" class="form-control" name="nome" placeholder="Nome"
                                       value="{{ old('nome') }}">
                            </div>
                            <div class="form-group  col-md-12 ">-
                                <label class="control-label" for="name">Modulo</label>
                                <select class="form-control" name="modulo_id">
                                    @forelse($modulos as $modulo)
                                        <option value="{{$modulo->id}}" data-select2-id="6">{{$modulo->designacao}}</option>
                                    @empty
                                        <option value="" data-select2-id="6">Nenhum modulo disponivel</option>
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
