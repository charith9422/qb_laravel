@extends('layouts.app')
 
@section('content')
    <h1>Interview Questions</h1>

    <br>     
    @if (count($posts)>0)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}} ">
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <div class="chip">
                            {{$post->category}}
                        </div>
                        <div>
                            <i>{{$post->tag}}</i>
                        </div>
                        
                        <small style="color:black">Question added on {{$post->created_at}}</small>
                    </div>
                </div>
                
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>    
    @endif
@endsection