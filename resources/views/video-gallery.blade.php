@extends('templates.pages')

@section('nav-title','Video Gallery')

@section('header')
<div class="container">
    <div class="row">
        <div class="col-sm-12 dashboard-submenu">            
            <ul class="nav navbar text-center">                
                <li><a href="">Latest</a></li>
                <li><a href="">Popular</a></li>
                <li><a href="">Playlist</a></li>
            </ul>                  
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="row">    
    <div class="col-12 text-center mt-4">
        @for($i=0;$i<=4;$i++)
            <div class="video-content col-5 col-sm-3 d-inline-block">
                <img class="video-thumb img-fluid" src="{{ asset('../assets/img/thumb1.png')}}" alt="thumbnail">
                <h4 class="video-title text-left">Get Ready Fast For Fall Leaf Viewing Trips</h4>
                <h6 class="video-category text-left">travel</h6>
            </div>           
            <div class="video-content col-5 col-sm-3 d-inline-block">
                <img class="video-thumb img-fluid" src="{{ asset('../assets/img/thumb2.png')}}" alt="thumbnail">
                <h4 class="video-title text-left">Getting Cheap Airfare For Last Minute Travel</h4>
                <h6 class="video-category text-left">adventure</h6>
            </div> 
        @endfor
    </div>   
</div>    
@endsection