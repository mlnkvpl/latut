
<p>form to test category controller and model</p>

<form method="POST" action="/category">
    @csrf

    <div class="form-group">
        <label for="_name">Category</label>
        <input type="text" class="form-control" id="_name" name="name" placeholder="Category Name">
    </div>
    <div class="form-group">
        <label for="_description">Description</label>
        <input type="text" class="form-control" id="_description" name="description" placeholder="Category Description">
    </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
</form>

