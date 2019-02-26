@extends('layouts.app')

@section('content') 
    <a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%;" src="/storage/cover_images/{{$post->cover_image}} ">
    <br><br>
    <div style="color:white">
        {!!$post->body!!}
    </div>
    <hr>
    
    <small style="color:#fffff">Question added on {{$post->created_at}} by {{$post->user->name}}</small>
    
    
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-warning"><span><i class="fas fa-edit"></i></span> Edit</a>
            {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{-- {{Form::submit('Delete',['class'=>'btn btn-danger'])}} --}}
                {{Form::button('<i class="fas fa-trash-alt"></i>',['class'=>'btn btn-danger','type'=>'submit'])}}
            {!!Form::close()!!}
            <br><br>    
        @endif
            
    @endif
        
@endsection
