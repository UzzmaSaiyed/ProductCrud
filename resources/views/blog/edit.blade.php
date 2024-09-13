<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Edit Page</title>
</head>
<body>
	<h1>Create Blog</h1>
	<form action="{{route('blog.update', [$blog->id,$blog->title]) }}" method="post">
		<table border="0">
		@csrf
		<tr>
			<td>
				<label for="">Title</label>
			</td>
			<td>
				<input type="text" name="title" id="" value="{{old('title') ?? '' }}">
				@error('title')
				{{ $message }}
				@enderror
			</td>
		</tr>
		<tr>
			<td>
				<label for="">Description</label>
			</td>
			<td>
				<textarea name="Description" id="" rows="10" cols="30">{{old('Description') ?? '' }}
				</textarea>
				@error('Description')
				{{ $message }}
				@enderror
			</td>
		</tr>
		<tr><td> 
		<button type="submit">Update</button></td></tr>
	</table>
	</form>


</body>
</html>