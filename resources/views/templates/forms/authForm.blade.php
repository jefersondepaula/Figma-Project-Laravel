<img class="bg-form text-center img-fluid" src="" alt="">

@include('templates.partials.head')


<div class="col-sm-12 col-md-5 form-center mx-auto">

    <h3 class="text-center card-subtitle mb-4">@yield('title')</h3>
        <form method="post" class="text-center">

            @yield('inputs')    

        </form>
</div>

<div class="links text-center container mt-1">
    
    @yield('links')
   
</div>

@include('templates.partials.footer')