@isset($product)
    @include('wip.product.show')
@endisset


<form method="POST" action="/product/edit/{{$product->id}}">
    @csrf
    <input type="hidden" name="id" value="{{ $product->id }}">
    <div class="form-group">
        <label for="_name">Product</label>
        <input type="text" class="form-control" id="_name" name="name" value="{{ $product->name }}">
    </div>
    <div class="form-group">
        <label for="_description">Description</label>
        <input type="text" class="form-control" id="_description" name="description" value="{{ $product->description }}">
    </div>




    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>


</form>