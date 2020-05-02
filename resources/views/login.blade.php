@extends('templates.forms.authForm')

@section('title','Login')
    
@section('inputs')

@if(session('warning'))
    <div class="col-12 text-center alert alert-warning">
        {{session('warning')}}<br>
    </div> 
@endif

@csrf
        <label for="user">
            <input class="form-control text-center" type="text" name="email" placeholder="Usuário">
        </label>

        <label for="password">
            <input class="form-control text-center" type="password" name="password" placeholder="Senha">
        </label>
        
        <button class="form-control button mt-5 text-center" type="submit" value="disabled">
            <span class="icon-arrow">
                <img src="{{asset('../assets/img/icon-arrow.png')}}" alt="">
            </span>
        </button>
        
@endsection

@section('links')
    <a class="text-center" href="">Esqueci a Senha</a><br>
    <a class="text-center" href="{{url('register')}}">Cadastro</a>
@endsection