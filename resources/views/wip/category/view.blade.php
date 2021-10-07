<ul>
    @foreach($categories as $category)
        <li>
            <p>{{ $category->name }}</p>
            <p>{{ $category->description }}</p>
        </li>
    @endforeach
</ul>





