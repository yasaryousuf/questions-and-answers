@extends('front.layouts.master')
@section('body')
  <div class="main-content-area">

    <!-- =-=-=-=-=-=-= Page Breadcrumb =-=-=-=-=-=-= -->
    <section class="page-title">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-7 col-xs-12 text-left">
            <h1>John Doe</h1>
          </div>
          <!-- end col -->
          <div class="col-md-6 col-sm-5 col-xs-12 text-right">
            <div class="bread">
              <ol class="breadcrumb">
                <li><a href="#">Home</a>
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
    
     <!-- =-=-=-=-=-=-= User TimeLine =-=-=-=-=-=-= -->

    <section class="section-padding-80">

      <div class="container">
        <!-- Row -->
        <div class="row">

          <div class="col-md-12">

            <div class="timeline-container">
              <ul>
                <li>
                  <div class="timeline">
                    <div class="user-timeline">
                      <span><img alt="" src="images/authors/13.jpg"></span>
                    </div>
                    <div class="timeline-detail">
                      <div class="timeline-head">
                        <h3><a href="#">John Doe</a><span> left a reply on</span> <a href="#">How does Laravel's auth system work internally?</a><span>2 min ago</span></h3>
                        <div class="social-share">
                          <a title=""><i class="fa fa-share-alt"></i></a>
                          <ul class="social-btns">
                            <li><a href="#" data-placement="left" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#" data-placement="left" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a href="#" data-placement="left" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="timeline-content">
                        <p>Set it as the font <a title="" href="#">John Doe</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. </p>
                        <pre class="brush: php;">
public function popular($parent = null,$child = null)
  {     
    $products =  Product::with('subcategory')->with('subchild')->paginate(16)->sortByDesc('view_cache');
    return view('Frontend.listing.popular')->with(['products'=>$products]);
   }
   
   
   namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\SomeEvent' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    protected $subscribe = [
        'App\Listeners\UserEventListener',
    ];

    /**
     * Register any other events for your application.
     *
     * @param  \Illuminate\Contracts\Events\Dispatcher  $events
     * @return void
     */
    public function boot(DispatcherContract $events)
    {
        parent::boot($events);
    }
}
																		 </pre>

                      </div>
                    </div>
                  </div>
                </li>
                <li>
                  <div class="timeline">
                    <div class="user-timeline">
                      <span><img alt="" src="images/authors/13.jpg"></span>
                    </div>
                    <div class="timeline-detail">
                      <div class="timeline-head">
                        <h3><a href="#">John Doe</a><span> left a reply on</span> <a href="#">Bootstrap fixed navbar navbar-brand add to logo</a><span>2 min ago</span></h3>
                        <div class="social-share">
                          <a title=""><i class="fa fa-share-alt"></i></a>
                          <ul class="social-btns">
                            <li><a href="#" data-placement="left" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#" data-placement="left" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a href="#" data-placement="left" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="timeline-content">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                        <pre class="brush: php;">
<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img alt="" src="assets/img/logo.html"/></a>
    </div>
    <div class="navbar-collapse collapse">

      <ul class="nav navbar-nav navbar-right">
       <li class="last"><a href="http://templates.scriptsbundle.com/knowledge/navbar/"><img  alt="" src="assets/img/home.html"/></a></li>
        <li><a href="http://templates.scriptsbundle.com/knowledge/navbar/">Company</a></li>
        <li><a href="http://templates.scriptsbundle.com/knowledge/navbar-static-top/">Experience</a></li>
        <li><a href="index-2.html">Services</a></li>
        <li><a href="index-2.html">Rates</a></li>
        <li><a href="index-2.html">Community</a></li>
        <li><a href="index-2.html">Remote</a></li>
        <li class="active"><a href="index-2.html">Contact</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</div>
																		 </pre>

                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="timeline">
                    <div class="user-timeline">
                      <span><img alt="" src="images/authors/13.jpg"></span>
                    </div>
                    <div class="timeline-detail">
                      <div class="timeline-head">
                        <h3><a href="#">John Doe</a><span> started a new conversation</span> <a href="#">Codeigniter Severity warning</a><span>2 min ago</span></h3>
                        <div class="social-share">
                          <a title=""><i class="fa fa-share-alt"></i></a>
                          <ul class="social-btns">
                            <li><a href="#" data-placement="left" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#" data-placement="left" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a href="#" data-placement="left" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="timeline-content">
                        <p>I am trying to use file_get_contents However that gives me error .</p>
                        <pre class="brush: php;">
<!-- Fixed navbar -->
A PHP Error was encountered

Severity: Warning

Message: file_get_contents(https://api.telegram.org/bot [number token]/getUpdates):

Filename: controllers/lifeChange.php


Line Number: 19

Backtrace:

File: C:\OpenServer\domains\localhost\admin\application\controllers\lifeChange.php
Line: 19
Function: file_get_contents

File: C:\OpenServer\domains\localhost\admin\index.php
Line: 315
Function: require_once
																		 </pre>

                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="timeline">
                    <div class="user-timeline">
                      <span><img alt="" src="images/authors/13.jpg"></span>
                    </div>
                    <div class="timeline-detail">
                      <div class="timeline-head">
                        <h3><a href="#">John Doe</a><span> started a new conversation</span> <a href="#">Codeigniter Severity warning</a><span>2 min ago</span></h3>
                        <div class="social-share">
                          <a title=""><i class="fa fa-share-alt"></i></a>
                          <ul class="social-btns">
                            <li><a href="#" data-placement="left" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#" data-placement="left" data-toggle="tooltip" title="Google"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li><a href="#" data-placement="left" data-toggle="tooltip" title="Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="timeline-content">
                        <p>
                          I've created a meta field 'priority_priority' so that I can sort post based on how many times they have been visited..least visited post gets more priority. so whenever a visitor visits the post the priority variable is decremented.but I want priority to be decremented only on the first visit from the same user so am using cookies but the following code in not working the priority is always decremented and </p>
                        <pre class="brush: php;">
 var_dump($_COOKIE['visitor'.$post_id])
</pre>
                        <p>always gives NULL</p>

                        <pre class="brush: php;">
$post_id = get_the_ID();
       $priority = get_post_meta($post_id,'priority_priority',true); 
       if($priority>1)
       {     
          if(!isset($_COOKIE['visitor'.$post_id]))
          {        
               $bool=setcookie('visitor'.$post_id,$post_id,DAY_IN_SECONDS,'/');
               if(count($_COOKIE) > 0)
               {
                    $priority = $priority-1;
                    update_post_meta($post_id,'priority_priority',$priority);
               }
          }

       }
 get_header();
 ?>

<p>How can i fix it ? Help Needed</p>

</pre>

                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>

            <!-- Pagination View More -->
            <div class="text-center clearfix">
              <button class="btn btn-primary btn-lg">View All Activities</button>
            </div>
            <!-- Pagination View More End -->

          </div>

        </div>

      </div>

    </section>
    <!-- =-=-=-=-=-=-= User TimeLine End =-=-=-=-=-=-= -->


  </div>    
@endsection