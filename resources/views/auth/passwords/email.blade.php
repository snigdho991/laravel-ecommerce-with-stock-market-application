@extends('layouts.frontend')

@section('content')

    <div class="form-wrap">
        <div class="tabs">
            <h3 class="login-tab same-style" style="width: 100%;"><a href="" data-toggle="tab">Reset Password</a></h3>
        </div><!--.tabs-->

        <div class="tabs-content">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <div class="alert alert-danger alert-dismissible fade in">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>{{ $message }}</strong>
                    </div>
                </span>
            @enderror

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    <strong>{{ session('status') }}</strong>
                </div>
            @endif
            
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                
                        <label for="email"> E-Mail Address </label>                   
                        <input type="email" class="input @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" id="email" autocomplete="email" placeholder="Email" autofocus>                                                
                        <button type="submit" class="button">Send Password Reset Link</button>
                 
            </form>
        </div>

    </div>

@endsection
