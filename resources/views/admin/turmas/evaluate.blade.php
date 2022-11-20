@extends('layouts.admin.admin')

@section('page-name')
    Avaliacao [ {{$avaliacao->descricao}} ]
@endsection

@section('breadcrumb')
    {{--    <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> Cursos</a></li>--}}
    <li class="breadcrumb-item"><a href="/"> Turma</a></li>
    <li class="breadcrumb-item active">Avaliar alunos</li>
@endsection

@section('conteudo')
    <div class="row clearfix">
        <div class="col-lg-4 col-md-12">
            <div class="card member-card">
                <div class="header l-cyan">
                    <h4 class="m-t-10">{{$turma->descricao}}</h4>
                </div>
                {{--                        <div class="member-img">--}}
                {{--                            <a href="profile.html" class="">--}}
                {{--                                <img src="assets/images/profile_av.jpg" class="rounded-circle" alt="profile-image">--}}
                {{--                            </a>--}}
                {{--                        </div>--}}
                <div class="body">

                    <small class="text-muted">Disciplina: </small>
                    <p>{{$turma->disciplina->nome}}  {{$turma->ano}}</p>
                    <hr>
                    <small class="text-muted">Modulo: </small>
                    <p>{{$turma->disciplina->modulo->designacao}}</p>
                    <hr>
                    <small class="text-muted">Nivel: </small>
                    <p>{{$turma->disciplina->modulo->nivel->designacao}}</p>
                    <hr>
                    <b>
                        <hr>
                    </b>
                    <small class="text-muted">Avaliação: </small>
                    <p>{{$avaliacao->descricao}}</p>
                    <hr>
                    <small class="text-muted">Peso da avaliação: </small>
                    <p>{{$avaliacao->peso}}</p>
                    <hr>

                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <ul class="nav nav-tabs">
                    {{--                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#mypost">Inscritos</a></li>--}}
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#nao_avaliados">Não
                            avaliados </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#avaliados">Avaliados </a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane blog-page active" id="nao_avaliados">
                    <div class="card">
                        <div class="header">
                            <h2>Alunos <strong>não avaliados.</strong></h2>
                        </div>
                        <div class="body">
                            <table class="table">
                                <thead style="font-weight: bold">
                                <td>nome</td>
                                <td>email</td>
                                @if(auth()->user()->role_id != 3)
                                    <td>Acção </td>
                                @endif

                                </thead>
                                <tbody>
                                @forelse($alunos as $estudante)
                                    <tr>
                                        <td>{{$estudante->nome}}</td>
                                        <td>{{$estudante->user->email}}</td>
                                        @if(auth()->user()->role_id != 3)
                                            <td>
                                                <button
                                                    onclick="avaliarAluno({{$estudante->id}},'{{$estudante->nome}}')"
                                                    type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                    Avaliar
                                                </button>
                                            </td>
                                        @endif
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2">Sem dados</td>
                                    </tr>
                                @endforelse
                                <tr></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="avaliados">
                    <div class="card">
                        <div class="header">
                            <h2>Alunos <strong>Avaliados</strong></h2>
                        </div>
                        <div class="body">
                            <table class="table">
                                <thead style="font-weight: bold">
                                <td>Nome</td>
                                <td>Nota</td>
                                {{--                                <td>Acção</td>--}}
                                </thead>
                                <tbody>
                                @forelse($avaliacao->estudantes as $estudante)
                                    <tr>
                                        <td>{{$estudante->nome}}</td>
                                        <td>{{$estudante->pivot->nota}}</td>
                                        {{--                                        <td>--}}
                                        {{--                                            <a  href="/admin/turma/avaliar/{{$turma->id}}/{{$avaliacao->id}}" class="btn btn-primary">Avaliar Alunos</a>--}}
                                        {{--                                        </td>--}}
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4">Sem dados</td>
                                    </tr>
                                @endforelse
                                <tr></tr>
                                </tbody>
                            </table>
                        </div>
                        @if(auth()->user()->role_id==3)
                            <div class="header">
                                <h2><strong>Avaliações</strong> Feitas </h2>
                            </div>
                            <div class="body">
                                <table class="table">
                                    <thead style="font-weight: bold">
                                    <td>descricao</td>
                                    <td>nota</td>
                                    </thead>
                                    <tbody>
                                    @forelse($turma->avaliacoesLogado as $avaliacao)
                                        <tr>
                                            <td>{{$avaliacao->descricao}}</td>
                                            {{--                                            <td>{{$avaliacao->estudante_logado->pivot->nota}}</td>--}}
                                            <td>{{$avaliacao->estudanteLogado[0]->pivot->nota ?? 0}}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="2">Sem dados</td>
                                        </tr>
                                    @endforelse
                                    <tr></tr>
                                    </tbody>
                                </table>

                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
        table.dataTable {
            border-collapse: unset !important;
        }
    </style>

@endsection





@section('modals')
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Avaliar o aluno <b id="aluno"></b></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/avaliar" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <input placeholder="Introduza a nota aqui" min="0" max="20" class="form-control"
                                   type="number" name="nota">
                            <input type="hidden" name="avaliacao_id" value="{{$avaliacao->id}}">
                            <input type="hidden" name="aluno_id" id="aluno_id">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Submeter</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        // pesquisar()
        var estudantes = {}
        var turma_id = 0

        function avaliarAluno(estudante_id, nome) {
            console.log(nome)
            console.log(estudante_id)
            // $('#aluno').html(nome)
            document.getElementById("aluno").innerText = nome
            document.getElementById("aluno_id").value = estudante_id
            // $('#aluno_id').val(estudante_id)
            // do
            // console.log("Data: ", avData)
        }


    </script>
@endsection
