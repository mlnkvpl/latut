<table>
    <tr>
        <td>Product</td>
        <td>Description</td>
        <td></td>
    </tr>
    @foreach ($products as $product)
    <tr>

        <td>
            <p>{{ $product->name }}</p>
        </td>
        <td>
            <p>{{ $product->description }}</p>
        </td>
        <td><a href="/product/edit/{{ $product->id }}">edit</a></td>
        <td><a href="/product/destroy/{{ $product->id }}">delete</a></td>

    </tr>
    @endforeach
</table>