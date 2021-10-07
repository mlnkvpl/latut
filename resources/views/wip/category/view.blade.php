<ul>
    @foreach($categories as $category)
        <li>
            <p>{{ $category->name }}</p>
            <p>{{ $category->description }}</p>
            <a href="category/edit/{{ $category->id }}">edit</a>
            <a href="category/delete/{{ $category->id }}">delete</a>
        </li>
    @endforeach
</ul>





