<x-app-layout>
    <div class="lyear-layout-web">
        <div class="lyear-layout-container">
          <aside class="lyear-layout-sidebar">
            
            <!-- logo -->
            <div id="logo" class="sidebar-header">
              <a href="index.html"><img src="{{ asset('theme/images/logo-ico.png') }}" title="LightYear" alt="LightYear" /></a>
            </div>
            <div class="lyear-layout-sidebar-scroll"> 
              
              <nav class="sidebar-main">
                <ul class="nav nav-drawer">
                  <li class="nav-item active"> <a href="/"><i class="mdi mdi-home"></i> Accueil</a> </li>
                  <li class="nav-item nav-item-has-subnav">
                    <a href="javascript:void(0)"><i class="mdi mdi-city"></i> Régions</a>
                    <ul class="nav nav-subnav">
                      <li> <a href="#">Ajouter</a> </li>
                    </ul>
                  </li>
                  <li class="nav-item nav-item-has-subnav">
                    <a href="javascript:void(0)"><i class="mdi mdi-account"></i> <span>Utilisateurs</span></a>
                    <ul class="nav nav-subnav">
                      <li> <a class="multitabs" href="{{route('users')}}">Ajout</a> </li>
                    </ul>
                  </li>
                  
                </ul>
              </nav>
              
              <div class="sidebar-footer">
                <p class="copyright">Copyright &copy; 2020-2021. <a target="_blank" href="#">LMIO3</a> All rights reserved.</p>
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
                      <li><a href="{{ route('logout') }}"><i class="mdi mdi-logout-variant"></i> se déconnecter</a></li>
                    </ul>
                  </li>
                  <!---->
                  
                  <!---->
                </ul>
                
              </div>
            </nav>
            
          </header>
          <!--End -->
          
          <!---->
          <main class="lyear-layout-content">
            
          <div class="container-fluid p-t-15">
      
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-toolbar clearfix">
             
            </div>
            <div class="card-body">
              
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

            @endif
        </div>
   
            </div>
          </div>
        </div>
      
      </div>
      
      </div>
            
          </main>
          <!--End -->
        </div>
      </div>
</x-app-layout>
