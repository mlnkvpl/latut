<table>
    <tr>
        <td>Name</td>
        <td>Description</td>
        <td>Percentage</td>
        <td>Start date</td>
        <td>End date </td>

    </tr>
    @foreach ($discounts as $discount)
    <tr>

        <td>
            <p>{{ $discount->name }}</p>
        </td>
        <td>
            <p>{{ $discount->description }}</p>
        </td>
        <td>
            <p>{{ $discount->percentage }}</p>
        </td>
        <td>
            <p>{{ $discount->start_date }}</p>
        </td>
        <td>
            <p>{{ $discount->end_date }}</p>
        </td>
        <td><a href="/discount/edit/{{ $discount->id }}">edit</a></td>
        <td><a href="/discount/destroy/{{ $discount->id }}">delete</a></td>

    </tr>
    @endforeach
</table>