@extends('layouts.app')

@section('content')
    <h1>Create Question</h1>
    {!! Form::open(['action'=>'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Question')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'title'])}}
        </div>
        <div class="form-group">
                {{Form::label('category','Category')}}
                {{Form::select('category',array('Computer Science'=>'Computer Science','Java'=>'Java','C'=>'C','C++'=>'C++','Web'=>'Web','Multimedia'=>'Multimedia','Artificial Inteligence'=>'Artificial Inteligence','Angular'=>'Angular','Php'=>'Php','Networking'=>'Networking','Statistics'=>'Statistics','Chemistry'=>'Chemistry','Mathematics'=>'Mathematics','Molecular Biology'=>'Molecular Biology','Botany'=>'Botany','Other'=>'Other'),array('multiple' => true),['class'=>'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Answer')}}
            {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'body'])}}
        </div>
        <div class="form-group">
            {{Form::file('cover_image',['class'=>'btn btn-info'])}}
        </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    
    {!! Form::close() !!}
    
@endsection