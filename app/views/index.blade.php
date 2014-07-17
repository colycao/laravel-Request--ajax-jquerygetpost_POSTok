<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>AJAXing</title>
</head>
<body>
	<div class="container">
		<a href="#" id="myget">MyGet</a>
		<hr>
		<form action="#">
			<label for="">name</lablel>
				<input type="text" name="name">
				<button type="submit">Submit</button>
		</form>
	</div>
	{{HTML::script('myjs/jquery-1.10.2.js')}}
	<script>
		$(document).ready(function(){
			
			$('#myget').click(function(e){
				e.preventDefault();
				//get
				$.get('apple',function(date){
					console.log(date);
				});	
			});

			$('form').submit(function(e){
				e.preventDefault();
				//post
				$.post('apple', {name: 'name anything'} , function(date){
					console.log(date);
				});
			});

		});

	</script>
</body>
</html>

