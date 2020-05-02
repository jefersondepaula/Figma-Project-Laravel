@include('templates.partials.head')
<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="/profile"><i class="icofont-user-alt-6"></i> My Profile</a>
    <a href="/dashboard"><i class="icofont-dashboard-web"></i> Dashboard</a>
    <a href="/video-gallery"><i class="icofont-ui-video-play"></i> Video Gallery</a>
    <a href="/following"><i class="icofont-people"></i> Following</a>
    <a href="/logout"><i class="icofont-exit"></i> Sair</a>
  </div>
  
  <div id="main">
    <nav class="navbar">
        <button class="openbtn navbar-toggler" onclick="openNav()">
            <span class="icon-menu"></span>
        </button>
        <div class="mx-auto title-page">@yield('nav-title')</div>  
    </nav>    
  </div>

  @yield('header')

  @yield('content')
   
    
@include('templates.partials.footer')  