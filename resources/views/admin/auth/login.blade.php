
<!DOCTYPE html>
    <html lang="en">
      <head>  

        @include('admin.inc.login-head')
        <title>Admin Login</title> 

      </head>

      <body>
        
          <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

          <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
            <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">Stocks <span class="tx-info tx-normal">Admin</span></div>
            <div class="tx-center mg-b-60">Login here to continue</div>
            
            <form action="{{ route('admin.login.submit') }}" method="post">
                @csrf
                <div class="form-group">
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div><!-- form-group -->

                <div class="form-group">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter your password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  <a href="{{ route('admin.password.request') }}" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
                </div><!-- form-group -->

                <button type="submit" style="cursor: pointer;" class="btn btn-info btn-block">Sign In</button>
            </form>

            <!-- <div class="mg-t-60 tx-center">Not yet a member? <a href="page-signup.html" class="tx-info">Sign Up</a></div> -->
          </div><!-- login-wrapper -->
        </div><!-- d-flex -->
        
        @include('admin.inc.login-footer')

      </body>
    </html>
