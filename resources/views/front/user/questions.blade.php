@extends('front.layouts.master')
@section('body')
<!-- =-=-=-=-=-=-= Main Area =-=-=-=-=-=-= -->
<div class="main-content-area"> 

	<!-- =-=-=-=-=-=-= Page Breadcrumb =-=-=-=-=-=-= -->
<section class="page-title">
            <div class="container">
                <div class="row">  
                    <div class="col-md-6 col-sm-7 text-left">
                        <h1>My Questions Panel</h1>
                    </div><!-- end col -->
                    <div class="col-md-6 col-sm-5 text-right">
                        <div class="bread">
                            <ol class="breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li class="active">Profile</li>
                            </ol>
                        </div><!-- end bread -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
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
    
     <!-- =-=-=-=-=-=-= User History =-=-=-=-=-=-= -->
    
    <section class="section-padding-80 white">
    
            <div class="container"> 
            
            <!-- Row -->
            <div class="row">
            
            
            
            <div class="col-md-12 col-xs-12 col-sm-12">
            <!-- Question Listing -->
									<div class="listing-grid">
										<div class="row">
											<div class="col-md-2 col-sm-2 col-xs-12 hidden-xs">
												<a data-toggle="tooltip" data-placement="bottom" data-original-title="Martina Jaz" href="#">
													<img alt="" class="img-responsive center-block" src="images/authors/13.jpg">
												</a>
											</div>
											<div class="col-md-7 col-sm-8  col-xs-12">
												<h3><a  href="#"> Php recursive function not working right</a></h3>
												<div class="listing-meta"> <span><i class="fa fa-clock-o" aria-hidden="true"></i>8 mintes ago</span>  <span><i class="fa fa fa-eye" aria-hidden="true"></i> 750 Views</span> 
												</div>
											</div>
											<div class="col-md-3 col-sm-2 col-xs-12">
												<ul class="question-statistic">
													<li class="active"> <a data-toggle="tooltip" data-placement="bottom" data-original-title="Answers"><span>2</span></a> 
													</li>
													<li> <a data-toggle="tooltip" data-placement="bottom" data-original-title="Votes"><span>0</span></a> 
													</li>
												</ul>
											</div>
											<div class="col-md-10 col-sm-10  col-xs-12">
												<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
												<div class="pull-right tagcloud"> <a href="#">Php</a>  <a href="#">recursive</a>  <a href="#">error</a> 
												</div>
											</div>
										</div>
									</div>
									<!-- Question Listing End -->
									<!-- Question Listing -->
									<div class="listing-grid ">
										<div class="row">
											<div class="col-md-2 col-sm-2 col-xs-12 hidden-xs">
												<a data-toggle="tooltip" data-placement="bottom" data-original-title="James John" href="#">
													<img alt="" class=" correct img-responsive center-block" src="images/authors/13.jpg">
												</a> <span class="tick2"> <i class="fa fa-check" aria-hidden="true"></i> </span> 
											</div>
											<div class="col-md-7 col-sm-8  col-xs-12">
												<h3><a  href="#"> How to retrieve RSS from multiple website</a></h3>
												<div class="listing-meta"> <span><i class="fa fa-clock-o" aria-hidden="true"></i>8 mintes ago</span>  <span><i class="fa fa fa-eye" aria-hidden="true"></i> 750 Views</span> 
												</div>
											</div>
											<div class="col-md-3 col-sm-2 col-xs-12">
												<ul class="question-statistic">
													<li class="active"> <a data-toggle="tooltip" data-placement="bottom" data-original-title="Answers"><span>177</span></a> 
													</li>
													<li> <a data-toggle="tooltip" data-placement="bottom" data-original-title="Votes"><span>2</span></a> 
													</li>
												</ul>
											</div>
											<div class="col-md-10 col-sm-10  col-xs-12">
												<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
												<div class="pull-right tagcloud"> <a href="#">rss-reader</a>  <a href="#">web</a> 
												</div>
											</div>
										</div>
									</div>
									<!-- Question Listing End -->
									<!-- Question Listing -->
									<div class="listing-grid ">
										<div class="row">
											<div class="col-md-2 col-sm-2 col-xs-12 hidden-xs">
												<a data-toggle="tooltip" data-placement="bottom" data-original-title="Jessica" href="#">
													<img alt="" class="correct img-responsive center-block" src="images/authors/13.jpg">
												</a> <span class="tick2"> <i class="fa fa-check" aria-hidden="true"></i> </span> 
											</div>
											<div class="col-md-7 col-sm-8  col-xs-12">
												<h3><a  href="#"> Change navbar color in Twitter Bootstrap 3</a></h3>
												<div class="listing-meta"> <span><i class="fa fa-clock-o" aria-hidden="true"></i>8 mintes ago</span>  <span><i class="fa fa fa-eye" aria-hidden="true"></i> 750 Views</span> 
												</div>
											</div>
											<div class="col-md-3 col-sm-2 col-xs-12">
												<ul class="question-statistic">
													<li class="active"> <a data-toggle="tooltip" data-placement="bottom" data-original-title="Answers"><span>9</span></a> 
													</li>
													<li> <a data-toggle="tooltip" data-placement="bottom" data-original-title="Votes"><span>0</span></a> 
													</li>
												</ul>
											</div>
											<div class="col-md-10 col-sm-10  col-xs-12">
												<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
												<div class="pull-right tagcloud"> <a href="#">bootstrap</a>  <a href="#">navbar</a>  <a href="#">color</a> 
												</div>
											</div>
										</div>
									</div>
									<!-- Question Listing End -->
									<!-- Question Listing -->
									<div class="listing-grid ">
										<div class="row">
											<div class="col-md-2 col-sm-2 col-xs-12 hidden-xs">
												<a data-toggle="tooltip" data-placement="bottom" data-original-title="Muhammad Umair" href="#">
													<img alt="" class=" img-responsive center-block" src="images/authors/13.jpg">
												</a>
											</div>
											<div class="col-md-7 col-sm-8  col-xs-12">
												<h3><a  href="#"> Choosing bootstrap vs material design</a></h3>
												<div class="listing-meta"> <span><i class="fa fa-clock-o" aria-hidden="true"></i>8 mintes ago</span>  <span><i class="fa fa fa-eye" aria-hidden="true"></i> 750 Views</span> 
												</div>
											</div>
											<div class="col-md-3 col-sm-2 col-xs-12">
												<ul class="question-statistic">
													<li class="active"> <a data-toggle="tooltip" data-placement="bottom" data-original-title="Answers"><span>332</span></a> 
													</li>
													<li> <a data-toggle="tooltip" data-placement="bottom" data-original-title="Votes"><span>55</span></a> 
													</li>
												</ul>
											</div>
											<div class="col-md-10 col-sm-10  col-xs-12">
												<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
												<div class="pull-right tagcloud"> <a href="#">bootstrap</a>  <a href="#">material</a> 
												</div>
											</div>
										</div>
									</div>
									<!-- Question Listing End -->
                                    <div class="listing-grid">
										<div class="row">
											<div class="col-md-2 col-sm-2 col-xs-12 hidden-xs">
												<a data-toggle="tooltip" data-placement="bottom" data-original-title="Martina Jaz" href="#">
													<img alt="" class="correct img-responsive center-block" src="images/authors/13.jpg">
												</a> <span class="tick2"> <i class="fa fa-check" aria-hidden="true"></i> </span> 
											</div>
											<div class="col-md-7 col-sm-8  col-xs-12">
												<h3><a  href="#"> Php recursive function not working right</a></h3>
												<div class="listing-meta"> <span><i class="fa fa-clock-o" aria-hidden="true"></i>8 mintes ago</span>  <span><i class="fa fa fa-eye" aria-hidden="true"></i> 750 Views</span>  <span><i class="fa fa-comment" aria-hidden="true"></i>50 Comment</span> 
												</div>
											</div>
											<div class="col-md-3 col-sm-2 col-xs-12">
												<ul class="question-statistic">
													<li class="active"> <a data-toggle="tooltip" data-placement="bottom" data-original-title="Answers"><span>2</span></a> 
													</li>
													<li> <a data-toggle="tooltip" data-placement="bottom" data-original-title="Votes"><span>0</span></a> 
													</li>
												</ul>
											</div>
											<div class="col-md-10 col-sm-10  col-xs-12">
												<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
												<div class="pull-right tagcloud"> <a href="#">Php</a>  <a href="#">recursive</a>  <a href="#">error</a> 
												</div>
											</div>
										</div>
									</div>
									<!-- Question Listing End -->
									<!-- Question Listing -->
									<div class="listing-grid ">
										<div class="row">
											<div class="col-md-2 col-sm-2 col-xs-12 hidden-xs">
												<a data-toggle="tooltip" data-placement="bottom" data-original-title="James John" href="#">
													<img alt="" class=" img-responsive center-block" src="images/authors/13.jpg">
												</a>
											</div>
											<div class="col-md-7 col-sm-8  col-xs-12">
												<h3><a  href="#"> How to retrieve RSS from multiple website</a></h3>
												<div class="listing-meta"> <span><i class="fa fa-clock-o" aria-hidden="true"></i>8 mintes ago</span>  <span><i class="fa fa fa-eye" aria-hidden="true"></i> 750 Views</span> 
												</div>
											</div>
											<div class="col-md-3 col-sm-2 col-xs-12">
												<ul class="question-statistic">
													<li class="active"> <a data-toggle="tooltip" data-placement="bottom" data-original-title="Answers"><span>177</span></a> 
													</li>
													<li> <a data-toggle="tooltip" data-placement="bottom" data-original-title="Votes"><span>2</span></a> 
													</li>
												</ul>
											</div>
											<div class="col-md-10 col-sm-10  col-xs-12">
												<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
												<div class="pull-right tagcloud"> <a href="#">rss-reader</a>  <a href="#">web</a> 
												</div>
											</div>
										</div>
									</div>
									<!-- Question Listing End -->
									<!-- Question Listing -->
									<div class="listing-grid ">
										<div class="row">
											<div class="col-md-2 col-sm-2 col-xs-12 hidden-xs">
												<a data-toggle="tooltip" data-placement="bottom" data-original-title="Jessica" href="#">
													<img alt="" class=" img-responsive center-block" src="images/authors/13.jpg">
												</a>
											</div>
											<div class="col-md-7 col-sm-8  col-xs-12">
												<h3><a  href="#"> Change navbar color in Twitter Bootstrap 3</a></h3>
												<div class="listing-meta"> <span><i class="fa fa-clock-o" aria-hidden="true"></i>8 mintes ago</span>  <span><i class="fa fa fa-eye" aria-hidden="true"></i> 750 Views</span> 
												</div>
											</div>
											<div class="col-md-3 col-sm-2 col-xs-12">
												<ul class="question-statistic">
													<li class="active"> <a data-toggle="tooltip" data-placement="bottom" data-original-title="Answers"><span>9</span></a> 
													</li>
													<li> <a data-toggle="tooltip" data-placement="bottom" data-original-title="Votes"><span>0</span></a> 
													</li>
												</ul>
											</div>
											<div class="col-md-10 col-sm-10  col-xs-12">
												<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
												<div class="pull-right tagcloud"> <a href="#">bootstrap</a>  <a href="#">navbar</a>  <a href="#">color</a> 
												</div>
											</div>
										</div>
									</div>
									<!-- Question Listing End -->
									<!-- Question Listing -->
									<div class="listing-grid ">
										<div class="row">
											<div class="col-md-2 col-sm-2 col-xs-12 hidden-xs">
												<a data-toggle="tooltip" data-placement="bottom" data-original-title="Muhammad Umair" href="#">
													<img alt="" class="correct img-responsive center-block" src="images/authors/13.jpg">
												</a> <span class="tick2"> <i class="fa fa-check" aria-hidden="true"></i> </span> 
											</div>
											<div class="col-md-7 col-sm-8  col-xs-12">
												<h3><a  href="#"> Choosing bootstrap vs material design</a></h3>
												<div class="listing-meta"> <span><i class="fa fa-clock-o" aria-hidden="true"></i>8 mintes ago</span>  <span><i class="fa fa fa-eye" aria-hidden="true"></i> 750 Views</span> 
												</div>
											</div>
											<div class="col-md-3 col-sm-2 col-xs-12">
												<ul class="question-statistic">
													<li class="active"> <a data-toggle="tooltip" data-placement="bottom" data-original-title="Answers"><span>332</span></a> 
													</li>
													<li> <a data-toggle="tooltip" data-placement="bottom" data-original-title="Votes"><span>55</span></a> 
													</li>
												</ul>
											</div>
											<div class="col-md-10 col-sm-10  col-xs-12">
												<p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment.</p>
												<div class="pull-right tagcloud"> <a href="#">bootstrap</a>  <a href="#">material</a> 
												</div>
											</div>
										</div>
									</div>
									<!-- Question Listing End -->
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
            
                                                
                                                </div>
                                                
                                                </div>
    
    </section>
    <!-- =-=-=-=-=-=-= User History End =-=-=-=-=-=-= -->
    

    
</div>
<!-- =-=-=-=-=-=-= Main Area End =-=-=-=-=-=-= -->    
@endsection