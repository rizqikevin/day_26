@extends('layout')

@section('content')
<div class="container">
    <h1>Product List</h1>
    <table id="productTable" class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#productTable').DataTable();
    });
</script>
@endsection
