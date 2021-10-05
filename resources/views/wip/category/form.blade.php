<p>form to test category controller and model</p>

<form method="POST" action="/profile">
    @csrf

    <div class="form-group">
        <label for="_name">Email</label>
        <input type="text" class="form-control" id="_name" name="name" placeholder="Category Name">
    </div>
</form>
