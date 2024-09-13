<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index Page</title>
</head>
<body>
	<h1>Blog</h1>
	<a href="{{route('blog.create')}}">Create Blog</a>
	<br>
	<table border="1">
		<thead>
			<tr>
				<th>Title</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<!-- space is must below -->
			@foreach($blogs ?? '' as $blog)
				<tr>
					<td>{{$blog->title}}</td>
					<td>{{$blog->description}}</td>
					<td>
						<a href="{{route('blog.edit',$blog->id)}}">Edit</a>
						<a href="{{route('blog.delete',$blog->id)}}">Delete</a>
					</td>
				</tr>
			@endforeach
		</tbody>

</body>
</html>