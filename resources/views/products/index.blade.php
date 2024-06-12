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

  @if (session()->has('success'))
  <div class="alert alert-success"> 
  <b>{{ session()->get('success') }}</b>
  </div>
    
  @endif
  
  <div class="container">
    <div class="text-end mt-5">
      <a href="/products/create" class="btn btn-dark ">Create new product</a>
    </div>
  </div>
<div class="container mt-5">
  <table class="table table-dark">
   
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
      </tr>
   
 @foreach ($products as $product)
   
      <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->email }}</td>
        
        <td><a class="btn btn-info" href="{{ route('products.show', $product->id) }}">Show</a>

        <a class="btn btn-success" href="{{ route('products.edit', $product->id) }}">Edit</a>
        
        

          <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger "> 
          </form>
        </td>
        
      </tr>
      
    @endforeach
   
  </table>
</div>
</body>
</html>