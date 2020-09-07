<html>
	<head>
		<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	</head>
	<body>
			<div class='text-center pt-10'>
			<h1 class="text-2xl">All Your TO-DO</h1><br>
			<a href='/todos/create' class='border rounded p-2 m-2'>Create New</a><br><br>
				<ul>
				@foreach($todos as $todo)
					<li>
					{{$todo->title}}
					</li>
				@endforeach
				</ul>		
			</div>
	</body>
</html>
