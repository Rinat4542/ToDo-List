@extends('main')
@section('main')
<div class="row mt-4">
    <form action="" method="post">
        @csrf
        
        <div class="mb-3" >
            <label for="email" class="form-label">E-mail адрес</label>
            <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" id="email">
        </div>

        <div class="mb-3" >
            <label for="password" class="form-label">Пароль</label>
            <input type="password" name="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" id="password">
        </div>

        <button type="submit" class="btn btn-primary">Войти</button>
    </form>
</div>
@endsection