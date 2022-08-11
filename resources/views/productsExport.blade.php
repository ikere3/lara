<table class="table table-striped">
        <thead>
            <tr>
            <th>Product Name</th>
            <th>Category</th>
            <th>Stock</th>
            <th>Unit Price</th>
            </tr>
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