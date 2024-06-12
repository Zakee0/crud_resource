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
    <h1 class="text-center">Products Data</h1>
    <div class="float-end">
    <a href="{{ route('products.index') }}" class="btn btn-success ">Back</a>
</div>

<div class="mt-3">
    <p><b>Name : {{ $product->name }}</b></p>
    <p><b>Email : {{ $product->email }}</b></p>
    <p><b></b></p>
</div>

</div>
    </body>
    </html>