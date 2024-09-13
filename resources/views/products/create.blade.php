<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create Page</title>
</head>
<body>
	<h1>Enter Product Details</h1>
	<form action="{{route('products.store')}}" method="post">
	<table border="0">
		@csrf
		<tr>
			<td>
				<label for="">Product Name</label>
			</td>
			<td>
				<input type="text" name="productname">
				@error('productname')
				{{ $message }}
				@enderror
			</td>
		</tr>
		<tr>
			<td>
				<label for="">Product Description</label>
			</td>
			<td>
				<textarea name="productdescription" rows="10" cols="30">
				</textarea>
				@error('productdescription')
				{{ $message }}
				@enderror
			</td>
		</tr>
		<tr>
			<td>
				<label for="">Product Status</label>
			</td>
			<td>
				<input type="checkbox" name="avail" id="avail">
				<label for="avail">Tick if Available</label>
			</td>
		</tr>
		<tr>
			<td>
				<label for="">Product Duration</label>
			</td>
			<td>
				<input type="radio" name="dur" value="New">
				<label for="dur">New</label>
				<input type="radio" name="dur" value="Old">
				<label for="dur">Old</label>
				@error('Duration')
				{{ $message }}
				@enderror
			</td>
		</tr>
		<tr>
			<td>
				<label for="">Product Category</label>
			</td>
			<td>
				<input type="checkbox" name="check[]" id="check1" value="Stationary">
				<label for="check1">Stationary</label>
				<input type="checkbox" name="check[]" id="check2" value="Furniture">
				<label for="check2">Furniture</label>
				<input type="checkbox" name="check[]" id="check3" value="Grocery">
				<label for="check3">Grocery</label>
				@error('Category')
				{{ $message }}
				@enderror
			</td>
		</tr>
		<tr><td> 
		<button type="submit">Create</button></td></tr>
	</table>
	</form>


</body>
</html>