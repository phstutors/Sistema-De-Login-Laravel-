@extends('layouts.app')

@section('contents')
    
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        
        Bootstrap
      </a>
    </div>
  </nav>
 <form action="{{ route('store') }}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Seu nome" class="form-control"><br>
    <input type="email" name="email" placeholder="Seu email" class="form-control"><br>
    <input type="password" name="password" placeholder="Sua senha" class="form-control"><br>
    <input type="text" name="address" placeholder="Seu Endereço" class="form-control"><br>
    <input type="submit" class="form-control btn btn-primary submit px-3">

</form>

@endsection