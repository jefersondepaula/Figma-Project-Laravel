@extends('templates.pages')

@section('nav-title','Profile')

@section('header')

<div class="container">
    <div class="row">

        <div class="col-sm-12 col-md-12 profile-image text-center">            
                <img class="img-fluid" src="{{ asset('../assets/img/profile.png')}}" alt="">    
                <h3 class="profile-name">{{ Auth::User()->name }}</h3>  
                <h4 class="profile-role">Web developer</h4>       
        </div>

        <div class="col-sm-8 col-md-12 social-score">                    
            <div class="likes col-3 text-center">
                <h5>231</h5>
                <h6>Likes</h6>
            </div> 
            <div class="following col-3 text-center">
                <h5>667</h5>
                <h6>Following</h6>
            </div> 
            <div class="followers col-3 text-center">
                <h5>546</h5>
                <h6>Followers</h6>
            </div>                            
        </div>
    </div>
@endsection

@section('content')
<div class="row">
    <div class="col-12 text-center mt-4">
        @for($i=0;$i<=5;$i++)
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