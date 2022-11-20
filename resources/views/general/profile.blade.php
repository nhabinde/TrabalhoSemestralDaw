{{--@extends('layouts.master')--}}
@extends('layouts.admin.admin')

@section('conteudo')

<div class="card p-4">


<div class="page-content container-fluid">
    <form class="form-edit-add" role="form" action="http://127.0.0.1:8000/config/users/1" method="POST" enctype="multipart/form-data" autocomplete="off">
        <!-- PUT Method if we are editing -->
                        <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="r9h0IP7gD2mfOBliLXpG2rJiS6iUP9y1xjMh4Uun">

        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-bordered">


                    <div class="panel-body">
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ Auth::user()->name }}">
                        </div>

                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" value="{{ Auth::user()->email }}">
                        </div>

                        <div class="form-group">
                            <label for="password">Senha</label>
                                                                <br>
                                <small>Deixe vazio caso não queira modificar</small>
                                                            <input type="password" class="form-control" id="password" name="password" value="" autocomplete="new-password" aria-autocomplete="list">
                        </div>

                        {{-- <div class="form-group">
                            <label for="locale">Locale</label>
                            <select class="form-control select2 select2-hidden-accessible" id="locale" name="locale" data-select2-id="locale" tabindex="-1" aria-hidden="true">
                                                                    <option value="al">al</option>
                                                                    <option value="am">am</option>
                                                                    <option value="ar">ar</option>
                                                                    <option value="bg">bg</option>
                                                                    <option value="cs">cs</option>
                                                                    <option value="de">de</option>
                                                                    <option value="el">el</option>
                                                                    <option value="en" selected="" data-select2-id="2">en</option>
                                                                    <option value="es">es</option>
                                                                    <option value="fa">fa</option>
                                                                    <option value="fi">fi</option>
                                                                    <option value="fr">fr</option>
                                                                    <option value="gl">gl</option>
                                                                    <option value="id">id</option>
                                                                    <option value="it">it</option>
                                                                    <option value="ja">ja</option>
                                                                    <option value="ku">ku</option>
                                                                    <option value="nl">nl</option>
                                                                    <option value="pl">pl</option>
                                                                    <option value="pt">pt</option>
                                                                    <option value="pt_br">pt_br</option>
                                                                    <option value="ro">ro</option>
                                                                    <option value="ru">ru</option>
                                                                    <option value="sv">sv</option>
                                                                    <option value="tr">tr</option>
                                                                    <option value="uk">uk</option>
                                                                    <option value="vi">vi</option>
                                                                    <option value="zh_CN">zh_CN</option>
                                                                    <option value="zh_TW">zh_TW</option>
                                                                </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-locale-container"><span class="select2-selection__rendered" id="select2-locale-container" role="textbox" aria-readonly="true" title="en">en</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div> --}}
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel panel-bordered panel-warning">
                    <div class="panel-body">
                        <div class="form-group">
                            <?php
                                if (\Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'http://') || \Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'https://')) {
                                    $user_avatar = Auth::user()->avatar;
                                } else {
                                    $user_avatar = Voyager::image(Auth::user()->avatar);
                                }
                            ?>
                            <img src="{{ $user_avatar }}" style="width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;">
                         <input type="file" data-name="avatar" name="avatar">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary pull-right save">
            Salvar
        </button>
    </form>

    <iframe id="form_target" name="form_target" style="display:none"></iframe>
    <form id="my_form" action="http://127.0.0.1:8000/config/upload" target="form_target" method="post" enctype="multipart/form-data" style="width:0px;height:0;overflow:hidden">
        <input type="hidden" name="_token" value="r9h0IP7gD2mfOBliLXpG2rJiS6iUP9y1xjMh4Uun">
        <input name="image" id="upload_file" type="file" onchange="$('#my_form').submit();this.value='';">
        <input type="hidden" name="type_slug" id="type_slug" value="users">
    </form>
</div>

</div>

@endsection
