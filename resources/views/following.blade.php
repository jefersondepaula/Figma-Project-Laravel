@extends('templates.pages')

@section('nav-title','Following')
    
@section('content')

<div class="container">
    <div class="row ">
        <div class="col-12 text-center">  
            @for($i=0;$i<4;$i++)      
                <div class="following-box col-5 col-sm-3 mt-4 text-center d-inline-block">
                    <img src="{{ asset('../assets/img/following-profile.png')}}" alt="profile">
                    <h5 class="following-name">Jared Morrison</h5>
                    <h6 class="following-role">Designer</h6>
                    <button class="btn-unfollow mb-4 mt-2" type="button">Unfollow</button>
                </div>
                <div class="following-box col-5 col-sm-3 mt-4 text-center d-inline-block">
                    <img src="{{ asset('../assets/img/following-profile2.png')}}" alt="profile">
                    <h5 class="following-name">Stella Richardson</h5>
                    <h6 class="following-role">Web Designer</h6>
                    <button class="btn-unfollow mb-4 mt-2" type="button">Unfollow</button>
                </div>
                <div class="following-box col-5 col-sm-3 mt-4 text-center d-inline-block">
                    <img src="{{ asset('../assets/img/following-profile3.png')}}" alt="profile">
                    <h5 class="following-name">Cory King</h5>
                    <h6 class="following-role">Designer</h6>
                    <button class="btn-unfollow mb-4 mt-2" type="button">Unfollow</button>
                </div> 
            @endfor           
        </div>
   
    </div>
</div>

@endsection