
@extends('layouts.app')

@section('content')

<a class="btn btn-default"  href="/posts">Go Back</a>
<h1>{{$post->title}}</h1>
<img class="rounded float-left" style="width:10%" src="/storage/doc_type/{{$post->doc_type}}">
<br>
<br>
<div>
    <p>{!!$post->body!!}</p>
</div>
    
<hr>
@if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

        {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method'=> 'POST','class'=>'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
@endif
@endsection