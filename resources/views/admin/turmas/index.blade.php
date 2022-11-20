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
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Lista</strong></h2>
                    {{--                    <ul class="header-dropdown">--}}
                    {{--                        <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle"--}}
                    {{--                                                data-toggle="dropdown" role="button" aria-haspopup="true"--}}
                    {{--                                                aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>--}}
                    {{--                            <ul class="dropdown-menu dropdown-menu-right slideUp float-right">--}}
                    {{--                                <li><a href="javascript:void(0);">Action</a></li>--}}
                    {{--                                <li><a href="javascript:void(0);">Another action</a></li>--}}
                    {{--                                <li><a href="javascript:void(0);">Something else</a></li>--}}
                    {{--                            </ul>--}}
                    {{--                        </li>--}}
                    {{--                        <li class="remove">--}}
                    {{--                            <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>--}}
                    {{--                        </li>--}}
                    {{--                    </ul>--}}
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Descriçãp</th>
                                <th>Ano</th>
                                <th>Disciplina</th>
                                <th>Modulo</th>
                                <th>Nivel</th>
                                <th>Acção</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($turmas as $turma)
                                <tr>
                                    <td>{{$turma->descricao}}</td>
                                    <td>{{$turma->ano}}</td>
                                    <td>{{$turma->disciplina->nome}}</td>
                                    <td>{{$turma->disciplina->modulo->designacao}}</td>
                                    <td>{{$turma->disciplina->modulo->nivel->designacao}}</td>
                                    {{--                                    <td>4</td>--}}
                                    <td>
                                        @if(auth()->user()->role_id==1)
                                            <button class="btn btn-danger">Eliminar</button>
                                        @endif
                                        <a href="/admin/turmas/{{$turma->id}}" class="btn btn-primary">Detalhes</a>
                                        {{--                                        <a href="/" class="btn btn-success">Ver inscritos</a>--}}
                                        <button onclick="turma_id ={{$turma->id}},listaAlunos() " type="button"
                                                class="btn btn-primary" data-toggle="modal"
                                                data-target="#staticBackdrop">Inscritos
                                        </button>
                                        <button onclick="turma_id ={{$turma->id}},listaDocentes() " type="button"
                                                class="btn btn-primary" data-toggle="modal"
                                                data-target="#docentes_inscritos">Docentes
                                        </button>
                                        {{--                                        <a href="/" class="btn btn-success">Ver inscritos</a>--}}
                                        <button onclick="turma_id ={{$turma->id}},listaAvaliacoes()" type="button"
                                                class="btn btn-primary" data-toggle="modal"
                                                data-target="#avalicaoLista">
                                            Avaliacoes
                                        </button>
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
            border-collapse: unset !important;
        }
    </style>

@endsection





@section('modals')
    <!-- Button trigger modal -->


    <!-- Modal  lista de avaliacoes-->
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
                            <th>Acção</th>
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
                            <td>
                                <button class="btn btn-primary">Avaliar Alunos</button>
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




    <!-- Modal lista de alunos inscritos-->
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



    <!-- Modal  lista de docentes inscritos-->
    <div class="modal fade " id="docentes_inscritos" data-backdrop="static" data-keyboard="false" tabindex="-1"
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
                        <tbody id="docentesBody">
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
                    @if(auth()->user()->role_id==1)
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#docenteModal"
                                data-whatever="@mdo">Novo inscrito
                        </button>
                    @endif
                </div>
            </div>
        </div>
    </div>




    {{-- Modal novo inscrito(aluno)--}}
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


    {{--    Modal novo inscrito(docente)--}}
    <div class="modal fade" id="docenteModal" tabindex="-1" aria-labelledby="docenteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="docenteModalLabel">Adicionar docente</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{--                    <form>--}}
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nome:</label>
                        <input type="text" class="form-control" id="inpDocentePesquisa" onkeyup="pesquisarDocente()">
                    </div>
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Acção</th>
                        </tr>
                        </thead>
                        <tbody id="pesquisaDocenteBody">
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


        function pesquisarDocente() {
            if ($('#inpPesquisaDocente').val().trim().length > 2)
                $.ajax({
                    type: "GET",
                    url: `/ajax/docentes/pesquisa/${turma_id}`,
                    // data: {
                    //     "turma_id":turma_id
                    // },
                    success: function (res) {
                        estudantes = res;
                        console.log("Reposta ", res)
                        var tbodyPesquisa = ''
                        $.each(res, function (key, obj) {
                            var nome = obj.nome;
                            if (obj.turma.length === 0 && nome.toLowerCase().includes($('#inpDocentePesquisa').val().toLowerCase()))
                                tbodyPesquisa += ` <tr>
                          <td> ${obj.nome}  ${obj.apelido}</td>
                          <td> <button onclick="inscreverDocente(${obj.id})" class="btn btn-primary">Inscrever</button></td>
                      </tr>`
                        });
                        $('#pesquisaDocenteBody').html(tbodyPesquisa)
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

        function inscreverDocente(docente_id) {
            $.ajax({
                type: "Post",
                url: `/ajax/docentes`,
                data: {
                    "_token": "{{ csrf_token() }}",
                    "docente_id": docente_id,
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

                    listaDocentes()
                    $('#docenteModal').modal('hide')
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


        function listaDocentes() {
            $.ajax({
                type: "GET",
                url: `/ajax/docentes/${turma_id}`,
                data: {},
                success: function (res) {
                    console.log("Reposta ", res)
                    var tbodyDocentes = ''
                    $.each(res, function (key, obj) {
                        tbodyDocentes += ` <tr>
                          <td> ${obj.nome}  ${obj.apelido}</td>
                          <td> ${obj.user.email}</td>
                      </tr>`
                    });
                    $('#docentesBody').html(tbodyDocentes)
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
