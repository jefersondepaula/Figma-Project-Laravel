<img class="bg-intro text-center img-fluid" style="opacity: 0.90" src="" alt="">

@include('templates.partials.head')

<main>
    <section class="buttons">
        <div class="container mt-5">
            <div class="row">
                <div class="col-xs-8 col-md-5 mx-auto">
                <a class="btn text-center w-100" href="{{ url('/login') }}">Login</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8 col-md-5 mx-auto mt-2">                    
                <a class="btn text-center w-100" href="{{url('/register')}}">Cadastro</a>
                </div>
            </div>
        </div>
    </section>

    <section class="title-app">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-xs-8 mx-auto">
                    <h2 class="title text-center">Share vid</h2>
                </div>
            </div>            
        </div>
    </section>

    <section class="list-carousel mt-5">
        <div class="container">
            <div class="owl-carousel owl-theme">
                <div class="item text-center"><h4 class="col-xs-3">Best Video Sharing Platform
                    around the globe</h4></div>
                <div class="item text-center"><h4>Content 2</h4></div>
                <div class="item text-center"><h4>Content 3</h4></div>
                <div class="item text-center"><h4>Content 4</h4></div>
                <div class="item text-center"><h4>Content 5</h4></div>                
            </div>
        </div>
    </section> 
    
</main>

   @include('templates.partials.footer')