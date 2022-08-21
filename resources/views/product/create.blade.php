@extends('product.layout')
@section('content')
<div class = "container">
    <form action="/product" method="POST">
        {!!csrf_field()!!}
        <label>Name: </label>
        <input type="text" name="name" id="name" class="form-control"><br>
        @error('name')
            <p style="color: red">Name is required.</p>
        @enderror
        <label>Description: </label>
        <input type="text" name="description" id="description" class="form-control"><br>
        @error('description')
            <p style="color: red">Description is required.</p>
        @enderror
        <label>Price: </label>
        <input type="text" name="price" id="price" class="form-control"><br>
        @error('price')
            <p style="color: red">Price is required.</p>
        @enderror
        <input type="submit" value="Submit" class="btn btn-primary"><br>
    </form>
</div>
@stop