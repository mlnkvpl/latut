<ul>

    @foreach ($categories as $category)
    <li>
        <p>{{ $category->name }}</p>
        <p>{{ $category->description }}</p>
        <a href="category/edit/{{ $category->id }}">edit</a>
        <a href="category/delete/{{ $category->id }}">delete</a>
    </li>
    @endforeach

</ul>

<table>
    <tr>
        <td>Category</td>
        <td>Description</td>
        <td></td>
    </tr>
    @foreach ($categories as $category)
    <tr>

        <td>
            <p>{{ $category->name }}</p>
        </td>
        <td>
            <p>{{ $category->description }}</p>
        </td>
        <td><a href="category/edit/{{ $category->id }}">edit</a></td>
        <td><a href="category/delete/{{ $category->id }}">delete</a></td>

    </tr>
    @endforeach
</table>
