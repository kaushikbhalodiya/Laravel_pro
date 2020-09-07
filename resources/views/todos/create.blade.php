<html>
	<head>
		<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	</head>
	<body>
			<div class='text-center pt-10'>
			<h1 class="text-2xl">What next you need TO-DO</h1>
			<form action="/todos/create" method="post" class="py-5">
				@csrf
				<input type="text" name="title" class='py-2 px-2 border rounded'>	
				<input type="submit" name="Create" class='p-2 border rounded'>
			</form>
			<a href='/todos'>Back</a>
			</div>
	</body>
</html>