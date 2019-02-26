@extends('layouts.app')
 
@section('content')
    <h1>Interview Questions</h1>
    <br>     
    @if (count($posts)>0)
    <h4>Results found!</h4>
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-3 col-sm-3">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}} ">
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <h5>{{$post->category}}</h5>
                        <small style="color:black">Question added on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
                
            </div>
        @endforeach
        
    @else
        <p>No questions found</p>    
    @endif
@endsection