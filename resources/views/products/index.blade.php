<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel CRUD</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Laravel CRUD</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="/">Products</a></li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="text-right">
      <a href="/products/create" class="btn btn-dark">New Product</a>
    </div>

    <h1>Products</h1>
    <table class="table">
      <thead>
        <tr>
          <th>S No.</th>
          <th>Name</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($products as $product)
        <tr>
          <td>{{ $loop->index + 1 }}</td>
          <td>{{ $product->name }}</td>
          <td>
            <img src="/products/{{ $product->image }}" class="rounded-circle" width="50" height="50"/>
          </td>
          <td>
          <a href="/products/{{ $product->id }}/edit" class="btn btn-primary btn-sm">Edit</a>

            <!-- <a href="/products/{{ $product->id }}/delete" class="btn btn-dark btn-sm">Delete</a> -->
            
            <form method="POST" class="d-inline" action="/products/{{ $product->id }}/delete">
            @csrf 
            @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
          </form>

          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  
</body>
</html>
