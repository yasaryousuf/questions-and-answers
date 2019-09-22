@extends('front.layouts.master')
@section('style')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
@endsection
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

                @include('front.others.errorSuccessMessage')
                <form method="POST" action="{{ route('questions.update', [$question->slug]) }}" name="ask-question">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label>Question Title</label>
                <input type="text" placeholder="Bootstrap Not Working" class="form-control" name="title" value="{{$question->title}}">
                </div>

                <div class="form-group">
                  <label>Tags</label>
                    <?php    
                    $tags = '';
                    if (count($question->tags))   {
                        $tags = $question->tags->map(function($v){return $v->title;})->implode(',');

                    } ?>
                  <input type="text" id="tags" value="<?= $tags; ?>" class="form-control" data-role="tagsinput" name="tags">
                </div>

                <div class="form-group">
                  <label>Question Detials</label>
                  <textarea id="summernote" cols="12" rows="12" placeholder="Post Your Question Details Here....." id="message" name="content" class="form-control">
                      {!!$question->content!!}
                  </textarea>
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
                      <figure class="post-thumb"><img alt="" src="/front/images/blog/small-1.png">
                      </figure>
                      <h4><a href="#">Differentiate Yourself And Attract More Attention </a></h4>
                      <div class="post-info">1 hour ago</div>
                    </div>

                    <div class="post">
                      <figure class="post-thumb"><img alt="" src="/front/images/blog/small-2.png">
                      </figure>
                      <h4><a href="#">Differentiate Yourself And Attract More Attention </a></h4>
                      <div class="post-info">1 hour ago</div>
                    </div>

                    <div class="post">
                      <figure class="post-thumb"><img alt="" src="/front/images/blog/small-3.png">
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

@section('script')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
      $(document).ready(function() {
        const editor = $('#summernote');
        const form = $('[name="ask-question"]');

        editor.summernote({
          toolbar: [
            // [groupName, [list of button]]
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']]
          ],
          height: 300,                 // set editor height
          minHeight: null,             // set minimum height of editor
          maxHeight: null,             // set maximum height of editor
          focus: true                  // set focus to editable area after initializing summernote
        });

      });
    </script>
@endsection