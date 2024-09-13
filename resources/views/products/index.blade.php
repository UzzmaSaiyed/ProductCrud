<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Index Page</title>
</head>
<body>
	<h1>Product Details</h1>
	<a href="{{route('products.create')}}">Enter Product</a>
	<br>
	<table border="1">
		<thead>
			<tr>
				<th>Product Name</th>
				<th>Product Description</th>
				<th>Status</th>
				<th>Duration</th>
				<th>Category</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<!-- space is must below -->
			@foreach($blog3s ?? '' as $blog3)
				<tr>
					<td>{{$blog3->productname}}</td>
					<td>{{$blog3->productdescription}}</td>
					<td>{{$blog3->status}}</td>
					<td>{{$blog3->Duration}}</td>
					<td>
					 <!-- Split the categories string into an array -->
                    @if($blog3->Category)
                        @php
                            $categories = explode(', ', $blog3->Category);
                        @endphp
                        @foreach($categories as $category)
                            {{ $category }}<br>
                        @endforeach
                    @endif
					<td>
						<a href="{{route('products.edit',$blog3->productid)}}">Edit</a>
						<a href="{{route('products.delete',$blog3->productid)}}">Delete</a>
					</td>
				</tr>
			@endforeach
		</tbody>

</body>
</html>