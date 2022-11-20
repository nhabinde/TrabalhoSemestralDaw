@extends('layouts.admin.admin')

@section('page-name')
    Lista de Turma
@endsection

@section('breadcrumb')
    {{--    <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> Cursos</a></li>--}}
    <li class="breadcrumb-item"><a href="/"> Turma</a></li>
    <li class="breadcrumb-item active">Lista</li>
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

                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <ul class="nav nav-tabs">
                    {{--                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#mypost">Inscritos</a></li>--}}
                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#inscritos">Inscritos</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timeline">Avaliacoes</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Anuncios</a></li>
                </ul>
            </div>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane blog-page active" id="inscritos">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Inscritos</strong>Lista </h2>
                        </div>
                        <div class="body">
                            <table class="table">
                                <thead style="font-weight: bold">
                                <td>nome</td>
                                <td>email</td>
                                </thead>
                                <tbody>
                                @forelse($turma->estudantes as $estudante)
                                    <tr>
                                        <td>{{$estudante->nome}}</td>
                                        <td>{{$estudante->user->email}}</td>
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
                <div role="tabpanel" class="tab-pane" id="timeline">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Avaliações</strong> da disciplina</h2>
                        </div>
                        <div class="body">
                            <table class="table">
                                <thead style="font-weight: bold">
                                <td>descricao</td>
                                <td>peso</td>
                                <td>Data realizacao</td>
                                @if(auth()->user()->role_id != 3)
                                    <td>Acção</td>
                                @endif
                                </thead>
                                <tbody>
                                @forelse($turma->avaliacoes as $avaliacao)
                                    <tr>
                                        <td>{{$avaliacao->descricao}}</td>
                                        <td>{{$avaliacao->peso}}</td>
                                        <td>{{$avaliacao->data_realizacao}}</td>
                                        @if(auth()->user()->role_id != 3)
                                            <td>
                                                <a href="/admin/turma/avaliar/{{$turma->id}}/{{$avaliacao->id}}"
                                                   class="btn btn-primary">Avaliar Alunos</a>
                                            </td>
                                        @endif
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
                <div role="tabpanel" class="tab-pane" id="usersettings">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Anúncios</strong></h2>
                        </div>
                        <div class="body">
                            @if(auth()->user()->role_id!=3)
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#novoAnuncioModal"
                                        data-whatever="@mdo">Novo Anúncio
                                </button>
                            @endif
                            <table class="table">
                                <thead style="font-weight: bold">
                                <td>descricao</td>
                                @if(auth()->user()->role_id != 3)
                                    <td>Acção</td>
                                @endif
                                </thead>
                                <tbody>
                                @forelse($turma->anuncios as $anuncio)
                                    <tr>
                                        <td>{{$anuncio->descricao}}</td>
                                        @if(auth()->user()->role_id != 3)
                                            <td>
                                                ---
                                                {{--                                                <a href="/admin/turma/avaliar/{{$turma->id}}/{{$anuncio->id}}"--}}
                                                {{--                                                   class="btn btn-primary">Avaliar Alunos</a>--}}
                                            </td>
                                        @endif
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
{{--                        @if(auth()->user()->role_id==3)--}}
{{--                            <div class="header">--}}
{{--                                <h2><strong>Avaliações</strong> Feitas </h2>--}}
{{--                            </div>--}}
{{--                            <div class="body">--}}
{{--                                <table class="table">--}}
{{--                                    <thead style="font-weight: bold">--}}
{{--                                    <td>descricao</td>--}}
{{--                                    <td>nota</td>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    @forelse($turma->avaliacoesLogado as $avaliacao)--}}
{{--                                        <tr>--}}
{{--                                            <td>{{$avaliacao->descricao}}</td>--}}
{{--                                            --}}{{--                                            <td>{{$avaliacao->estudante_logado->pivot->nota}}</td>--}}
{{--                                            <td>{{$avaliacao->estudanteLogado[0]->pivot->nota ?? 0}}</td>--}}
{{--                                        </tr>--}}
{{--                                    @empty--}}
{{--                                        <tr>--}}
{{--                                            <td colspan="2">Sem dados</td>--}}
{{--                                        </tr>--}}
{{--                                    @endforelse--}}
{{--                                    <tr></tr>--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}

{{--                            </div>--}}
{{--                        @endif--}}
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
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade " id="avalicaoLista" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Lista de avaliações</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Descrição</th>
                            <th>Peso</th>
                            <th>Data</th>
                        </tr>
                        </thead>
                        <tbody id="avaliacoesBody">
                        <tr>
                            <td>
                                Teste um
                            </td>
                            <td>
                                40%
                            </td>
                            <td>
                                12/06/2020
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#novaAvaliacaoeModal"
                            data-whatever="@mdo">Nova Avaliação
                    </button>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal -->
    <div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Lista de inscritos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody id="estudantesBody">
                        <tr>
                            <td>
                                erman
                            </td>
                            <td>
                                erman@email.com
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"
                            data-whatever="@mdo">Novo inscrito
                    </button>
                </div>
            </div>
        </div>
    </div>





    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Novo inscrito</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{--                    <form>--}}
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nome:</label>
                        <input type="text" class="form-control" id="inpPesquisa" onkeyup="pesquisar()">
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Acção</th>
                        </tr>
                        </thead>
                        <tbody id="pesquisaBody">
                        {{--                        <tr>--}}
                        {{--                            <td>--}}
                        {{--                                erman--}}
                        {{--                            </td>--}}
                        {{--                            <td>--}}
                        {{--                                erman@email.com--}}
                        {{--                            </td>--}}
                        {{--                        </tr>--}}
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{--                    <button type="button" class="btn btn-primary">Send message</button>--}}
                </div>
            </div>
        </div>
    </div>



    {{--    Modal nova avaliacao--}}
    <div class="modal fade" id="novaAvaliacaoeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nova Avaliacao</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{--                    <form>--}}
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Descricao:</label>
                        <input type="text" class="form-control" id="avDescricao">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Peso:</label>
                        <input type="number" class="form-control" id="avPeso">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Data:</label>
                        <input type="date" class="form-control" id="avData">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    {{--                    <button onclick="salvarAvaliacao()" type="button" class="btn btn-primary">Salvar</button>--}}
                    <button onclick="novaAvaliacao()" type="button" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </div>
    </div>



    {{--    Modal nova anuncio--}}
    <div class="modal fade" id="novoAnuncioModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Novo Anuncio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route("admin.anuncios.store")}}" method="post">
                    @csrf
                    <div class="modal-body">
                        {{--                    <form>--}}
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Descrição:</label>
                            <textarea class="form-control" name="descricao"></textarea>
                        </div>
                        <input type="hidden" name="turma_id" value="{{$turma->id}}">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
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

        function novaAvaliacao(estudante_id) {
            var avData = $('#avData').val()
            console.log("Data: ", avData)
            $.ajax({
                type: "Post",
                url: `/ajax/avaliacoes`,
                data: {
                    "_token": "{{ csrf_token() }}",
                    "data": avData,
                    "descricao": $('#avDescricao').val(),
                    "peso": $('#avPeso').val(),
                    "turma_id": turma_id
                },
                success: function (res) {
                    if (res.status == 200) {
                        Swal.fire(
                            'Alerta!',
                            res.message,
                            'success'
                        )
                    } else {
                        Swal.fire(
                            'Alerta!',
                            res.message,
                            'error'
                        )
                    }

                    listaAlunos()
                    $('#exampleModal').modal('hide')
                }
            });
        }


        function pesquisar() {
            if ($('#inpPesquisa').val().trim().length > 2)
                $.ajax({
                    type: "GET",
                    url: `/ajax/estudantes/pesquisa/${turma_id}`,
                    // data: {
                    //     "turma_id":turma_id
                    // },
                    success: function (res) {
                        estudantes = res;
                        console.log("Reposta ", res)
                        var tbodyPesquisa = ''
                        $.each(res, function (key, obj) {
                            var nome = obj.nome;
                            if (obj.turma.length === 0 && nome.toLowerCase().includes($('#inpPesquisa').val().toLowerCase()))
                                tbodyPesquisa += ` <tr>
                          <td> ${obj.nome}  ${obj.apelido}</td>
                          <td> <button onclick="inscrever(${obj.id})" class="btn btn-primary">Inscrever</button></td>
                      </tr>`
                        });
                        $('#pesquisaBody').html(tbodyPesquisa)
                    }
                });
        }

        function inscrever(estudante_id) {
            $.ajax({
                type: "Post",
                url: `/ajax/estudantes`,
                data: {
                    "_token": "{{ csrf_token() }}",
                    "estudante_id": estudante_id,
                    "turma_id": turma_id,
                },
                success: function (res) {
                    if (res.status == 200) {
                        Swal.fire(
                            'Alerta!',
                            res.message,
                            'success'
                        )
                    } else {
                        Swal.fire(
                            'Alerta!',
                            res.message,
                            'error'
                        )
                    }

                    listaAlunos()
                    $('#exampleModal').modal('hide')
                }
            });
        }


        function salvarAvaliacao() {
            alert("Hello")
            $.ajax(
                {
                    type: "POST",
                    url: `/ajax/avaliacoes`,
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "data": avData,
                        "descricao": avDescricao,
                        "peso": avPeso,
                        "turma_id": turma_id,
                    },
                    success: function (res) {
                        if (res.status == 200) {
                            Swal.fire(
                                'Alerta!',
                                res.message,
                                'success'
                            )
                        } else {
                            Swal.fire(
                                'Alerta!',
                                res.message,
                                'error'
                            )
                        }

                        // listaAlunos()
                        // $('#exampleModal').modal('hide')
                    }
                }
            );
        }


        function listaAlunos() {
            $.ajax({
                type: "GET",
                url: `/ajax/estudantes/${turma_id}`,
                data: {},
                success: function (res) {
                    console.log("Reposta ", res)
                    var tbodyEstudantes = ''
                    $.each(res, function (key, obj) {
                        tbodyEstudantes += ` <tr>
                          <td> ${obj.nome}  ${obj.apelido}</td>
                          <td> ${obj.user.email}</td>
                      </tr>`
                    });
                    $('#estudantesBody').html(tbodyEstudantes)
                }
            });
        }


        // lista a avaliacoes
        function listaAvaliacoes() {
            $.ajax({
                type: "GET",
                url: `/ajax/avaliacoes/${turma_id}`,
                data: {},
                success: function (res) {
                    console.log("Reposta ", res)
                    var tbodyAvaliacoes = ''
                    $.each(res, function (key, obj) {
                        tbodyAvaliacoes += ` <tr>
                          <td> ${obj.descricao}</td>
                          <td> ${obj.peso}</td>
                          <td> ${obj.data_realizacao}</td>
                      </tr>`
                    });
                    $('#avaliacoesBody').html(tbodyAvaliacoes)
                }
            });
        }


    </script>
@endsection
