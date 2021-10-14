@isset($discount)
@include('wip.discount.show')
@endisset

<form method="POST" action="/discount/create_form">
    @csrf
    <!-- Name  -->
    <div class="form-group">
        <label for="_name">Name</label>
        <input type="text" class="form-control" id="_name" name="name" placeholder="Discount Name">
    </div>

    <!-- Description -->
    <div class="form-group">
        <label for="_description">Description</label>
        <input type="text" class="form-control" id="_description" name="description" placeholder="Discount Description">
    </div>

    <!-- Percentage -->
    <div class="form-group">
        <label for="_percentage">Percentage</label>
        <input type="text" class="form-control" id="_percentage" name="percentage" placeholder="Discount Percentage">
    </div>

    <!-- Start date -->
    <div class="form-group">
        <label for="_start_date">Start date</label>
        <input type="text" class="form-control" id="_start_date" name="start_date" placeholder="Discount Start_date">
    </div>

    <!-- End date -->
    <div class="form-group">
        <label for="_end_date">End date</label>
        <input type="text" class="form-control" id="_end_date" name="end_date" placeholder="Discount End_date">
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>

</form>