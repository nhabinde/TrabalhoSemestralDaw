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
                                <th>Descrição</th>
                                <th>Documento</th>
                                <th>Estado</th>
                                <th>Acção</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pedidos as $pedido)
                                <tr>
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
                                            class="alert alert-{{($pedido->estado and !$pedido->is_pendente)?'success':((!$pedido->estado and !$pedido->is_pendente)?'danger':'warning')}}">{{($pedido->estado and !$pedido->is_pendente)?'Aprovado':((!$pedido->estado and !$pedido->is_pendente)?'Reprovado':'Pendente')}}
                                        </div>
                                    </td>
                                    <td>

                                        @if(auth()->user()->role_id==8)
                                            @if($pedido->is_rh)
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                        data-target="#exampleModal"
                                                        onclick="setPedidoId({{$pedido->id}})">
                                                    Carregar documento
                                                </button>
                                            @else
                                                <a href="/admin/pedidos/aprovar/{{$pedido->id}}" class="btn btn-success">Aprovar</a>
                                                <a href="/admin/pedidos/reprovar/{{$pedido->id}}" class="btn btn-danger">Reprovar</a>
                                            @endif
                                        @else
                                            <form action="{{route("admin.temas.destroy",$pedido->id)}}" method="post">
                                                @method("delete")
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Cancelar</button>
                                            </form>
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
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="/admin/pedidos/carregar/documento" enctype="multipart/form-data" method="post">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="pedido_id" id="pedido_id">
                        <div class="form-group">
                            <label for="file">Carregue o documento</label>
                            <input type="file" name="file[]" class="form-control">
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
        function setPedidoId(id) {
            $("#pedido_id").val(id)
        }
    </script>
@endsection
