@extends('front.layouts.master')
@section('body')

    @include('front.includes.search')
	<!-- =-=-=-=-=-=-= HOME END =-=-=-=-=-=-= -->
	<!-- =-=-=-=-=-=-= Main Area =-=-=-=-=-=-= -->
	<div class="main-content-area">
		<!-- =-=-=-=-=-=-= Latest Questions  =-=-=-=-=-=-= -->
		<section class="white question-tabs padding-bottom-80" id="latest-post">
			<div class="container">
				<div class="row">
					<!-- Content Area Bar -->
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<!-- Tabs -->
								<ul class="nav panel-tabs">
									<li class="active"> <a data-toggle="tab" href="#tab1"><i class="icofont icon-ribbon"></i><span class="hidden-xs">Recent Questions</span></a> 
									</li>
									<li> <a data-toggle="tab" href="#tab2"><i class="icofont icon-layers"></i><span class="hidden-xs">Popular Responses</span></a> 
									</li>
									<li> <a data-toggle="tab" href="#tab3"><i class="icofont icon-global"></i><span class="hidden-xs">Recently Answered</span></a> 
									</li>
									<li> <a data-toggle="tab" href="#tab4"><i class="icofont icon-linegraph"></i><span class="hidden-xs">No answers</span></a> 
									</li>
								</ul>
							</div>
						</div>
						<div class="panel-body">
							<div class="tab-content">
								<div id="tab1" class="tab-pane active">
									@foreach ($recentQuestions as $recentQuestion)
										<div class="listing-grid wow animated bounceInUp">
											<div class="row">
												<div class="col-md-2 col-sm-2 col-xs-12 hidden-xs">
												<a data-toggle="tooltip" data-placement="bottom" data-original-title="{{$recentQuestion->user->name}}" href="/user/{{$recentQuestion->user->id}}">
														<img alt="" class="img-responsive center-block" src="/image/avatar/{{$recentQuestion->user->avatar}}">
													</a>
												</div>
												<div class="col-md-7 col-sm-8  col-xs-12">
												<h3><a  href="/question/{{$recentQuestion->slug}}"> {{$recentQuestion->title}} </a></h3>
													<div class="listing-meta"> 
														<span><i class="fa fa-clock-o" aria-hidden="true"></i>{{$recentQuestion->created_at}}</span>  
														<span><i class="fa fa fa-eye" aria-hidden="true"></i> 750 Views</span> 
														<span><i class="fa fa-comment" aria-hidden="true"></i>{{count($recentQuestion->comments)}} Comment</span>
													</div>
												</div>
												<div class="col-md-3 col-sm-2 col-xs-12">
													<ul class="question-statistic">
														<li class="active"> 
															<a data-toggle="tooltip" data-placement="bottom" data-original-title="Answers">
																<span>2</span>
															</a> 
														</li>
														<li> 
															<a data-toggle="tooltip" data-placement="bottom" data-original-title="Votes">
																<span>0</span>
															</a> 
														</li>
														<li> 
															<a href="{{route('questions.edit', [$recentQuestion->slug])}}" data-toggle="tooltip" data-placement="bottom" data-original-title="Edit">
																<span><i class="fa fa-edit"></i></span>
															</a> 
														</li>
														<li>
															<form method="POST" action="{{ route('questions.destroy', [$recentQuestion->slug]) }}">
																@csrf
																@method('DELETE')
																<a data-toggle="tooltip" data-placement="bottom" data-original-title="Delete">
																	<span><i class="fa fa-times"></i></span>
																</a> 
															</form>

														</li>
													</ul>
												</div>
												<div class="col-md-10 col-sm-10  col-xs-12">
												<p>{!!$recentQuestion->content!!}</p>
													<div class="pull-right tagcloud"> 
														@if ($recentQuestion->tags)
															@foreach ($recentQuestion->tags as $tag)
															<a href="#">{{$tag->title}}</a> 
															@endforeach
														@endif
													</div>
												</div>
											</div>
										</div>
									@endforeach
								</div>
								<div id="tab2" class="tab-pane">
									<!-- Question Listing -->
									<div class="listing-grid">
										<div class="row">
											<div class="col-md-2 col-sm-2 col-xs-12 hidden-xs">
												<a data-toggle="tooltip" data-placement="bottom" data-original-title="Martina Jaz" href="#">
													<img alt="" class="correct img-responsive center-block" src="images/authors/5.jpg">
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
													<img alt="" class=" img-responsive center-block" src="images/authors/6.jpg">
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
													<img alt="" class=" img-responsive center-block" src="images/authors/7.jpg">
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
													<img alt="" class="correct img-responsive center-block" src="images/authors/8.jpg">
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
								</div>
								<div id="tab3" class="tab-pane">
									<!-- Question Listing -->
									<div class="listing-grid">
										<div class="row">
											<div class="col-md-2 col-sm-2 col-xs-12 hidden-xs">
												<a data-toggle="tooltip" data-placement="bottom" data-original-title="Martina Jaz" href="#">
													<img alt="" class="correct img-responsive center-block" src="images/authors/9.jpg">
												</a> <span class="tick2"> <i class="fa fa-check" aria-hidden="true"></i> </span> 
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
													<img alt="" class="correct img-responsive center-block" src="images/authors/10.jpg">
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
													<img alt="" class="correct img-responsive center-block" src="images/authors/11.jpg">
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
													<img alt="" class="correct img-responsive center-block" src="images/authors/12.jpg">
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
								</div>
								<div id="tab4" class="tab-pane">
									<!-- Question Listing -->
									<div class="listing-grid">
										<div class="row">
											<div class="col-md-2 col-sm-2 col-xs-12 hidden-xs">
												<a data-toggle="tooltip" data-placement="bottom" data-original-title="Martina Jaz" href="#">
													<img alt="" class=" img-responsive center-block" src="images/authors/5.jpg">
												</a>
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
													<img alt="" class=" img-responsive center-block" src="images/authors/3.jpg">
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
													<img alt="" class=" img-responsive center-block" src="images/authors/7.jpg">
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
													<img alt="" class=" img-responsive center-block" src="images/authors/12.jpg">
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
								</div>
								<!-- Pagination View More -->
								<div class="text-center clearfix">
									<button class="btn btn-primary btn-lg">View All Question</button>
								</div>
								<!-- Pagination View More End -->
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<!-- end container -->
		</section>
		<!-- =-=-=-=-=-=-= Latest Questions  End =-=-=-=-=-=-= -->

      
        
	</div>    
@endsection