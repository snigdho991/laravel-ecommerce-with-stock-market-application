@extends('layouts.frontend')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

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

            @error('password')
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
            
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">
                
                <label for="email"> E-Mail Address </label>                   
                <input type="email" class="input @error('email') is-invalid @enderror" value="{{ $email ?? old('email') }}" name="email" id="email" autocomplete="email" placeholder="Email" autofocus> 

                <label for="Password"> New Password </label>                   
                <input type="password" class="input @error('password') is-invalid @enderror" name="password" id="password" autocomplete="password" placeholder="Password" autofocus>  

                <label for="Password"> Confirm Password </label>                   
                <input type="password" class="input" name="password_confirmation" id="password-confirm" autocomplete="new-password" placeholder="Re-type Password" autofocus>  

                <button type="submit" class="button">Reset Password</button>
                 
            </form>
        </div>

    </div>
@endsection
