@extends('layouts.app')

@section('content')
@if(!Auth::guest())
    <div class="jumbotron text-center" style="background-color:#1e88e5; color:white">
        <h1>Welcome To C-Panel</h1>  
    </div>
    <div class="conatiner text-center">
        <a href="/posts/create" class="btn btn-success btn-lg"> Create My Dashboard</a>
    </div>
@else
    <div class="jumbotron text-center" style="background-color:#1e88e5; color:white ">
        <h1>Welcome To C-Panel</h1> 
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eligendi doloribus, eaque aliquid amet porro? Eaque veniam dolor repudiandae id quo ex, a earum quae consectetur esse, aut, possimus nobis!</p>
    </div>
    <div class="text-center">
            <p><a class="btn btn-warning btn-lg" href="/login" role="button">Login</a> <a class="btn btn-danger btn-lg" href="/register" role="button">Register</a></p> 
    </div>
@endif
@endsection