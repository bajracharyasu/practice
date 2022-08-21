@extends('product.layout')
@section('content')
<div class="container">
    <form action="/product/{{$product->id}}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" id="id" value="{{$product->id}}">
        <label>Name: </label>
        <input type="text" name="name" id="name" value = "{{$product->name}}" class="form-control"><br>
        @error('name')
            <p style="color: red">Name is required.</p>
        @enderror
        <label>Description: </label>
        <input type="text" name="description" id="description" value = "{{$product->description}}" class="form-control"><br>
        @error('description')
            <p style="color: red">Description is required.</p>
        @enderror
        <label>Price: </label>
        <input type="text" name="price" id="price" value = "{{$product->price}}"class="form-control"><br>
        @error('price')
            <p style="color: red">Price is required.</p>
        @enderror
        <input type="submit" value="Update" class="btn btn-primary"><br>
    </form>
</div>