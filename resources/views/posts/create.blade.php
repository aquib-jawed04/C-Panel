@extends('layouts.app')

@section('content')

    <h1>Create  Posts</h1>
    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','', ['class'=>'form-control', 'placeholder' => 'Title'])}}
        
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','', ['id'=>'article-ckeditor','class'=>'form-control', 'placeholder' => 'Enter Your text here.'])}}
        
    </div>

    <div class="form-group">
        {{Form::file('doc_type')}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection