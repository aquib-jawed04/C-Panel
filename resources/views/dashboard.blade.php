@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>My Dashboard</h3>
                    <a href="/posts/create" class="btn btn-warning">Create New</a>
                    
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <td></td>
                                <td></td>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostController@destroy', $post->id], 'method'=> 'POST','class'=>'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                    <hr>    
                        <br>
                        <p>You have no post to show</p>
                    @endif

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
