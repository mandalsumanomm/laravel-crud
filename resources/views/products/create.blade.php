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
    <h1>Create New Product</h1>

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <form method="POST" action="/products/store" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control"/>    
      </div>
      <div class="form-group">
        <label>Description</label>
        <textarea class="form-control" rows="4" name="description"></textarea> 
      </div>
      <div class="form-group">
        <label>Image</label>
        <input type="file" name="image" class="form-control"/>
      </div>
      <button type="submit" class="btn btn-dark">Submit</button>
    </form>
  </div>

</body>
</html>
