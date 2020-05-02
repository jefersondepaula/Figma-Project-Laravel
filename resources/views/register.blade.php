@extends('templates.forms.authForm')

@section('title','Cadastro')

@section('inputs')  

@if($errors->any())
    @foreach ($errors->all() as $erro)
        <div class="col-12 alert alert-danger">
            {{$erro}}<br>
        </div>
    @endforeach
@endif

@csrf
        <label for="email">
        <input class="form-control text-center" type="text" name="email" placeholder="Email" value="{{old('email')}}">
        </label>

        <label for="nome">
            <input class="form-control text-center" type="text" name="name" placeholder="Nome Completo" value="{{old('name')}}">
        </label>

        <label for="password">
            <input class="form-control text-center" type="password" name="password" placeholder="Senha">
        </label>

        <label for="password">
            <input class="form-control text-center" type="password" name="password_confirmation" placeholder="Confirme sua senha">
        </label>
    
        <button class="form-control button mt-5 text-center" type="submit" value="disabled">
            <span class="icon-arrow">
                <img src="{{asset('../assets/img/icon-arrow.png')}}" alt="">
            </span>
        </button>

@endsection

@section('links')
    <a class="text-center" href="{{url('login')}}">ja tem um cadastro?</a>
@endsection