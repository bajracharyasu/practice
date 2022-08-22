@extends('product.layout')
@section('content')
    <div class = "container">
        <h2>Products</h2>
        <a href="{{url('/product/create')}}" class="btn btn-sucess btn-sm">Add Product</a>    <br>
        @auth
        <span class="font-bold uppercase">WELCOME {{auth()->user()->name}}</span>
        <br>
        <form action="/logout" class="inline" method="POST">
            @csrf
            <button type="submit">Log Out</button>
        </form>
        @else
        <a href="/register">Register</a>
        <a href="/login">LogIn</a>
        @endauth
        @if(session()->has('messgae'))
            <div class="fixed top-0 left-1/2 transfrom bg-laravel text-ehite-pc-48-py-3">
                <p>
                    {{session('message')}}
                </p>
            </div>
        @endif
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach($product as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->price}}</td>
                    <td>
                        <a href="/product/{{$item->id}}/edit">Edit</a>
                        <form action="/product/{{$item->id}}" method="POST">
                            @csrf <!-- this is used so that other site can not submit their information ro our site. cross site protection-->
                            @method('DELETE')
                            <button typen = "submit" class = "btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection