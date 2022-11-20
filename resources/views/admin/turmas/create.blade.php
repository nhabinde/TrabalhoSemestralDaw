@extends('layouts.admin.admin')


@section('page-name')
    Adicionar Curso
@endsection

@section('breadcrumb')
    {{--    <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> Niveis</a></li>--}}
    <li class="breadcrumb-item"><a href="/"> Curso</a></li>
    <li class="breadcrumb-item active">Adicionar</li>
@endsection

@section('conteudo')
    <div class="row clearfix w-100">
        <form action="{{route('admin.turmas.store')}}" method="post">
            @csrf
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2>Informação de <strong>Curso</strong> <small>Cadastrar Curso</small></h2>
                    </div>
                    <div class="body  w-100">
                        <div class="row clearfix w-100">
                            <div class="form-group  col-md-12 ">
                                <label class="control-label" for="name">Ano</label>
                                <input required="" type="number" class="form-control" name="ano" placeholder="Ano"
                                       value="{{ old('ano') }}">
                            </div>
                            <div class="form-group  col-md-12 ">
                                <label class="control-label" for="name">Descrição</label>
                                <input required="" type="text" class="form-control" name="descricao" placeholder="Descricao"
                                       value="{{ old('descricao') }}">
                            </div>
                            <div class="form-group  col-md-12 ">-
                                <label class="control-label" for="name">Disciplina</label>
                                <select class="form-control" name="disciplina_id">
                                    @forelse($disciplinas as $disciplina)
                                        <option value="{{$disciplina->id}}"
                                                data-select2-id="6">{{$disciplina->nome}}</option>
                                    @empty
                                        <option value="" data-select2-id="6">Nenhum disciplina disponivel</option>
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
