<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>FastData</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('AD/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('AD/simple-line-icons/css/simple-line-icons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('AD/css/style.css')}}">
  <!-- endinject -->
  <!-- <link rel="shortcut icon" href="{{asset('AD/images/favicon.png')}}" /> -->
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth login-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            {{-- <div class="auth-form-dark text-left p-5"> --}}
            
                    <form class="pt-5" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">Username</label>

                            <div class="col-md-12">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                 <i class="mdi mdi-account"></i>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="exampleInputPassword1">Password</label>

                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <i class="mdi mdi-eye"></i>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-md-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-rounded btn-dark btn-lg">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link pull-center" href=" {{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
 
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{asset('AD/js/off-canvas.js')}}"></script>
  <script src="{{asset('AD/js/misc.js')}}"></script>
  <!-- endinject -->
</body>

</html>
