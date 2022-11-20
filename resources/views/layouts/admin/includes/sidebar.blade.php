<style>
    .theme-blue .sidebar .menu .list a:hover{
        color: white ;
    };
    .sidebar .menu .list a{
        color: white !important;
    };
</style>

<aside id="leftsidebar" class="sidebar" style="background: linear-gradient(45deg, #49cdd0, #0C418D); ">
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info" >
                    <?php
                    if (\Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'http://') || \Illuminate\Support\Str::startsWith(Auth::user()->avatar, 'https://')) {
                        $user_avatar = Auth::user()->avatar;
                    } else {
                        $user_avatar = Voyager::image(Auth::user()->avatar);
                    }
                    ?>
                    <!-- <div class="image"><a href="/profile"><img style="border-radius: 5px !important;"
                                                               src="{{ $user_avatar }}" alt="User"></a></div> -->
                    <div class="detail" style="color:white">
                        <h4>{{ Auth::user()->name }}</h4>
                        
                    </div>
                </div>
            </li>
            @if(in_array(auth()->user()->role_id, [1,6,7,8]))
                <li class="active open"><a href="/">
                        <i class="zmdi zmdi-home"></i>
                        <span>Dashboard</span></a>
                </li>
                @if(in_array(auth()->user()->role_id, [1,7]))
                    <li style="color:white">
                        <a href="javascript:void(0);" class="menu-toggle" style="color:white">
                            <i class="zmdi zmdi-account-add"></i>
                            <span>Estudantes</span>
                        </a>
                        <ul class="ml-menu">
                            <li><a href="{{route("admin.estudantes.index")}}" style="color:white">Todos</a></li>
                            <li><a href="{{route('admin.estudantes.create')}}" style="color:white">Adicionar</a></li>
                        </ul>
                    </li>
                    @if(in_array(auth()->user()->role_id, [1]))
                        <li><a href="javascript:void(0);" class="menu-toggle" style="color:white"><i
                                    class="zmdi zmdi-account-add"></i><span>Escolas</span>
                            </a>
                            <ul class="ml-menu">
                                <li><a href="{{route('admin.escolas.index')}}" style="color:white">Todos</a></li>
                                <li><a href="{{route('admin.escolas.create')}}" style="color:white">Adicionar</a></li>
                            </ul>
                        </li>

                    @endif
                @endif

                @if(in_array(auth()->user()->role_id, [8,6,7]))
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="zmdi zmdi-account-add"></i>
                            <span>Pedidos</span>
                        </a>
                        <ul class="ml-menu">
                            <li><a href="{{route("admin.temas.index")}}">Todos</a></li>
                            @if(in_array(auth()->user()->role_id, [6,7]))
                                <li><a href="{{route('admin.temas.create')}}">Adicionar</a></li>
                            @endif
                        </ul>
                    </li>
                    @if(in_array(auth()->user()->role_id, [6]))
                        <li>
                            <a href="{{route("admin.temas.index")}}" class="menu-toggle">
                                <i class="zmdi zmdi-account-add"></i>
                                <span>Temas</span>
                            </a>
                        </li>
                    @endif
                @endif
            @else
                @if(in_array(auth()->user()->role_id, [3]))
                    <li >
                        <a href="/escolas" class="menu-toggle" style="color:white">
                            <i class="zmdi zmdi-account-add"></i>
                            <span>Seleccionar escolas</span>
                        </a>
                    </li>
                    <li>
                        <a href="/minhas/escolas" class="menu-toggle" style="color:white">
                            <i class="zmdi zmdi-account-add"></i>
                            <span>Minhas escolas</span>
                        </a>
                    </li>
                @endif

            @endif
        </ul>
    </div>
</aside>
