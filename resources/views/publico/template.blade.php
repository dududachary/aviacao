<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ABEFAER - Associação Brasileira Das Entidades De Formação Aeronáutica</title>

    </head>
    <body>

      <div id="template-publico">

        <section id="cabecalho">
          <div id="banner-logo">
            <img class="rounded mx-auto d-block" src="{{url('/images/logo-min.jpg')}}" alt="Image"/>
          </div>
          
          <div id="navbar">
            <nav class="navbar navbar-expand-lg navbar-light navbar-custom" role="navigation">
              
              <div class="container">
                
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                  &#9776;
                </button>
                
                <div class="collapse navbar-collapse" id="exCollapsingNavbar">
                  
                  <ul class="nav navbar-nav">
                    <li class="nav-item active"><a href="{{ url('/inicial') }}" class="nav-link">Inicial</a></li>
                    <li class="nav-item"><a href="{{ url('/sobre') }}" class="nav-link">Sobre Nós</a></li>
                    <li class="nav-item"><a href="{{ url('/noticias') }}" class="nav-link">Notícias</a></li>
                    <li class="nav-item"><a href="{{ url('/eventos') }}" class="nav-link">Agenda de Eventos</a></li>
                    <li class="nav-item"><a href="{{ url('/legislacao') }}" class="nav-link">Legislação</a></li>
                    <li class="nav-item"><a href="{{ url('/parceiros') }}" class="nav-link">Parceiros</a></li>
                    <li class="nav-item"><a href="{{ url('/uteis') }}" class="nav-link">Links Úteus</a></li>
                    <li class="nav-item"><a href="{{ url('/sejamembro') }}" class="nav-link">Seja Um Membro</a></li>
                    <li class="nav-item"><a href="{{ url('/contato') }}" class="nav-link">Contato</a></li>
                  </ul>
                  
                  <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                    <li class="nav-item order-2 order-md-1"><a href="#" class="nav-link" title="settings"><i class="fa fa-cog fa-fw fa-lg"></i></a></li>
                    <li class="dropdown order-1">
                      <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">Acessar <span class="caret"></span></button>
                      <ul class="dropdown-menu dropdown-menu-right mt-2">
                        <li class="px-3 py-2">
                          <form class="form" role="form">
                            <div class="form-group">
                              <input id="emailInput" placeholder="Email" class="form-control form-control-sm" type="text" required="">
                            </div>
                            <div class="form-group">
                              <input id="passwordInput" placeholder="Senha" class="form-control form-control-sm" type="text" required="">
                            </div>
                            <div class="form-group">
                              <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                            </div>
                            <div class="form-group text-center">
                              <small><a href="#" data-toggle="modal" data-target="#modalPassword">Esqueceu a senha?</a></small>
                            </div>
                          </form>
                        </li>
                      </ul>
                    </li>
                  </ul>
                  
                </div>
              </div>
            </nav>
            
            <div id="modalPassword" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3>Esqueceu a senha?</h3>
                    <button type="button" class="close font-weight-light" data-dismiss="modal" aria-hidden="true">×</button>
                  </div>
                  <div class="modal-body">
                    <p>Recuperar senha..</p>
                  </div>
                  <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
                    <button class="btn btn-primary">Salvar Alterações</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


        <section id="conteudo">
          @yield('conteudo')
        </section>


        <section id="rodape">
          <footer class="page-footer head-footer font-small teal pt-4">
            
            <!-- Footer Text -->
            <div class="container text-center text-md-left">
              
              <!-- Grid row -->
              <div class="row">
                
                <!-- Grid column -->
                <div class="col-md-6 mt-md-0 mt-3">
                  
                  <!-- Content -->
                  <h5 class="text-uppercase font-weight-bold">Lorem ipsum dolor sit</h5>
                  <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita sapiente sint, nulla, nihil
                    repudiandae commodi voluptatibus corrupti animi sequi aliquid magnam debitis, maxime quam recusandae
                    harum esse fugiat. Itaque, culpa?</p>
                    
                  </div>
                  <!-- Grid column -->
                  
                  <hr class="clearfix w-100 d-md-none pb-3">
                  
                  <!-- Grid column -->
                  <div class="col-md-6 mb-md-0 mb-3">
                    
                    <!-- Content -->
                    <h5 class="text-uppercase font-weight-bold">FLorem ipsum dolor sit</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Optio deserunt fuga perferendis modi earum
                      commodi aperiam temporibus quod nulla nesciunt aliquid debitis ullam omnis quos ipsam, aspernatur id
                      excepturi hic.</p>
                      
                    </div>
                    <!-- Grid column -->
                    
                  </div>
                  <!-- Grid row -->
                  
                </div>
                <!-- Footer Text -->
                
                <!-- Copyright -->
                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                  <a href="https://mdbootstrap.com/">Eduardo Schiavo Dachary</a>
                </div>
                <!-- Copyright -->
                
              </div>  
              
            </div>
            
          </footer>
          
        </section>

      </div>

    </body>
</html>
