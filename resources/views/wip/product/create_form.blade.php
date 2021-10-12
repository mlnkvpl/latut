    @isset($product)
    @include('wip.product.show')
    @endisset
    @php
    // dd($categories);
    @endphp
    @if (count($categories) != 0)


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
            <label for="_preis">Preis</label>
            <input type="text" class="form-control" id="_preis" name="preis" placeholder="Product Preis">
        </div>

        <div>
            <label for="_category_id"> Category</label>
            <select id="_category_id" name="category_id">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}"> {{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>

    </form>

    @else
    <p>error </p>
    @endif