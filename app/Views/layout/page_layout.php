<?php include "header.php" ?>
	
<body>
<!-- body -->
	<div class="body-content">
		<div class="container">
			<div class="body-content1">
			<!-- header -->
				<div class="logo-search">
					<div class="logo">
						<h1><a href="index.html">k<span class="color">i</span><span class="color1">d</span><span class="color2">s</span> <span>school</span> <i>Good Start To Your Child</i></a></h1>
					</div>
					<div class="search">
						<forfm>
							<input type="text" value="Search Here..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Here...';}" required="">
							<input type="submit" value=" " >
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			<!-- //header -->
			
		<?php include "menu_atas.php" ?>
		
			<!-- banner -->
				<div class="banner">
					<div class="banner-grids">
						<div class="banner-left">
							<div class="banner-left1">
								<div class="banner-left1-grid">
									<img src="images/1.jpg" alt=" " class="img-responsive" />
									<div class="banner-info">
										<a class="read-more" href="single.html"><i></i></a>
										<h3>
											<a href="single.html">
												Kids Playing
											</a>
										</h3>
										<div class="event-meta">
											<h4>Description</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
										</div>
									</div>
								</div>
								<div class="banner-left1-grid">
									<img src="images/4.jpeg" alt=" " class="img-responsive" />
									<div class="banner-info">
										<a class="read-more" href="single.html"><i></i></a>
										<h3>
											<a href="single.html">
												Kids Playing
											</a>
										</h3>
										<div class="event-meta">
											<h4>Description</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
										</div>
									</div>
								</div>
							</div>
							<div class="banner-left2">
								<div class="banner-left1-grid">
									<img src="images/3.jpg" alt=" " class="img-responsive" />
									<div class="banner-info">
										<a class="read-more" href="single.html"><i></i></a>
										<h3>
											<a href="single.html">
												Kids Playing
											</a>
										</h3>
										<div class="event-meta">
											<h4>Description</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
										</div>
									</div>
								</div>
								<div class="banner-left1-grid">
									<img src="images/2.jpg" alt=" " class="img-responsive" />
									<div class="banner-info">
										<a class="read-more" href="single.html"><i></i></a>
										<h3>
											<a href="single.html">
												Kids Playing
											</a>
										</h3>
										<div class="event-meta">
											<h4>Description</h4>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
										</div>
									</div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="banner-right">
							<section class="slider">
								<div class="flexslider">
									<ul class="slides">
										<li>
											<div class="services-grid-right-grid1">
												
											</div>
										</li>
										<li>
											<div class="services-grid-right-grid2">
												
											</div>
										</li>
										<li>
											<div class="services-grid-right-grid3">
												
											</div>
										</li>
									</ul>
								</div>
							</section>
									<!--FlexSlider-->
									<script defer src="js/jquery.flexslider.js"></script>
									<script type="text/javascript">
										$(window).load(function(){
										  $('.flexslider').flexslider({
											animation: "slide",
											start: function(slider){
											  $('body').removeClass('loading');
											}
										  });
										});
									</script>
									<!--End-slider-script-->
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!-- //banner -->
			<!-- banner-bottom -->
				<div class="banner-bottom">
					<div class="banner-bottom-grids">
						<div class="col-md-4 banner-bottom-grid">
							<h3>Welcome To <span>Coffe Shop</span></h3>
							<h2><i>" Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolor emque laudantium. "</i></h2>
							<p>But I must explain to you how all this mistaken idea of denouncing 
								pleasure and praising pain was born and I will give you a complete 
								account of the system, and expound the actual teachings of the great 
								explorer of the truth, the master-builder of human happiness. 
								<span>No one rejects, dislikes, or avoids pleasure itself, because it is 
								pleasure, but because those who do not know how to pursue pleasure 
								rationally encounter consequences that are extremely painful.</span></p>
							<div class="more">
								<a href="single.html" class="hvr-rectangle-out">Read More...</a>
							</div>
							<div class="tags">
								<h4>Tags</h4>
								<ul>
									<li><a href="single.html">Themes</a></li>
									<li><a href="single.html">Art</a></li>
									<li><a href="single.html">Music</a></li>
									<li><a href="single.html">Entertainment</a></li>
									<li><a href="single.html">New</a></li>
									<li><a href="single.html">Design</a></li>
									<li><a href="single.html">Books</a></li>
									<li><a href="single.html">Themes</a></li>
									<li><a href="single.html">Art</a></li>
									<li><a href="single.html">Music</a></li>
									<li><a href="single.html">Entertainment</a></li>
									<li><a href="single.html">New</a></li>
									<li><a href="single.html">Design</a></li>
									<li><a href="single.html">Books</a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4 banner-bottom-grid">
							<h3>Latest Projects For <span>Kids</span></h3>
							<div class="load_more">	
								<script>
									$(document).ready(function () {
										size_li = $("#myList li").size();
										x=1;
										$('#myList li:lt('+x+')').show();
										$('#loadMore').click(function () {
											x= (x+1 <= size_li) ? x+1 : size_li;
											$('#myList li:lt('+x+')').show();
										});
										$('#showLess').click(function () {
											x=(x-1<0) ? 1 : x-1;
											$('#myList li').not(':lt('+x+')').hide();
										});
									});
								</script>
								<ul id="myList">
									<li>
										<div class="l_g">
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="images/.jpg" alt=" " class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4><a href="single.html">unde omnis iste natus error sit voluptatem</a></h4>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="images/9.jpg" alt=" " class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4><a href="single.html">"Lorem ipsum dolor consectetur adipiscing</a></h4>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="images/10.jpg" alt=" " class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4><a href="single.html">culpa qui officia deserunt mollit anim id</a></h4>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="images/11.jpg" alt=" " class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4><a href="single.html">Itaque earum rerum hic tenetur a sapiente</a></h4>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="images/12.jpg" alt=" " class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4><a href="single.html">ut aut reiciendis voluptatibus maiores</a></h4>
												</div>
												<div class="clearfix"> </div>
											</div>
										</div>
									</li>
									<li>
										<div class="l_g">
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="images/8.jpg" alt=" " class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4><a href="single.html">unde omnis iste natus error sit voluptatem</a></h4>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="images/9.jpg" alt=" " class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4><a href="single.html">"Lorem ipsum dolor consectetur adipiscing</a></h4>
												</div>
												<div class="clearfix"> </div>
											</div>
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="images/10.jpg" alt=" " class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4><a href="single.html">culpa qui officia deserunt mollit anim id</a></h4>
												</div>
												<div class="clearfix"> </div>
											</div>
										</div>
									</li>
								</ul>
									<div id="loadMore" class="hvr-rectangle-out">Load more</div>
									<div id="showLess" class="hvr-rectangle-out">Show less</div>
							</div>
						</div>
						<div class="col-md-4 banner-bottom-grid">
							<h3>What's <span>New</span></h3>
							<div class="banner-bottom-grid-fig">
								<div class="banner-bottom-grid-fig1">
									<img src="images/4.jpg" alt=" " class="img-responsive" />
									<div class="banner-bottom-grid-fig1-pos">
										<a href="single.html">At vero eos et accusamus et iusto odio dignissimos ducimus</a>
										<p><i class="glyphicon glyphicon-time" aria-hidden="true"></i>March 20, 2016 By <a href="single.html">Andrew Smith</a></p>
									</div>
								</div>
								<div class="banner-bottom-grid-fig-grid">
									<div class="banner-bottom-grid-fig-grid1">
										<h4><span>Plan-1</span><a href="single.html">Sed ut perspiciatis unde omnis iste natus</a></h4>
										<p><i class="glyphicon glyphicon-time" aria-hidden="true"></i>March 25, 2016 By <a href="single.html">Michael</a></p>
									</div>
								</div>
								<div class="banner-bottom-grid-fig-grid">
									<div class="banner-bottom-grid-fig-grid1">
										<h4><span>Plan-2</span><a href="single.html">Neque porro quisquam est, qui dolorem ipsum quia</a></h4>
										<p><i class="glyphicon glyphicon-time" aria-hidden="true"></i>March 28, 2016 By <a href="single.html">Laura James</a></p>
									</div>
								</div>
								<div class="banner-bottom-grid-fig-grid">
									<div class="banner-bottom-grid-fig-grid1">
										<h4><span>Plan-3</span><a href="single.html">Similique sunt in culpa qui officia deserunt</a></h4>
										<p><i class="glyphicon glyphicon-time" aria-hidden="true"></i>March 30, 2016 By <a href="single.html">Fedrick</a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!-- //banner-bottom -->
			</div>
		</div>
	</div>
<!-- //body -->

<?php include "footer.php" ?>

<!-- here stars scrolling icon -->
	<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
	</script>
<!-- //here ends scrolling icon -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
