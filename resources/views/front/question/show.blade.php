@extends('front.layouts.master')
@section('body')
  <div class="main-content-area">

    <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-7 co-xs-12 text-left">
            <h1>Question Detial</h1>
          </div>
          <div class="col-md-6 col-sm-5 co-xs-12 text-right">
            <div class="bread">
              <ol class="breadcrumb">
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Pages</a>
                </li>
                <li class="active">Question</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="section-padding-80 white question-details">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
            <div class="listing-grid ">
              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                  <h3><a  href="#"> {{$question->title}} </a></h3>
                  <div class="listing-meta"> <span><i class="fa fa-clock-o" aria-hidden="true"></i>{{$question->created_at}}</span> <span><i class="fa fa fa-eye" aria-hidden="true"></i> 750 Views</span> </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                  {!!$question->content!!}
                  <p></p>
                  <div class="tagcloud"> 
                      @if ($question->tags)
                        @foreach ($question->tags as $tag)
                          <a href="#">{{$tag->title}}</a> 
                        @endforeach
                      @endif
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>
            <div class="thread-reply">
              <h2>Thread Reply </h2>
              @foreach ($question->comments as $comment)
              <div class="media-block card-box @if($comment->parent_id == null) ribbon-content @endif " @if($comment->parent_id != null) style="margin-left:40px;" @endif>
                <div class="ribbon base"><span>Correct Answer</span>
                </div>

                <div class="media-left">
                  <a data-toggle="tooltip" data-placement="bottom" data-original-title="Martina Jaz" href="#">
                    <img class="img-sm" alt="Profile Picture" src="images/authors/9.jpg">

                  </a>

                </div>
                <div class="media-body">
                  <div class="mar-btm">
                    <h4>
                      <a href="#" class="btn-link text-semibold media-heading box-inline">
                        {{$comment->user->name}}
                      </a>
                    </h4>
                    <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 11 min ago</p>
                  </div>
                  {{$comment->content}}
                  <div class="pad-ver pull-right">
                    <a class="btn btn-sm btn-default btn-hover-success" data-toggle="tooltip" data-placement="bottom" data-original-title="Like This Answer" href="#"><i class="fa fa-thumbs-up"></i></a>
                    <a class="btn btn-sm btn-default btn-hover-danger" href="#" data-original-title="Spam" data-placement="bottom" data-toggle="tooltip"><i class="fa fa-thumbs-down"></i></a>
                  </div>
                </div>
                <div class="clearfix"></div>
                <button class="btn btn-primary reply_answer_show" type="button">Reply to this answer</button>
              <div class="reply_answer_section" style="display: none">
              <form action="/question/{{$question->id}}/comment" method="POST">
                @csrf
                <input type="hidden" name="parent_id" value="{{$comment->id}}">
                <div class="form-group">
                  <label>Reply to this answer</label>
                  <textarea cols="12" rows="3" class="form-control" placeholder="I Have The Aswert" name="content"></textarea>
                </div>

                <button class="btn btn-primary btn-lg btn-block reply_answer_submit" type="submit">Post Your Answer</button>

              </form>

              </div>
              </div>
                  
              @endforeach

              <div class="media-block card-box ">

                <div class="media-left">
                  <a href="#">
                    <img class="img-sm" alt="Profile Picture" src="images/authors/6.jpg">

                  </a>

                </div>
                <div class="media-body">
                  <div class="mar-btm">
                    <h4><a href="#" class="btn-link text-semibold media-heading box-inline">John Doe</a></h4>
                    <p class="text-muted text-sm"><i class="fa fa-mobile fa-lg"></i> - From Mobile - 40 min ago</p>
                  </div>
                  <p>I think this is what you are looking for. You need to remove the <code>float: left</code> from the inner nav to center it and make it a inline-block.</p>
                  <pre class="brush: php syntaxhighlight">
$(function(){
    $('.block').affix();
})
                                </pre>
                  <div class="pad-ver pull-right">

                    <a class="btn btn-sm btn-default btn-hover-success" data-toggle="tooltip" data-placement="bottom" data-original-title="Like This Answer" href="#"><i class="fa fa-thumbs-up"></i></a>
                    <a class="btn btn-sm btn-default btn-hover-danger" href="#" data-original-title="Spam" data-placement="bottom" data-toggle="tooltip"><i class="fa fa-thumbs-down"></i></a>

                    <a class="btn btn-sm btn-default btn-hover-primary" href="#">Mark As Correct</a>
                  </div>

                </div>
              </div>
              <div class="clearfix"></div>

              <form action="/questions/{{$question->id}}/comment" method="POST">
                @csrf
                <div class="form-group">
                  <label>Post Your Answer</label>
                  <textarea cols="12" rows="7" class="form-control" placeholder="I Have The Aswert" name="content"></textarea>
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit">Post Your Answer</button>

              </form>

            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12 clearfix">
            <div class="side-bar">
              <div class="widget">
                <div class="widget-image widget-image-sm"> <img alt="image" src="images/light-background.jpg">
                  <div class="widget-image-content text-center"> <img class="img-thumbnail" alt="avatar" src="images/authors/12.jpg">
                    <h2 class="widget-heading text-light"><strong>John Doe</strong></h2>
                    <h4 class="widget-heading text-light-op"><em>Graphic Designer</em></h4>
                  </div>
                </div>
                <div class="widget-content widget-content-full border-bottom">
                  <div class="row text-center">
                    <div class="col-xs-6 push-inner-top-bottom border-right">
                      <h3 class="widget-heading"><i class=" icon-trophy push"></i> <br>
                                            <small><strong>34,157</strong> Experience</small></h3>
                    </div>
                    <div class="col-xs-6 push-inner-top-bottom">
                      <h3 class="widget-heading"><i class=" icon-profile-male themed-color-social push"></i> <br>
                                            <small><strong>58.6k</strong> Followers</small></h3>
                    </div>
                  </div>
                </div>
                <div class="widget-content border-bottom">
                  <h4>About</h4>
                  <p>Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit.</p>
                  <p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum.</p>
                </div>
                <div class="widget-content">
                  <div class="btn-group"> <a title="" data-toggle="tooltip" class="btn btn-default" href="javascript:void(0)" data-original-title="Facebook"><i class="fa fa-facebook fa-fw"></i></a> <a title="" data-toggle="tooltip" class="btn btn-default" href="javascript:void(0)" data-original-title="Twitter"><i class="fa fa-twitter fa-fw"></i></a> <a title="" data-toggle="tooltip" class="btn btn-default" href="javascript:void(0)" data-original-title="Google Plus"><i class="fa fa-google-plus fa-fw"></i></a> <a title="" data-toggle="tooltip" class="btn btn-default" href="javascript:void(0)" data-original-title="Pinterest"><i class="fa fa-pinterest fa-fw"></i></a> <a title="" data-toggle="tooltip" class="btn btn-default" href="javascript:void(0)" data-original-title="Dribbble"><i class="fa fa-dribbble fa-fw"></i></a> </div>
                </div>
              </div>
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
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection


@section('script')
    <script>
      $(document).ready(function() {
        $('.reply_answer_show').click(function () {
          $(this).hide();
          $(this).parents('.card-box').find('.reply_answer_section').toggle();
        })
      });
    </script>
    
@endsection