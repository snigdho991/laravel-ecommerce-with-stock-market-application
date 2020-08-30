@extends('layouts.frontend')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <div class="form-wrap">
        <div class="tabs">
            <h3 class="login-tab same-style" style="width: 100%;"><a href="" data-toggle="tab">Verify Your Email Address</a></h3>
        </div><!--.tabs-->

        <div class="tabs-content">
            
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    <strong>A fresh verification link has been sent to your email address.</strong>
                </div>
            @endif

            <p class="card-text" style="font-size: 14px;">Before proceeding, please check your email for a verification link. If you did not receive the email then click on the following link.</p>
            
            <form method="POST" action="{{ route('verification.resend') }}">            
                @csrf

                <button type="submit" class="button">Click here to request another</button>
                 
            </form>
        </div>
        
    </div>

@endsection
