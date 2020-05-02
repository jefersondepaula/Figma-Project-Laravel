@include('templates.partials.head')
<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="">My Profile</a>
    <a href="">Dashboard</a>
    <a href="/logout">Sair</a>
  </div>
  
  <div id="main">
    <nav class="navbar">
        <button class="openbtn navbar-toggler" onclick="openNav()">
            <span class="icon-menu"></span>
        </button>
        <div class="mx-auto title-page">@yield('nav-title')</div>  
    </nav>    
  </div>

  @yield('content')
  
@include('templates.partials.footer')  