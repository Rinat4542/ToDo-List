
$('#taskForm').on('submit',function(event){
  event.preventDefault();

  let title = $('#title').val();
  let body = $('#body').val();
  let tags = $('#tags').val();
  let image = $('#image').val();

  $.ajax({
    url: "http://127.0.0.1:8000/tasks",
    type:"POST",
    data:{
      "_token": "{{ csrf_token() }}",
      title:title,
      body:body,
      tags:tags,
      image:image,
    },
    success:function(response){
      console.log(response);
    },
  });

});







    
