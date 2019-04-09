@extends('front.layouts.master')
@section('body')
  <div class="main-content-area">

    <!-- =-=-=-=-=-=-= Page Breadcrumb =-=-=-=-=-=-= -->
    <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-7 co-xs-12 text-left">
            <h1>Post Your Question</h1>
          </div>
          <!-- end col -->
          <div class="col-md-6 col-sm-5 co-xs-12 text-right">
            <div class="bread">
              <ol class="breadcrumb">
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Pages</a>
                </li>
                <li class="active">Post Question</li>
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

    <!-- =-=-=-=-=-=-= Post Question  =-=-=-=-=-=-= -->
    <section class="section-padding-80 white" id="post-question">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-8 ">

            <div class="box-panel">

              <h2>Post Your Question</h2>
              <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. </p>
              <hr>
              <!-- form login -->

                @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif              
                <form method="POST" action="{{ route('question.store') }}">
                @csrf
                <div class="form-group">
                  <label>Question Title</label>
                  <input type="text" placeholder="Bootstrap Not Working" class="form-control" name="title">
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select class="questions-category form-control">
                    <option value="0">All Categories</option>
                    <option value="36">Php</option>
                    <option value="37">Html</option>
                    <option value="42">Bootstrap</option>
                    <option value="43">Wordpress</option>
                    <option value="44">Laravel</option>
                    <option value="45">Plugins</option>
                    <option value="46">Routes</option>
                    <option value="47">Css</option>
                    <option value="48">Responsive</option>
                    <option value="38">File Upload</option>
                    <option value="39">Ajax</option>
                    <option value="40">Jquery</option>
                    <option value="41">Featured</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Tags</label>

                  <input type="text" id="tags" value="Php,Laravel,Bootstrap" class="form-control" data-role="tagsinput">
                </div>

                <div class="form-group">
                  <label>Question Detials</label>
                  <textarea cols="12" rows="12" placeholder="Post Your Question Details Here....." id="message" name="content" class="form-control"></textarea>
                </div>

                <button class="btn btn-primary pull-right" type="submit">Publish Your Question</button>

              </form>
              <!-- form login -->

            </div>
          </div>

          <!-- Blog Right Sidebar -->
          <div class="col-sm-12 col-xs-12 col-md-4">

            <!-- sidebar -->
            <div class="side-bar">

              <!-- widget -->
              <div class="widget">
                <div class="recent-comments">
                  <h2>Hot Questions</h2>
                  <hr class="widget-separator no-margin">
                  <ul>
                    <li><a href="#">Twitter Bootsrap 3.0 - tabs-left not working anymore?</a>
                    </li>
                    <li><a href="#">Changing the color on my tabbed left bootstrap3 tabs</a>
                    </li>
                    <li><a href="#">How to create tabs on the left in bootstrap.js v3.0.0? </a>
                    </li>
                    <li><a href="#">A Repository class - would you use it to handle multi records? </a>
                    </li>

                    <li><a href="#">post data from html form to php script and return result to ajax/js/jquery </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- widget -->

              <!-- widget -->
              <div class="widget">
                <div class="latest-news">
                  <h2>Latest News</h2>
                  <hr class="widget-separator no-margin">

                  <div class="news-post">
                    <div class="post">
                      <figure class="post-thumb"><img alt="" src="images/blog/small-1.png">
                      </figure>
                      <h4><a href="#">Differentiate Yourself And Attract More Attention </a></h4>
                      <div class="post-info">1 hour ago</div>
                    </div>

                    <div class="post">
                      <figure class="post-thumb"><img alt="" src="images/blog/small-2.png">
                      </figure>
                      <h4><a href="#">Differentiate Yourself And Attract More Attention </a></h4>
                      <div class="post-info">1 hour ago</div>
                    </div>

                    <div class="post">
                      <figure class="post-thumb"><img alt="" src="images/blog/small-3.png">
                      </figure>
                      <h4><a href="#">Differentiate Yourself And Attract More Attention </a></h4>
                      <div class="post-info">1 hour ago</div>
                    </div>

                  </div>

                </div>
              </div>
              <!-- widget end -->

            </div>
            <!-- sidebar end -->

          </div>
          <!-- Blog Right Sidebar End -->
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Post QuestionEnd =-=-=-=-=-=-= -->


  </div>
@endsection