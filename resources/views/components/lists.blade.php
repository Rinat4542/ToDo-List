@extends('main')

@section('main')
    <form id="taskForm" class="row g-1 m-2" method="POST" action="{{ route('tasks.show') }}" enctype="multipart/form-data">
      @csrf
      <div class="col-auto">
        <label class="visually-hidden">Title</label>
        <input name="title" type="text" class="form-control" placeholder="Название">
      </div>
      <div class="col-auto">
        <label class="visually-hidden">Body</label>
        <input name="body" type="text" class="form-control" placeholder="Описание задачи">
      </div>
      <div class="col-auto">
        <label class="visually-hidden">Tags</label>
        <input name="tags" type="text" class="form-control" placeholder="Теги">
      </div>
      <div class="col-auto">
        <input name="image" class="form-control" type="file" id="formFile">
      </div>
      <div class="col-auto">
        <button id="submit" type="submit" class="btn btn-primary mb-3 ml-1">Добавить задачу</button>
      </div>
    </form>




    @foreach ($tasks as $task)
      <div class="card m-2" style="width: 60rem;">
        <img  src="{{$task->image}}" class="card-img-top"style="width: 150px; height: 150px">
        <div class="card-body">
          <h5 class="card-title">{{$task->title ?? NULL }}</h5>
          <p class="card-text">{{$task->body ?? NULL }}</p>
          <p class="card-text">{{$task->tags ?? NULL }}</p>
          <a href="{{route('tasks.edit', ['task'=>$task->id])}}" class="btn btn-warning ">Изменить</a>
          <form action="{{route('tasks.delete', ['task'=>$task->id])}}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Удалить</button>
          </form>
        </div>
      </div>
    @endforeach

@endsection