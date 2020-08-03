
<!DOCTYPE html>
    <html lang="en">
      <head>  

        @include('admin.inc.login-head')
        <title>Admin Password Reset</title> 

      </head>

      <body>
        
          <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

          <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
            <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Stocks <span class="tx-info tx-normal">Admin</span></div>
            <div class="tx-center mg-b-60">Reset Admin Password</div>
            
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            
            <form action="{{ route('admin.password.email') }}" method="post">
                @csrf
                <div class="form-group">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div><!-- form-group -->

                <button type="submit" style="cursor: pointer;" class="btn btn-info btn-block">Send password reset link</button>
            </form>

            <!-- <div class="mg-t-60 tx-center">Not yet a member? <a href="page-signup.html" class="tx-info">Sign Up</a></div> -->
          </div><!-- login-wrapper -->
        </div><!-- d-flex -->
        
        @include('admin.inc.login-footer')

      </body>
    </html>
