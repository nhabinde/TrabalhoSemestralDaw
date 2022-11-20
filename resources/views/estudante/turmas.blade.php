@extends('layouts.admin.admin')

@section('page-name')
    Lista de Turmas
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item"><a href="/"> Turma</a></li>
    <li class="breadcrumb-item active">Lista</li>
@endsection

@section('conteudo')
    <div class="row clearfix">
        @forelse($turmas as $turma)
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="card xl-blue member-card doctor">
                <div class="body">
{{--                    <div class="member-thumb">--}}
{{--                        <img src="assets/images/doctors/member1.png" class="rounded-circle img-fluid img-thumbnail" alt="profile-image">--}}
{{--                    </div>--}}
                    <div class="detail">
                        <h4 class="m-b-0">{{$turma->disciplina->nome}} {{$turma->ano}}</h4>
                        <p class="text-muted">{{$turma->descricao}}</p>
                        <hr>
                        <p class="text-muted">{{$turma->disciplina->modulo->designacao}}<strong>(modulo)</strong></p>
                        <hr>
                        <p class="text-muted">{{$turma->disciplina->modulo->nivel->designacao}} <strong>(nivel)</strong></p>
                        <hr>
                        <a href="/admin/turmas/{{$turma->id}}" class="btn btn-default btn-round btn-simple">Detalhes</a>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <div class="alert alert-danger">
                Ainda não está inscrito em turma alguma
            </div>
        @endforelse


{{--        <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--            <div class="card xl-khaki member-card doctor">--}}
{{--                <div class="body">--}}
{{--                    <div class="member-thumb">--}}
{{--                        <img src="assets/images/doctors/member2.png" class="rounded-circle img-fluid img-thumbnail" alt="profile-image">--}}
{{--                    </div>--}}
{{--                    <div class="detail">--}}
{{--                        <h4 class="m-b-0">Dr. Amelia</h4>--}}
{{--                        <p class="text-muted">Gynecologist</p>--}}
{{--                        <ul class="social-links list-inline m-t-20">--}}
{{--                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>--}}
{{--                            <li><a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>--}}
{{--                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>--}}
{{--                        <a href="profile.html" class="btn btn-default btn-round btn-simple">View Profile</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--            <div class="card xl-blue member-card doctor">--}}
{{--                <div class="body">--}}
{{--                    <div class="member-thumb">--}}
{{--                        <img src="assets/images/doctors/member3.png" class="rounded-circle img-fluid img-thumbnail" alt="profile-image">--}}
{{--                    </div>--}}
{{--                    <div class="detail">--}}
{{--                        <h4 class="m-b-0">Dr. Jack </h4>--}}
{{--                        <p class="text-muted">Dentist</p>--}}
{{--                        <ul class="social-links list-inline m-t-20">--}}
{{--                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>--}}
{{--                            <li><a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>--}}
{{--                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>--}}
{{--                        <a href="profile.html" class="btn btn-default btn-round btn-simple">View Profile</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--            <div class="card xl-parpl member-card doctor">--}}
{{--                <div class="body">--}}
{{--                    <div class="member-thumb">--}}
{{--                        <img src="assets/images/doctors/member4.png" class="rounded-circle img-fluid img-thumbnail" alt="profile-image">--}}
{{--                    </div>--}}
{{--                    <div class="detail">--}}
{{--                        <h4 class="m-b-0">Dr. Jessica </h4>--}}
{{--                        <p class="text-muted">Nursing</p>--}}
{{--                        <ul class="social-links list-inline m-t-20">--}}
{{--                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>--}}
{{--                            <li><a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>--}}
{{--                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>--}}
{{--                        <a href="profile.html" class="btn btn-default btn-round btn-simple">View Profile</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--            <div class="card xl-pink member-card doctor">--}}
{{--                <div class="body">--}}
{{--                    <div class="member-thumb">--}}
{{--                        <img src="assets/images/doctors/member5.png" class="rounded-circle img-fluid img-thumbnail" alt="profile-image">--}}
{{--                    </div>--}}
{{--                    <div class="detail">--}}
{{--                        <h4 class="m-b-0">Dr. Joseph </h4>--}}
{{--                        <p class="text-muted">Audiology</p>--}}
{{--                        <ul class="social-links list-inline m-t-20">--}}
{{--                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>--}}
{{--                            <li><a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>--}}
{{--                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>--}}
{{--                        <a href="profile.html" class="btn btn-default btn-round btn-simple">View Profile</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--            <div class="card xl-seagreen member-card doctor">--}}
{{--                <div class="body">--}}
{{--                    <div class="member-thumb">--}}
{{--                        <img src="assets/images/doctors/member6.png" class="rounded-circle img-fluid img-thumbnail" alt="profile-image">--}}
{{--                    </div>--}}
{{--                    <div class="detail">--}}
{{--                        <h4 class="m-b-0">Dr. Charlie </h4>--}}
{{--                        <p class="text-muted">Physical Therapy</p>--}}
{{--                        <ul class="social-links list-inline m-t-20">--}}
{{--                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>--}}
{{--                            <li><a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>--}}
{{--                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>--}}
{{--                        <a href="profile.html" class="btn btn-default btn-round btn-simple">View Profile</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--            <div class="card xl-blue member-card doctor">--}}
{{--                <div class="body">--}}
{{--                    <div class="member-thumb">--}}
{{--                        <img src="assets/images/doctors/member7.png" class="rounded-circle img-fluid img-thumbnail" alt="profile-image">--}}
{{--                    </div>--}}
{{--                    <div class="detail">--}}
{{--                        <h4 class="m-b-0">Dr. William </h4>--}}
{{--                        <p class="text-muted">Dentist</p>--}}
{{--                        <ul class="social-links list-inline m-t-20">--}}
{{--                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>--}}
{{--                            <li><a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>--}}
{{--                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>--}}
{{--                        <a href="profile.html" class="btn btn-default btn-round btn-simple">View Profile</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-lg-3 col-md-4 col-sm-6">--}}
{{--            <div class="card xl-seagreen member-card doctor">--}}
{{--                <div class="body">--}}
{{--                    <div class="member-thumb">--}}
{{--                        <img src="assets/images/doctors/member8.png" class="rounded-circle img-fluid img-thumbnail" alt="profile-image">--}}
{{--                    </div>--}}
{{--                    <div class="detail">--}}
{{--                        <h4 class="m-b-0">Dr. Sophie </h4>--}}
{{--                        <p class="text-muted">Physical Therapy</p>--}}
{{--                        <ul class="social-links list-inline m-t-20">--}}
{{--                            <li><a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a></li>--}}
{{--                            <li><a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a></li>--}}
{{--                            <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>--}}
{{--                        <a href="profile.html" class="btn btn-default btn-round btn-simple">View Profile</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
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
    <div class="modal fade" id="novaAvaliacaoeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <input type="text" class="form-control" id="avDescricao" >
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Peso:</label>
                        <input type="number" class="form-control" id="avPeso">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Data:</label>
                        <input type="date" class="form-control" id="avData" >
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
            console.log("Data: ",avData)
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
                    if (res.status == 200){
                        Swal.fire(
                            'Alerta!',
                            res.message,
                            'success'
                        )
                    }else{
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
            if ($('#inpPesquisa').val().trim().length>2)
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
                            if (obj.turma.length===0 && nome.toLowerCase().includes($('#inpPesquisa').val().toLowerCase()))
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
                    if (res.status == 200){
                        Swal.fire(
                            'Alerta!',
                            res.message,
                            'success'
                        )
                    }else{
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
                        if (res.status == 200){
                            Swal.fire(
                                'Alerta!',
                                res.message,
                                'success'
                            )
                        }else{
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
