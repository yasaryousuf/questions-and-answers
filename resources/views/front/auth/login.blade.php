@extends('front.layouts.master')
@section('body')


  <!-- =-=-=-=-=-=-= Main Area =-=-=-=-=-=-= -->
  <div class="main-content-area">

    <!-- =-=-=-=-=-=-= Page Breadcrumb =-=-=-=-=-=-= -->
    <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-7 co-xs-12 text-left">
            <h1>Sign In To Your Account</h1>
          </div>
          <!-- end col -->
          <div class="col-md-6 col-sm-5 co-xs-12 text-right">
            <div class="bread">
              <ol class="breadcrumb">
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Pages</a>
                </li>
                <li class="active">Sign In</li>
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

    <!-- =-=-=-=-=-=-= Login Form =-=-=-=-=-=-= -->
    <section class="section-padding-80 white" id="login">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">

            <div class="box-panel">

              <!-- buttons top -->
              <a href="#" class="btn btn-default facebook"><i class="fa fa-facebook icons"></i> Sign In with Facebook</a>
              <a href="#" class="btn btn-default google"><i class="fa fa-google-plus icons"></i> Sign In with Google</a>
              <!-- end buttons top -->

              <p class="text-center margin-top-10"><span class="span-line">OR</span>
              </p>

              <!-- form login -->
                <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                  <label>Email</label>
                  <input type="email" placeholder="Your Email" class="form-control" name="email">
                  @if ($errors->has('email'))
                      <span class="text-danger" role="alert">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif                  
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                  <label>Password</label>
                  <input type="password" placeholder="Your Password" class="form-control" name="password">
                  @if ($errors->has('password'))
                      <span class="text-danger" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif 
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="checkbox flat-checkbox">
                        <label>
                          <input type="checkbox">
                          <span class="fa fa-check"></span> Remember me?
                        </label>
                      </div>
                    </div>
                    <div class="col-xs-6 text-right">
                      <p class="help-block"><a data-toggle="modal" href="{{ route('password.request') }}">Forgot password?</a>
                      </p>
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary btn-lg btn-block">Log In</button>

              </form>
              <!-- form login -->

            </div>
          </div>

          <div class="clearfix"></div>
        </div>
      </div>
      <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Login Form   End =-=-=-=-=-=-= -->


  </div>
  <!-- =-=-=-=-=-=-= Main Area End =-=-=-=-=-=-= -->  
@endsection