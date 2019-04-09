@extends('front.layouts.master')
@section('body')


  <!-- =-=-=-=-=-=-= Main Area =-=-=-=-=-=-= -->
  <div class="main-content-area">

    <!-- =-=-=-=-=-=-= Page Breadcrumb =-=-=-=-=-=-= -->
    <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-7 co-xs-12 text-left">
            <h1>Create Account</h1>
          </div>
          <!-- end col -->
          <div class="col-md-6 col-sm-5 co-xs-12 text-right">
            <div class="bread">
              <ol class="breadcrumb">
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Pages</a>
                </li>
                <li class="active">SIgn Up</li>
              </ol>
            </div>
            <!-- end bread -->
          </div>
          <!-- end col -->
        </div>
        <!-- end row -->
      </div>
      <!-- end container -->
    </section>

    <!-- =-=-=-=-=-=-= Page Breadcrumb End =-=-=-=-=-=-= -->

    <!-- =-=-=-=-=-=-= Register Form =-=-=-=-=-=-= -->
    <section class="section-padding-80 white" id="register">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3">

            <div class="box-panel">

              <!-- buttons top -->
              <a href="#" class="btn btn-default facebook"><i class="fa fa-facebook icons"></i> Sign Up with Facebook</a>
              <a href="#" class="btn btn-default google"><i class="fa fa-google-plus icons"></i> Sign Up with Google</a>
              <!-- end buttons top -->

              <p class="text-center margin-top-10"><span class="span-line">OR</span>
              </p>

              <!-- form login -->
              <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" placeholder="Your Full Name" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                
                  @if ($errors->has('name'))
                      <span class="text-danger" role="alert">
                          <strong>{{ $errors->first('name') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" placeholder="Your Email" class="form-control" name="email" value="{{ old('email') }}" required>
                
                  @if ($errors->has('email'))
                      <span class="text-danger" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" placeholder="Your Password" class="form-control" name="password" required>
                
                  @if ($errors->has('password'))
                      <span class="text-danger" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" placeholder="Verify Your Password" class="form-control" name="password_confirmation" required>
                </div>
                <div class="form-group">
                  <div class="row">

                    <div class="col-xs-12 text-right">
                      <p class="help-block"><a data-toggle="modal" href="{{url('login')}}">Already Register Sing In</a>
                      </p>
                    </div>
                  </div>
                </div>

                <button class="btn btn-primary btn-lg btn-block">Create Account</button>

              </form>
              <!-- form login -->

            </div>
          </div>

          <div class="clearfix"></div>
        </div>
      </div>
      <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Register Form End =-=-=-=-=-=-= -->

  </div>
  <!-- =-=-=-=-=-=-= Main Area End =-=-=-=-=-=-= -->  
@endsection