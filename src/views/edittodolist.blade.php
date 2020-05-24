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
			width:15%;
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
	<div class="card">
	<h1 style="text-transform:uppercase;background-color:green;text-align: center;color:white;">Update-List</h1>  
<form action="{{route('todolist.update',$todo->id)}}" method="POST">
	@csrf
	@method('PUT')
	<textarea cols='30' rows='1' name='list'>{{$todo->list}}</textarea>
	<input type="submit" value="Update list"id='submit'>
</form>

		
	</div>
	</div>
	

</script>
</body>
</html>