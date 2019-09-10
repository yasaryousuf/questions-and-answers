@extends('front.layouts.master')

@section('body')
  <div class="full-section search-section-listing">
    <div class="search-area container">
      <h3 class="search-title">Have a Question?</h3>
      <p class="search-tag-line">If you have any question you can ask below or enter what you are looking for!</p>
      <form autocomplete="off" method="get" class="search-form clearfix" id="search-form">
        <input type="text" title="* Please enter a search term!" placeholder="Type your search terms here" class="search-term " autocomplete="off">
        <input type="submit" value="Search" class="search-btn">
      </form>
    </div>
  </div>
  <!-- =-=-=-=-=-=-= Search Bar END =-=-=-=-=-=-= -->
  <!-- =-=-=-=-=-=-= Main Area =-=-=-=-=-=-= -->
  <div class="main-content-area">
    <!-- =-=-=-=-=-=-= Page Breadcrumb =-=-=-=-=-=-= -->
    <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-7 co-xs-12 text-left">
            <h1>All Questions</h1>
          </div>
          <!-- end col -->
          <div class="col-md-6 col-sm-5 co-xs-12 text-right">
            <div class="bread">
              <ol class="breadcrumb">
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Pages</a>
                </li>
                <li class="active">Listing</li>
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
    <!-- =-=-=-=-=-=-= Latest Questions  =-=-=-=-=-=-= -->
    <section class="section-padding-80 white" id="questions">
      <div class="container">
        <!-- Row -->
        <div class="row">
          <div class="col-md-8 col-sm-12">
            <div class="listing">
              <!-- Question Area Panel -->
              <div class="listing-area">

                @foreach ($questions as $question)
                <!-- Question Listing -->
                <div class="listing-grid ">
                  <div class="row">
                    <div class="col-md-2 col-sm-2 col-xs-12 hidden-xs">
                      <a data-toggle="tooltip" data-placement="bottom" data-original-title="{{$question->user['name']}}" href="#">
                      <img alt="" class="correct img-responsive center-block" src="{{asset('/image/avatar/'.$question->user['avatar'])}}">
                      </a>
                      {{-- <span class="tick"><i class="fa fa-check" aria-hidden="true"></i></span> --}}
                    </div>
                    <div class="col-md-7 col-sm-8  col-xs-12">
                        <h3>
                            <a href="#"> 
                                {{$question->title}}	
                            </a>
                        </h3>
                      <div class="listing-meta">
                        <span><i class="fa fa-clock-o" aria-hidden="true"></i>{{$question->created_at}}</span>
                        <span><i class="fa fa fa-eye" aria-hidden="true"></i> 750 Views</span>

                      </div>

                    </div>
                    <div class="col-md-3 col-sm-2 col-xs-12">
                      <ul class="question-statistic">

                        <li class="active">
                          <a data-toggle="tooltip" data-placement="bottom" data-original-title="Answers"><span>2</span></a>
                        </li>
                        <li>
                          <a data-toggle="tooltip" data-placement="bottom" data-original-title="Votes"><span>0</span></a>
                        </li>
                      </ul>
                    </div>

                    <div class="col-md-10 col-sm-10  col-xs-12">
                      <p>
                        {!!$question->content!!}
                      </p>
                      <div class="pull-right tagcloud">
                        <a href="#">Php</a>
                        <a href="#">recursive</a>
                        <a href="#">error</a>
                      </div>
                    </div>

                  </div>
                </div>
                <!-- Question Listing End -->
                    
                @endforeach



                <!-- Pagination View More -->
                <div class="text-center clearfix">
                  <ul class="pagination ">
                    <li>
                      <a aria-label="Previous" href="#"> <span aria-hidden="true">&lt;</span> </a>
                    </li>
                    <li><a href="#">1</a>
                    </li>
                    <li class="active"><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li>
                      <a aria-label="Next" href="#"> <span aria-hidden="true">&gt;</span> </a>
                    </li>
                  </ul>
                </div>
                <!-- Pagination View More End -->

              </div>

              <!-- Question Area Panel End -->
            </div>
          </div>
          <div class="col-md-4 col-sm-12">
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
                    <li><a href="#">Bootstrap horizontal form with left floated side tabs</a>
                    </li>
                    <li><a href="#">A Repository class - would you use it to handle multi records? </a>
                    </li>
                    <li><a href="#">Realurl generating unwanted language codes inside url </a>
                    </li>
                    <li><a href="#">post data from html form to php script and return result to ajax/js/jquery </a>
                    </li>
                  </ul>
                </div>
              </div>
              <!-- widget -->
              <!-- widget -->
              <div class="widget">
                <h2>Top Authors</h2>
                <hr class="widget-separator no-margin">
                <div class="media-group">
                  <div class="media-group-item">
                    <div class="media">
                      <div class="media-left">
                        <div class="avatar avatar-md avatar-circle"> <img alt="" class="" src="images/authors/1.jpg"> </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading"><a href="profile.html">John Doe</a></h5>
                        <small class="media-meta">Software Engineer</small>
                        <div class="points pull-right"><span>Points : </span>9958</div>
                      </div>
                    </div>
                  </div>
                  <!-- .media-group-item -->
                  <div class="media-group-item">
                    <div class="media">
                      <div class="media-left">
                        <div class="avatar avatar-md avatar-circle"> <img alt="" class="" src="images/authors/2.jpg"> </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading"><a href="profile.html">Adam Khaury</a></h5>
                        <small class="media-meta">Web Designer</small>
                        <div class="points pull-right"><span>Points : </span>7910</div>
                      </div>
                    </div>
                  </div>
                  <!-- .media-group-item -->
                  <div class="media-group-item">
                    <div class="media">
                      <div class="media-left">
                        <div class="avatar avatar-md avatar-circle"> <img alt="" class="" src="images/authors/3.jpg"> </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading"><a href="profile.html">John Doe</a></h5>
                        <small class="media-meta">Web Developer</small>
                        <div class="points pull-right"><span>Points : </span>7458</div>
                      </div>
                    </div>
                  </div>
                  <!-- .media-group-item -->
                  <div class="media-group-item">
                    <div class="media">
                      <div class="media-left">
                        <div class="avatar avatar-md avatar-circle"> <img alt="" class="" src="images/authors/4.jpg"> </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading"><a href="profile.html">Sara Smith</a></h5>
                        <small class="media-meta">UI/UX Designer</small>
                        <div class="points pull-right"><span>Points : </span>6458</div>
                      </div>
                    </div>
                  </div>
                  <!-- .media-group-item -->
                  <div class="media-group-item">
                    <div class="media">
                      <div class="media-left">
                        <div class="avatar avatar-md avatar-circle"> <img alt="" class="" src="images/authors/5.jpg"> </div>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading"><a href="profile.html">Dani Smith</a></h5>
                        <small class="media-meta">Teacher Assistant</small>
                        <div class="points pull-right"><span>Points : </span>6115</div>
                      </div>
                    </div>
                  </div>
                  <!-- .media-group-item -->
                </div>
              </div>
              <!-- widget end -->
              <!-- widget -->
              <div class="widget">
                <div class="recent-comments">
                  <h2>Recent Comments</h2>
                  <hr class="widget-separator no-margin">
                  <ul id="recentcomments">
                    <li class="recentcomments"> <span class="comment-author-link">John Doe</span> on <a href="#">bootstrap vs foundation</a> </li>
                    <li class="recentcomments"> <span class="comment-author-link">Emily Copper</span> on <a href="#">how to get data from URL in PHP</a> </li>
                    <li class="recentcomments"> <span class="comment-author-link">Alex Martin</span> on <a href="#">My SQL PHP Multi Layer Drop Down List from Databse</a> </li>
                    <li class="recentcomments"> <span class="comment-author-link">Tina Martin</span> on <a href="#">PHP Multi Layer Drop Down List from Databse</a> </li>
                    <li class="recentcomments"> <span class="comment-author-link">Alex Henz</span> on <a href="#">Can't use custom width with Angular-Slick</a> </li>
                    <li class="recentcomments"> <span class="comment-author-link">Coty Embry</span> on <a href="#">Use Digital Ocean to create node.js server or creating website on Wordpress?</a> </li>
                  </ul>
                </div>
              </div>
              <!-- widget end -->
            </div>
            <!-- sidebar end -->
          </div>
        </div>
        <!-- Row End -->
      </div>
      <!-- end container -->
    </section>
    <!-- =-=-=-=-=-=-= Latest Questions  End =-=-=-=-=-=-= -->
  </div>    
@endsection