@extends('layouts.app')
@section('content')
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
  <div id="wrapper">
    <div class="jumbotron">

        <h1 class="display-4" style="color:white"><strong>Question Bank</strong> | <span><small>Faculty of Science</small></span> </h1>
        <p class="lead" style="color:white">Question Bank provides you with all the tips that would let you successfully face and interview.
        </p>
        <hr class="my-4">
        <p style="color:white">It consists of all the popular questions that is frequently asked in job interviews mainly related to the
          computer science field and other
          areas as well.</p>
        <p>
            
        @if (Auth::guest())
            
            {{-- <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" role="button" href="/register">Register</a></p>
               --}}
        
               <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;border-radius:10px"><i class="fas fa-sign-in-alt"></i> Login</button>
               <div id="id01" class="modal">
  
                <form class="modal-content animate" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                  <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="../storage/other_images/user.png" alt="Avatar" class="avatar">
                  </div>
              
                  <div class="container">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email"><b>E-mail Address</b></label>
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password"><b>Password</b></label>
                        <input id="password" type="password" class="form-control" name="password" required>
                        @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    
                    </div>
                      
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Login</button>
                    
                  </div>
                  
                    



              
                  <div class="container" style="background-color:#f1f1f1">
                    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn"><i class="fas fa-times-circle"></i> Cancel</button>
                    <span class="psw"><i class="fas fa-plus"></i> Need <a href="/register">an account?</a></span>
                  </div>
                </form>
              </div>
            </div> 
        </div>      
        @endif    
    
        
    
@endsection
