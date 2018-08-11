@extends('layouts.app')

@section('content')

    <h1>Posts</h1>
    @if(!Auth::guest())
         @if(count($posts) > 0)
            @foreach($posts as $post)
                <div class="well">
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                        <img class="rounded float-left" src="/storage/doc_type/{{$post->doc_type}}">

                        </div>
                        <div class="col-md-8 col-sm-8">
                            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- {{$posts->links()}} --}}
            @else
            <p>No Post Found.</p>
        @endif
    @endif
@endsection