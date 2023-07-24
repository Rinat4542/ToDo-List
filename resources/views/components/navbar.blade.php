<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('tasks.show') }}">Список дел</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        </ul>
        @if (auth()->guest())
          <a href="{{ route('login.index') }}" class="btn btn-outline-primary m-lg-1">Войти</a>
          <a href="{{ route('register.index') }}" class="btn btn-outline-primary m-lg-1">Зарегистрироваться</a> 

        @else
          <h5 class="m-1">{{auth()->user()->name}}({{auth()->user()->email}})</h5>
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-outline-danger" type="submit">Выйти</button>
          </form>
        @endif

      </div>
    </div>
  </nav>