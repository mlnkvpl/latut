@isset($discount)
@include('wip.discount.show')
@endisset

<form method="POST" action="/discount/edit/{{$discount->id}}">
    @csrf
    <input type="hidden" name="id" value="{{ $discount->id }}">

    <!-- Name  -->
    <div class="form-group">
        <label for="_name">Name</label>
        <input type="text" class="form-control" id="_name" name="name" value="{{$discount->name}}">
    </div>

    <!-- Description -->
    <div class="form-group">
        <label for="_description">Description</label>
        <input type="text" class="form-control" id="_description" name="description" value="{{$discount->description}}">
    </div>

    <!-- Percentage -->
    <div class="form-group">
        <label for="_percentage">Percentage</label>
        <input type="text" class="form-control" id="_percentage" name="percentage" value="{{$discount->percentage}}">
    </div>

    <!-- Start date -->
    <div class="form-group">
        <label for="_start_date">Start date</label>
        <input type="text" class="form-control" id="_start_date" name="start_date" value="{{$discount->start_date}}">
    </div>

    <!-- End date -->
    <div class="form-group">
        <label for="_end_date">End date</label>
        <input type="text" class="form-control" id="_end_date" name="end_date" value="{{$discount->end_date}}">
    </div>


    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
    </div>



</form>