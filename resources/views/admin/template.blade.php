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
                    <div class="sidebar-heading nav-bx-shadow">ABEFAER </div>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action bg-light">Dashboard</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Shortcuts</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Overview</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Events</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Profile</a>
                        <a href="#" class="list-group-item list-group-item-action bg-light">Status</a>
                    </div>
                </div>
                <!-- /#sidebar-wrapper -->
                
                <!-- Page Content -->
                <div id="page-content-wrapper">
                    
                    <nav class="navbar navbar-expand-lg navbar-light bg-primario nav-bx-shadow">
                        <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    
                    <div class="container-fluid">
                        @yield('conteudo')
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
