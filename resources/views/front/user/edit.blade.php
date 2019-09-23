@extends('front.layouts.master')
@section('body')
  <!-- =-=-=-=-=-=-= Main Area =-=-=-=-=-=-= -->
  <div class="main-content-area">

    <!-- =-=-=-=-=-=-= Page Breadcrumb =-=-=-=-=-=-= -->
    <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-7 col-xs-12 text-left">
          <h1>{{$user->name}}</h1>
          </div>
          <!-- end col -->
          <div class="col-md-6 col-sm-5 col-xs-12 text-right">
            <div class="bread">
              <ol class="breadcrumb">
                <li><a href="/">Home</a>
                </li>
                <li><a href="#">Pages</a>
                </li>
                <li class="active">Profile</li>
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

    <!-- =-=-=-=-=-=-= User Profile =-=-=-=-=-=-= -->
    <section id="user-profile" class="user-profile parallex">
      <div class="container">
        <!-- Row -->
        <div class="row">

          <div class="col-md-12 col-xs-12 col-sm-12">
            <div class="profile-sec ">
              <div class="profile-head">
                <div class="col-md-6 col-xs-12 col-sm-6 no-padding">
                  <div class="profile-avatar">
                    <span><img class="img-responsive img-circle" alt="" src="images/authors/author-large.jpg"></span>
                    <div class="profile-name">
                      <h3>User Profile</h3>
                      <i>Creative Graphic Designer</i>
                      <ul class="social-btns">
                        <li><a href="#" title=""><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="#" title=""><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li><a href="#" title=""><i class="fa fa-twitter"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-xs-12 col-sm-6 no-padding">
                  <ul class="profile-count">
                    <li>171<i>Followers</i>
                    </li>
                    <li>13,725<i>Experience</i>
                    </li>
                    <li>120<i>Questions</i>
                    </li>
                  </ul>
                  <ul class="profile-connect">
                    <li><a title="" href="#">Follow</a>
                    </li>
                    <li><a title="" href="#">Hire Me</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Profile Sec -->
          </div>

        </div>
        <!-- Row End -->
      </div>
      <!-- end container -->
    </section>

    <!-- =-=-=-=-=-=-= User Profile end =-=-=-=-=-=-= -->
    
 <!-- =-=-=-=-=-=-= User Form Settings =-=-=-=-=-=-= -->
    <section class="section-padding-80" id="login">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-4">

            <div class="box-panel">

              <form>
                <div class="form-group">
                  <label>Upload Image</label>
                  <div class="input-group">
                    <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Browse… <input type="file" id="imgInp">
                </span>
                    </span>
                    <input type="text" class="form-control" readonly>
                  </div>
                  <img id="img-upload" src="images/1.jpg" alt="" />
                </div>

                <button class="btn btn-primary btn-lg">Change Image</button>

              </form>

            </div>
          </div>

          <div class="col-md-8">

            <div class="box-panel">

              <!-- form login -->
              <form action="/user" method="POST">
                <div class="form-group">
                  <label>User Name</label>
                  <input type="text" placeholder="John Doe" class="form-control" name="name">
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" placeholder="Your Email" class="form-control" name="email">
                </div>
                <button class="btn btn-primary btn-lg">Update My Profile</button>

              </form>
              <!-- form login -->

            </div>
            <div style="margin-top: 20px"></div>
            <div class="box-panel">

              <!-- form login -->
              <form action="/user" method="POST">
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" placeholder="Your Password" class="form-control" name="password">
                </div>
                <div class="form-group">
                  <label>Confirm Password</label>
                  <input type="password" placeholder="Your Password" class="form-control" name="password_confirm">
                </div>
                <button class="btn btn-primary btn-lg">Update My Password</button>

              </form>
              <!-- form login -->

            </div>
          </div>

          <div class="clearfix"></div>
        </div>
      </div>
      <!-- end container -->
    </section>
 <!-- =-=-=-=-=-=-= User Form Settings End =-=-=-=-=-=-= -->
 

  </div>
  <!-- =-=-=-=-=-=-= Main Area End =-=-=-=-=-=-= -->    
@endsection