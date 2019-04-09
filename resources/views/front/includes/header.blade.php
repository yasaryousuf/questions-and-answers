	<!-- =-=-=-=-=-=-= HEADER =-=-=-=-=-=-= -->
	<div class="top-bar">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-4">
				<ul class="top-nav nav-left">
					<li><a href="{{url('/')}}">Home</a>
					</li>
					<li  class="hidden-xs"><a href="{{url('/contact-us')}}">Contact Us</a>
					</li>
				</ul>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-6 col-xs-8">
				<ul class="top-nav nav-right">
					@if (!Auth::check())
					<li><a href="{{url('login')}}"><i class="fa fa-lock" aria-hidden="true"></i>Login</a>
					</li>
					<li><a href="{{url('register')}}"><i class="fa fa-user-plus" aria-hidden="true"></i>Signup</a>
					</li>
					@else
						<li class="dropdown"> 
							<a class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown" data-animations="fadeInUp">
								<img class="img-circle resize" alt="" src="{{asset('/')}}front/images/authors/13.jpg">
								<span class="hidden-xs small-padding">
								<span>{{Auth::user()->name}}</span>
								<i class="fa fa-caret-down"></i>
								</span>
							</a>
							<ul class="dropdown-menu ">
								<li><a href="profile.html"><i class=" icon-bargraph"></i> Dashboard</a></li>
								<li><a href="profile-setting.html"><i class=" icon-gears"></i> Profile Setting</a></li>
								<li><a href="question-list.html"><i class="icon-heart"></i> Questions</a></li>
								<li><a href="#"><i class="icon-lock"></i> Logout</a></li>
							</ul>
						</li>
					@endif

				</ul>
			</div>
				

		</div>
	</div>
</div>
	<!-- =-=-=-=-=-=-= HEADER Navigation =-=-=-=-=-=-= -->
	<div class="navbar navbar-default">
		<div class="container">
			<!-- header -->
			<div class="navbar-header">
				<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">	<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- logo -->
				<a href="index.html" class="navbar-brand">
					<img class="img-responsive" alt="" src="{{asset('/')}}front/images/logo.png">
				</a>
				<!-- header end -->
			</div>
			<!-- navigation menu -->
			<div class="navbar-collapse collapse">
				<!-- right bar -->
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden-sm"><a href="how-work.html">How  It Works</a>
					</li>
					<li><a href="listing.html">Browse Questions</a>
					</li>

					<li>
						<div class="btn-nav"><a href="post-question.html" class="btn btn-primary btn-small navbar-btn">Post Question</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- navigation menu end -->
			<!--/.navbar-collapse -->
		</div>
	</div>
	<!-- HEADER Navigation End -->