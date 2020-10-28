<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}"></script>
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ABEFAER - Área Administrativa</title>

    </head>
    <body>

        <div id="template-admin">
            <div class="d-flex" id="wrapper">
            
                <!-- Sidebar -->
                <div class="bg-secundario" id="sidebar-wrapper">
                    <div class="sidebar-heading nav-bx-shadow">ABEFAER <i class="fas fa-plane"></i></div>
                    <div class="list-group list-group-flush">

                        <a href="{{ url('admin/meusdados') }}" class="list-group-item list-group-item-action bg-light">
                            <i class="fas fa-address-card"></i> Meus Dados
                        </a>

                        <a class="list-group-item list-group-item-action bg-light"
                           data-toggle="collapse" 
                           href="#collapseCadastros" 
                           role="button" 
                           aria-expanded="false" 
                           aria-controls="collapseExample">
                            <i class="fas fa-cog"></i> Cadastros
                        </a>
                        <div class="collapse 
                            {{ Request::is('admin/entidades/index') ? 'show' : '' }}
                            {{ Request::is('admin/entidades/create') ? 'show' : '' }}
                            @isset($lista_entidade->id)
                                {{ Request::is('admin/entidades/edit/'.$lista_entidade->id) ? 'show' : '' }}
                            @endisset
                            {{ Request::is('admin/usuarios') ? 'show' : '' }} 
                            {{ Request::is('admin/usuarios/index') ? 'show' : '' }} 
                            {{ Request::is('admin/usuarios/create') ? 'show' : '' }} 
                            {{ Request::is('admin/pessoas/index') ? 'show' : '' }}
                            {{ Request::is('admin/pessoas/type') ? 'show' : '' }}
                            {{ Request::is('admin/pessoas/create/F') ? 'show' : '' }}
                            {{ Request::is('admin/pessoas/create/J') ? 'show' : '' }}
                            @isset($lista_pessoa->id)
                                {{ Request::is('admin/pessoas/edit/'.$lista_pessoa->id) ? 'show' : '' }}
                            @endisset" 
                            id="collapseCadastros">

                            <div class="list-group list-group-flush">
                                <a href="{{ url('admin/entidades/index') }}" 
                                   class="list-group-item list-group-item-action bg-light
                                   {{ Request::is('admin/entidades/index') ? 'active' : '' }}
                                   {{ Request::is('admin/entidades/create') ? 'active' : '' }}
                                   @isset($lista_entidade->id)
                                   {{ Request::is('admin/entidades/edit/'.$lista_entidade->id) ? 'active' : '' }}
                                    @endisset
                                   ">
                                   - Entidades
                                </a>
                                <a href="{{ url('admin/pessoas/index') }}" 
                                   class="list-group-item list-group-item-action bg-light
                                   {{ Request::is('admin/pessoas/index') ? 'active' : '' }}
                                   {{ Request::is('admin/pessoas/type') ? 'active' : '' }}
                                   {{ Request::is('admin/pessoas/create/F') ? 'active' : '' }}
                                   {{ Request::is('admin/pessoas/create/J') ? 'active' : '' }}
                                   @isset($lista_pessoa->id)
                                   {{ Request::is('admin/pessoas/edit/'.$lista_pessoa->id) ? 'active' : '' }}
                                    @endisset
                                   ">
                                    - Pessoas
                                </a>
                                <a href="{{ url('admin/usuarios/index') }}" 
                                   class="list-group-item list-group-item-action bg-light
                                   {{ Request::is('admin/usuarios') ? 'active' : '' }}
                                   {{ Request::is('admin/usuarios/index') ? 'active' : '' }}
                                   {{ Request::is('admin/usuarios/create') ? 'active' : '' }}">
                                    - Usuários
                                </a>
                            </div>
                        </div>

                        <a class="list-group-item list-group-item-action bg-light"
                        data-toggle="collapse" 
                        href="#collapseConteudos" 
                        role="button" 
                        aria-expanded="false" 
                        aria-controls="collapseExample">
                            <i class="fas fa-columns"></i> Conteúdos
                        </a>
                        <div class="collapse 
                            {{ Request::is('admin/noticias') ? 'show' : '' }}
                            {{ Request::is('admin/agendaeventos') ? 'show' : '' }}
                            {{ Request::is('admin/parceiros') ? 'show' : '' }}
                            {{ Request::is('admin/linksuteis') ? 'show' : '' }}" 
                            id="collapseConteudos">

                            <div class="list-group list-group-flush">
                                <a href="{{ url('admin/noticias') }}" 
                                   class="list-group-item list-group-item-action bg-light
                                   {{ Request::is('admin/noticias') ? 'active' : '' }}">
                                    - Notícias
                                </a>
                                <a href="{{ url('admin/agendaeventos') }}" 
                                   class="list-group-item list-group-item-action bg-light
                                   {{ Request::is('admin/agendaeventos') ? 'active' : '' }}">
                                    - Agenda de Eventos
                                </a>
                                <a href="{{ url('admin/parceiros') }}" 
                                   class="list-group-item list-group-item-action bg-light
                                   {{ Request::is('admin/parceiros') ? 'active' : '' }}">
                                    - Parceiros
                                </a>

                                <a href="{{ url('admin/linksuteis') }}" 
                                   class="list-group-item list-group-item-action bg-light
                                   {{ Request::is('admin/linksuteis') ? 'active' : '' }}">
                                    - Links Úteis
                                </a>
                            </div>
                        </div>

                        <a class="list-group-item list-group-item-action bg-light"
                        data-toggle="collapse" 
                        href="#collapseProvas" 
                        role="button" 
                        aria-expanded="false" 
                        aria-controls="collapseExample">
                            <i class="fas fa-user-graduate"></i> Provas
                        </a>
                        <div class="collapse 
                            {{ Request::is('admin/materias') ? 'show' : '' }}
                            {{ Request::is('admin/questoes') ? 'show' : '' }}
                            {{ Request::is('admin/aplicaprova') ? 'show' : '' }}" 
                            id="collapseProvas">

                            <div class="list-group list-group-flush">
                                <a href="{{ url('admin/materias') }}" 
                                   class="list-group-item list-group-item-action bg-light
                                   {{ Request::is('admin/materias') ? 'active' : '' }}">
                                    - Cadastrar Matéria
                                </a>
                                <a href="{{ url('admin/questoes') }}" 
                                   class="list-group-item list-group-item-action bg-light
                                   {{ Request::is('admin/questoes') ? 'active' : '' }}">
                                    - Cadastrar Questões
                                </a>
                                <a href="{{ url('admin/aplicaprova') }}" 
                                   class="list-group-item list-group-item-action bg-light
                                   {{ Request::is('admin/aplicaprova') ? 'active' : '' }}">
                                    - Aplicar Prova
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /#sidebar-wrapper -->
                
                <!-- Page Content -->
                <div id="page-content-wrapper">
                    
                    <nav id="nav-header" class="navbar navbar-expand-lg navbar-light bg-primario nav-bx-shadow">
                        <i class="btn btn-secondary" id="menu-toggle">
                            <i class="fas fa-chevron-left"></i><i class="fas fa-chevron-right"></i>
                        </i>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/inicial') }}">
                                        <i class="fas fa-globe-americas"></i> Página Inicial <span class="sr-only">(current)</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="navbar-text" href=""> | </a>
                                </li>
                                <li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-user-circle"></i> Nome do usuário
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right bg-secundario" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-address-card"></i> Meus Dados
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">
                                            <i class="fas fa-sign-out-alt"></i> Sair
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    
                    <div class="container-fluid">

                        <div class="card mt-3">
                            <div class="card-header bg-secundario text-white text-uppercase">
                                @yield('titulo')
                                @yield('botao')
                            </div>
                            <div class="card-body">
                                @yield('conteudo')
                            </div>
                        </div>
                        
                    </div>

                </div>
                <!-- /#page-content-wrapper -->
                
            </div>
            <!-- /#wrapper -->
        </div>

        <script type="text/javascript">
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });       
        </script>
        
    </body>
</html>
