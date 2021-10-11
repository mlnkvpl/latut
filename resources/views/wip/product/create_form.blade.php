    @isset($product)
        @include('wip.product.show')
    @endisset
    
    
    <form method="POST" action="/product/create">
        @csrf

        <div class="form-group">
            <label for="_name">Product</label>
            <input type="text" class="form-control" id="_name" name="name" placeholder="Product Name">
        </div>
        <div class="form-group">
            <label for="_description">Description</label>
            <input type="text" class="form-control" id="_description" name="description" placeholder="Product Description">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>

    </form>