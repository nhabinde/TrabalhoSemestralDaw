@extends('layouts.admin.admin')

@section('page-name')
    Adicionar Estudante
@endsection

@section('breadcrumb')
    {{--    <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> Estudantes</a></li>--}}
    <li class="breadcrumb-item"><a href="/"> Estudantes</a></li>
    <li class="breadcrumb-item active">Adicionar</li>
@endsection

@section('conteudo')
    <div class="row clearfix">
        <form action="{{route('admin.estudantes.store')}}" method="post">
            @csrf
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="header">
                    <h2>Informação de <strong>Estudante</strong> <small>Cadastrar estudante</small></h2>
                </div>
                <div class="body">
                    <div class="row clearfix">


                        <!-- Adding / Editing -->

                        <!-- GET THE DISPLAY OPTIONS -->

                        <div class="form-group  col-md-8 ">

                            <label class="control-label" for="name">Nome</label>
                            <input required="" type="text" class="form-control" name="nome" placeholder="Nome" value="{{ old('nome') }}">


                        </div>
                        <!-- GET THE DISPLAY OPTIONS -->

                        <div class="form-group  col-md-4 ">

                            <label class="control-label" for="name">Apelido</label>
                            <input required="" type="text" class="form-control" name="apelido" placeholder="Apelido"
                                   value="{{ old('apelido') }}">


                        </div>
                        <!-- GET THE DISPLAY OPTIONS -->

                        <div class="form-group  col-md-6 ">

                            <label class="control-label" for="name">Sexo</label>
                            <select class="form-control" name="sexo">
                                @if(old('sexo'))
                                    <option value="{{old('sexo')}}" style="text-transform: capitalize">{{old('sexo')}}</option>
                                @endif
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                            </select>


                        </div>
                        <!-- GET THE DISPLAY OPTIONS -->

                        <div class="form-group  col-md-6 ">

                            <label class="control-label" for="name">Nacionalidade</label>
                            <input required="" type="text" class="form-control" name="nacionalidade"
                                   placeholder="Nacionalidade" value="{{ old('nacionalidade') }}">


                        </div>
                        <!-- GET THE DISPLAY OPTIONS -->

                        <div class="form-group  col-md-6 ">

                            <label class="control-label" for="name">Naturalidade</label>
                            <input required="" type="text" class="form-control" name="naturalidade"
                                   placeholder="Naturalidade" value="{{ old('naturalidade') }}">


                        </div>
                        <!-- GET THE DISPLAY OPTIONS -->

                        <div class="form-group  col-md-6 ">

                            <label class="control-label" for="name">Data De Nascimento</label>
                            <input type="date" class="form-control" name="data_de_nascimento"
                                   placeholder="Data De Nascimento" value="{{ old('data_de_nascimento') }}">


                        </div>
                        <!-- GET THE DISPLAY OPTIONS -->

                        <div class="form-group  col-md-6 ">

                            <label class="control-label" for="name">Morada</label>
                            <input required="" type="text" class="form-control" name="morada" placeholder="Morada"
                                   value="{{ old('morada') }}">


                        </div>
                        <!-- GET THE DISPLAY OPTIONS -->

                        <div class="form-group  col-md-6 ">

                            <label class="control-label" for="name">Email Pessoal</label>
                            <input type="text" class="form-control" name="email_pessoal" placeholder="Email Pessoal"
                                   value="{{ old('email_pessoal') }}">


                        </div>
                        <!-- GET THE DISPLAY OPTIONS -->

                        <div class="form-group  col-md-6 " id="number">

                            <label class="control-label" for="name">Celular</label>
                            <input type="number" class="form-control" name="celular" required="" step="any"
                                   placeholder="Celular" value="{{ old('celular') }}">


                        </div>
                        <!-- GET THE DISPLAY OPTIONS -->

                        <div class="form-group  col-md-6 " id="number1">

                            <label class="control-label" for="name">Celular2</label>
                            <input type="number" class="form-control" name="celular2" required="" step="any"
                                   placeholder="Celular2" value="{{ old('celular2') }}">


                        </div>
                        <!-- GET THE DISPLAY OPTIONS -->

{{--                        <div class="form-group  col-md-12 ">--}}
{{--                            <label class="control-label" for="name">cursos</label>--}}
{{--                            <select class="form-control" name="curso_id">--}}
{{--                                @forelse($cursos as $curso)--}}
{{--                                    <option value="{{$curso->id}}" data-select2-id="6">{{$curso->nome}}</option>--}}
{{--                                @empty--}}
{{--                                    <option value="" data-select2-id="6">Nenhum curso disponivel</option>--}}
{{--                                @endforelse--}}
{{--                            </select>--}}
{{--                        </div>--}}

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
