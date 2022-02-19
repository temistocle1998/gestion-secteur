<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->

        <!-- Styles -->
        <link href="{{ asset('theme/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('theme/css/materialdesignicons.min.css') }}"  rel="stylesheet">
        <link href="{{ asset('theme/css/style.min.css') }}"  rel="stylesheet">
        @livewireStyles

        <!-- Scripts -->
    </head>
    <body>
        <div class="lyear-layout-web">
            <div class="lyear-layout-container">
              <aside class="lyear-layout-sidebar">
                
                <!-- logo -->
                <div id="logo" class="sidebar-header">
                  <a href="/"><img src="{{ asset('theme/images/logo-ico.png') }}" title="LightYear" alt="LightYear" /></a>
                </div>
                <div class="lyear-layout-sidebar-scroll"> 
                  
                  <nav class="sidebar-main">
                    <ul class="nav nav-drawer">
                      <li class="nav-item active"> <a href="/"><i class="mdi mdi-home"></i> Accueil</a> </li>
                      <li class="nav-item nav-item-has-subnav">
                        <a href="javascript:void(0)"><i class="mdi mdi-city"></i> Régions</a>
                        <ul class="nav nav-subnav">
                          <li> <a href="{{ url('users') }}">Ajouter</a> </li>
                        </ul>
                      </li>
                      <li class="nav-item nav-item-has-subnav">
                        <a href="javascript:void(0)"><i class="mdi mdi-account"></i> Utilisateurs</a>
                        <ul class="nav nav-subnav">
                          <li> <a href="{{ url('users') }}">Ajouter</a> </li>
                        </ul>
                      </li>
                      
                    </ul>
                  </nav>
                  
                  <div class="sidebar-footer">
                    <p class="copyright">Copyright &copy; 2020-2021. <a target="_blank" href="#">LMIO3</a> Tous droits réservés.</p>
                  </div>
                </div>
                
              </aside>
              <!--End-->
              
              <!---->
              <header class="lyear-layout-header">
                
                <nav class="navbar navbar-default">
                  <div class="topbar">
                    
                    <div class="topbar-left">
                      <div class="lyear-aside-toggler">
                        <span class="lyear-toggler-bar"></span>
                        <span class="lyear-toggler-bar"></span>
                        <span class="lyear-toggler-bar"></span>
                      </div>
                      <span class="navbar-page-title"> Tableau de bord </span>
                    </div>
                    
                    <ul class="topbar-right">
                      <li class="dropdown dropdown-profile">
                        <a href="javascript:void(0)" data-toggle="dropdown">
                          <img class="img-avatar img-avatar-48 m-r-10" src="{{ asset('theme/images/users/avatar.jpg') }}" alt="笔下光年" />
                          <span>{{ Auth::user()->name }} <span class="caret"></span></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li> <a href="#"><i class="mdi mdi-account"></i> informations personnelles</a> </li>
                          <li> <a href="#"><i class="mdi mdi-lock-outline"></i> changer mot de passe</a> </li>
                          <li class="divider"></li>
                          <li><form method="POST" action="{{ route('logout') }}">
                              @csrf
          
                              <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                              this.closest('form').submit();">
                                  <i class="mdi mdi-logout-variant"></i> se déconnecter</a>
                          </form></li>
                        </ul>
                      </li>
                      <!---->
                      
                      <!---->
                    </ul>
                    
                  </div>
                </nav>
                
              </header>
              <main class="lyear-layout-content">
      
                <div class="container-fluid p-t-15">
            
            <div class="row">
              @yield('content')
              </div>
            
            </div>
            
            </div>
                  
                </main>
                <!--End -->
              </div>
            </div>
            
        @stack('modals')

        @livewireScripts
        <script type="text/javascript" src="{{ asset('theme/js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('theme/js/bootstrap.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('theme/js/perfect-scrollbar.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('theme/js/main.min.js') }}"></script>
    </body>
</html>
