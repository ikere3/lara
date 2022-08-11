<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Excel Export</title>
</head>
<body>
    <a class="btn btn-dark" href="/export">Export to Excel</a>
    <table class="table table-striped">
        <thead>
            <th>Product Name</th>
            <th>Category</th>
            <th>Stock</th>
            <th>Unit Price</th>
        </thead>
        <tbody>
            @foreach ($products as $product)
        <tr>
           <td>{{$product->name}}</td>
           <td>{{$product->stock}}</td>
           <td>{{$product->category}}</td>
           <td>{{$product->unit_cost}}</td>
        </tr>
              @endforeach
        </tbody>
    </table>
</body>
</html>