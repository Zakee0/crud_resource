<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>crud</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
 <div class="container">
    <h1 class="text-center mt-4">Edit a Product</h1>

    {{-- form content  --}}
    <form  method="POST" action="{{ route('products.update' ,$product->id) }}">
        @csrf
        @method('PUT')
       
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $product->name }}">
            </div>
        
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Email:</label>
            <div class="col-md-4">
                <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" value="{{ $product->email }}">
            </div>
            <br>
            <br>
            <button  type="submit" class="btn btn-dark d-block">Update</button>
      </form>
 </div>

</body>
</html>