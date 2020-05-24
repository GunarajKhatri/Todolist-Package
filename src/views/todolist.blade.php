<!DOCTYPE html>
<html>
<head>
	<title>Todolist</title>
	<style type="text/css">
		.card{
            margin-left:31%;
            
			width:580px;
			box-shadow:0 4px 8px 0 rgba(0,0,0,0.2);
			transition:0.3s;
			border-radius:5px;
			margin-top:20px;
		}
		ul.breadcrumb{
			width:405px;
			margin-left:8px;
			padding:10px 16px;
			list-style:none;
			background-color:#eee;
			border-radius:5px;
		}
		.msg{
			text-align:center;
			background-color:red;
			border-radius:5px;
			width:250px;
			margin-left:600px;
		}
		a{  
			padding-top:5px;
			text-decoration:none;
			float:right;
			background:#4E9CAF;
			border-radius:5px;
			height:25px;
			text-align:center;
			display:block;
			width:50px;
			color:white;
			font-weight:bold;

		}
		li{
			font-weight:bold;
			font-size:18px;
		}
		.flex-container{
			display:flex;
		}
		.action{
			margin-left:20px;
			margin-top:20px;
		}
		.edit{
			margin-right:10px;
		}
		form{
			display:flex;
			/*margin-top:360px;*/

		}
		textarea{
			display:inline-block;
			width:80%;
			height:50px;
			resize:none;
			margin-left:3px;
			
		}
		#submit{
			display:inline-block;
			width:13%;
			height:40px;
			margin-bottom:-10px;
			margin-left:8px;
			margin-top:5px;
			background-color:blue;
			color:white;
			font-weight:bold;
			border:1px solid blue;
			border-radius:8px;
		}
		

	</style>
</head>
<body>
<div class="container">
	<h3 class="msg"> @if(count($errors)>0)
    @foreach($errors->all() as $error)
        {{$error}}
        @endforeach
    @endif </h3><br>
    <br>
	<div class="card">
   <h1 style="text-transform:uppercase;background-color:blue;text-align: center;color:white;">Todo-List</h1>
    
   @foreach($todos as $todo)
  
   	<div class="flex-container">
   		<div><ul class="breadcrumb">
   			<li>{{$todo->list}}</li>
   		</ul></div>
   		<div class="action">
   			<a href="{{route('todolist.destroy',$todo->id)}}"onclick="event.preventDefault();
                      if(confirm('Are you sure you want to delete?')){
                      document.getElementById('delete-{{$todo->id}}').submit(); }" >Delete</a>
                      <form id="{{'delete-'.$todo->id}}" action="{{route('todolist.destroy',$todo->id)}}" method="POST" style="display: none;">

                                        @csrf
                                        @method('DELETE')
                                    </form>
   			<a href="{{route('todolist.edit',$todo->id)}}" class="edit">Edit</a>
   			
   		</div>
   		
   	</div>
   	@endforeach



   	
  
<form action="{{route('todolist.store')}}" method="POST">
	@csrf
	<textarea cols='30' rows='1' name='list'></textarea>
	<input type="submit" value="Add list"id='submit'>
</form>

		
	</div>
	</div>
	

</script>
</body>
</html>