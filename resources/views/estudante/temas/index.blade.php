@extends('layouts.admin.admin')

@section('page-name')
    Lista de Pedidos
@endsection

@section('breadcrumb')
    {{--    <li class="breadcrumb-item"><a href="/"><i class="zmdi zmdi-home"></i> Cursos</a></li>--}}
    <li class="breadcrumb-item"><a href="/"> Pedidos</a></li>
    <li class="breadcrumb-item active">Lista</li>
@endsection

@section('conteudo')
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <h2><strong>Lista</strong></h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th>Aluno</th>
                                <th>Descrição</th>
                                <th>Documento</th>
                                <th>Observação</th>
                                <th>Observado por</th>
                                <th>Acção</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pedidos as $pedido)
                                <tr>
                                    <td>{{$pedido->estudante->nome}} {{$pedido->estudante->apelido}}</td>
                                    <td>{{$pedido->descricao}}</td>
                                    <td>
                                        @if($pedido->doc_url)
                                            <a href="/storage{{$pedido->doc_url}}">Download</a>
                                        @else
                                            Sem Documento ainda
                                        @endif
                                    </td>
                                    <td>
                                        <div
                                            class="alert alert-{{($pedido->estado and !$pedido->is_pendente)?'success':((!$pedido->estado and !$pedido->is_pendente)?'danger':'warning')}}">{{($pedido->estado and !$pedido->is_pendente)?'Aprovado':((!$pedido->estado and !$pedido->is_pendente)?''.$pedido->observacao:'Pendente')}}
                                        </div>
                                    </td>
                                    <td>{{$pedido->docente?$pedido->docente->nome:"Aguardando..."}} {{$pedido->docente?$pedido->docente->apelido:""}}</td>
                                    <td>

                                        @if(auth()->user()->role_id==6)
                                            @if($pedido->is_pendente)
                                                <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#exampleModal"
                                                        onclick="setTemaId({{$pedido->id}})">
                                                    Reprovar
                                                </button>
                                                <a href="/admin/temas/aprovar/{{$pedido->id}}" class="btn btn-success">Aprovar</a>
                                            @else
                                                <div
                                                    class="alert alert-{{($pedido->estado and !$pedido->is_pendente)?'success':((!$pedido->estado and !$pedido->is_pendente)?'danger':'warning')}}">{{($pedido->estado and !$pedido->is_pendente)?'Aprovado':((!$pedido->estado and !$pedido->is_pendente)?'Reprovado':'Pendente')}}
                                                </div>
                                            @endif
                                            {{--                                                <a href="/admin/pedidos/reprovar/{{$pedido->id}}" class="btn btn-danger">Reprovar</a>--}}
                                        @else
                                            @if($pedido->is_pendente)
                                            <form action="{{route("admin.temas.destroy",$pedido->id)}}" method="post">
                                                @method("delete")
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Cancelar</button>
                                            </form>
                                            @else
                                                <div
                                                    class="alert alert-{{($pedido->estado and !$pedido->is_pendente)?'success':((!$pedido->estado and !$pedido->is_pendente)?'danger':'warning')}}">{{($pedido->estado and !$pedido->is_pendente)?'Aprovado':((!$pedido->estado and !$pedido->is_pendente)?'Reprovado':'Pendente')}}
                                                </div>
                                            @endif
                                        @endif
                                        {{--                                        <a href="/" class="btn btn-success">Ver inscritos</a>--}}
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



@section("modals")
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Observação</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/temas/reprovar" enctype="multipart/form-data" method="post">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="tema_id" id="tema_id">
                        <div class="form-group">
                            <label for="file">Observação</label>
                            <textarea class="form-control" name="observacao" id="" cols="30" rows="10"></textarea>
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




@section("js")
    <script>
        function setTemaId(id) {
            $("#tema_id").val(id)
        }
    </script>
@endsection


