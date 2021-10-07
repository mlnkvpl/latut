
<p>form to test category controller and model</p>

@isset( $category )
    @include('wip.category.preview')
@endisset

<form method="POST" action="/category/edit">
    @csrf
 <input type="hidden"  name="id" value="{{ $category->id }}">
    <div class="form-group">
        <label for="_name">Category</label>
        <input type="text" class="form-control" id="_name" name="name" value="{{ $category->name }}">
    </div>
    <div class="form-group">
        <label for="_description">Description</label>
        <input type="text" class="form-control" id="_description" name="description" value="{{$category->description  }}">
    </div>

<div>
<label for="_parent_category_id">Parent category</label>
<select id="_parent_category_id" name="parent_category_id">
     @foreach($parents as $parent)
    <option value="{{$parent->id}}" > {{$parent->name}}</option>
    @endforeach
</select>
</div>



        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>


</form>

