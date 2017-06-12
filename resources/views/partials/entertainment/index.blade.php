@extends('index')
@section('content')
<!-- slicebox-slider -->
	<div class="slicebox-slider">
		<div class="container">
			<div class="move-text">
				<div class="breaking_news">
					<h2>Breaking News</h2>
				</div>
				<div class="marquee">
					<div class="marquee1"><a class="breaking" href="single.html">A 5-year-old boy who recently returned to the U.S from Ebola-stricken West Africa is under observation after experiencing a fever.</a></div>
					<div class="marquee2"><a class="breaking" href="single.html">The surprisingly successful president of the Philippines and peacemaking in the Philippines: Shaking it all up.</a></div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				<script type="text/javascript" src="{{url('public/js/jquery.marquee.js')}}"></script>
				<script>
				  $('.marquee').marquee({ pauseOnHover: true });
				  //@ sourceURL=pen.js
				</script>
			</div>
			<div class="slicebox-slider-grid">
				<div class="col-md-8 slicebox-slider-left">
					<div class="wrapper1">

							<ul id="sb-slider" class="sb-slider">
								<li>
									<a href="#" target="_blank"><img src="{{url('public/images/24.jpg')}}" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>wonderful music</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="{{url('public/images/25.jpg')}}" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>Honest Entertainer</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="{{url('public/images/26.jpg')}}" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>Brave Astronaut</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="{{url('public/images/24.jpg')}}" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>Affectionate Decision Maker</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="{{url('public/images/25.jpg')}}" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>Faithful Investor</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="{{url('public/images/26.jpg')}}" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>Groundbreaking Artist</h3>
									</div>
								</li>
								<li>
									<a href="#" target="_blank"><img src="{{url('public/images/25.jpg')}}" alt="" class="img-responsive" /></a>
									<div class="sb-description">
										<h3>Selfless Philanthropist</h3>
									</div>
								</li>
							</ul>

							<div id="shadow" class="shadow"></div>

							<div id="nav-arrows" class="nav-arrows">
								<a href="#">Next</a>
								<a href="#">Previous</a>
							</div>

					</div><!-- /wrapper -->
					<script type="text/javascript" src="{{url('public/js/jquery.slicebox.js')}}"></script>
					<script type="text/javascript">
						$(function() {
							
							var Page = (function() {

								var $navArrows = $( '#nav-arrows' ).hide(),
									$shadow = $( '#shadow' ).hide(),
									slicebox = $( '#sb-slider' ).slicebox( {
										onReady : function() {

											$navArrows.show();
											$shadow.show();

										},
										orientation : 'r',
										cuboidsRandom : true
									} ),
									
									init = function() {

										initEvents();
										
									},
									initEvents = function() {

										// add navigation events
										$navArrows.children( ':first' ).on( 'click', function() {

											slicebox.next();
											return false;

										} );

										$navArrows.children( ':last' ).on( 'click', function() {
											
											slicebox.previous();
											return false;

										} );

									};

									return { init : init };

							})();

							Page.init();

						});
					</script>
					<div class="gallery">
						<h3>gallery</h3>
						<div class="gallery-grids">
							<div class="col-md-4 gallery-grid">
								<div class="gallery-grd">
									<a href="images/18.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="{{url('public/images/18.jpg')}}" alt=" " class="img-responsive" />
									</a>
								</div>
								<div class="gallery-grd grd">
									<a href="images/15.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="{{url('public/images/15.jpg')}}" alt=" " class="img-responsive" />
									</a>
								</div>
							</div>
							<div class="col-md-4 gallery-grid">
								<div class="gallery-grd">
									<a href="images/12.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="{{url('public/images/12.jpg')}}" alt=" " class="img-responsive" />
									</a>
								</div>
								<div class="gallery-grd grd">
									<a href="images/13.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="{{url('public/images/13.jpg')}}" alt=" " class="img-responsive" />
									</a>
								</div>
							</div>
							<div class="col-md-4 gallery-grid">
								<div class="gallery-grd">
									<a href="images/21.jpg" rel="title" class="b-link-stripe b-animate-go  thickbox">
										<img src="{{url('public/images/21.jpg')}}" alt=" " class="img-responsive mobile1" />
									</a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="albums">
						<h3>albums</h3>
						<div class="albums-grids">
							<div class="albums-grid1">
								<iframe src="https://player.vimeo.com/video/109771543" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

								<h4><a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
									accusantium doloremque laudantium, totam rem aperiam</a></h4>
								<p>But I must explain to you how all this mistaken idea of 
								denouncing pleasure and praising pain was born and I will 
								give you a complete account of the system, and expound the 
								actual teachings of the great explorer of the truth, the 
								master-builder of human happiness. No one rejects, 
								dislikes, or avoids pleasure itself, because it is pleasure</p>
							</div>
							<div class="albums-grid1">
								<iframe src="https://player.vimeo.com/video/143950426" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								<h4><a href="single.html">Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
									accusantium doloremque laudantium, totam rem aperiam</a></h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 breaking-news-grid-right slicebox-slider-right">
					<h3>entertainment</h3>
					<ul>
						<li>
							<div class="breaking-news-grid-right-grids">
								<div class="breaking-news-grid-right-gridl">
									<a href="#"><img src="{{url('public/images/11.jpg')}}" alt=" " class="img-responsive"></a>
								</div>
								<div class="breaking-news-grid-right-gridr">
									<h4><a href="single.html">ut labore et dolore magnam aliquam quaerat voluptatem</a></h4>
									<ul>
										<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 3,506 Likes</a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
						<li>
							<div class="breaking-news-grid-right-grids">
								<div class="breaking-news-grid-right-gridl">
									<a href="#"><img src="{{url('public/images/12.jpg')}}" alt=" " class="img-responsive"></a>
								</div>
								<div class="breaking-news-grid-right-gridr">
									<h4><a href="single.html">ut labore et dolore magnam aliquam quaerat voluptatem</a></h4>
									<ul>
										<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 3,506 Likes</a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
						<li>
							<div class="breaking-news-grid-right-grids">
								<div class="breaking-news-grid-right-gridl">
									<a href="#"><img src="{{url('public/images/13.jpg')}}" alt=" " class="img-responsive"></a>
								</div>
								<div class="breaking-news-grid-right-gridr">
									<h4><a href="single.html">ut labore et dolore magnam aliquam quaerat voluptatem</a></h4>
									<ul>
										<li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> User</a></li>
										<li><a href="#"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> 3,506 Likes</a></li>
									</ul>
								</div>
								<div class="clearfix"> </div>
							</div>
						</li>
					</ul>
					
					<div class="news-grid-rght2">
						<h5>subscribe to our newsletter</h5>
						<p>Get the latest news and updates by signing up to our daily newsletter.We won't sell your email or spam you !</p>
						<form>
							<input type="text" value="enter your Email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'enter your Email address';}">
							<input type="submit" value="Submit">
						</form>
					</div>
					<div class="news-grid-rght3">
						<img src="{{url('public/images/18.jpg')}}" alt=" " class="img-responsive">
						<div class="story">
							<p>story of the week</p>
							<h3><a href="single.html">US hails west Africa Ebola progress</a></h3>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //slicebox-slider -->
@stop