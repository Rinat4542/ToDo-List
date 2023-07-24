@extends('main')

@section('main')
<form action="{{ route('tasks.update', ['task' =>$task->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
        <label class="visually-hidden">Title</label>
        <input name="title" type="text" class="form-control" placeholder="Название">
        </div>
        <div>
        <label class="visually-hidden">Body</label>
        <input name="body" type="text" class="form-control" placeholder="Описание задачи">
        </div>
        <div>
        <label class="visually-hidden">Tags</label>
        <input name="tags" type="text" class="form-control" placeholder="Теги">
        </div>
        <div>
        <input name="image" class="form-control" type="file" id="formFile">
        </div>
        <div>
        <button type="submit" class="btn btn-primary mb-3 ml-1">Сохранить изменения</button>
        </div>
    </form>
@endsection