<?php
// Uncomment or remove
// SlimBoilerplate\Layout\LayoutView::addJs('assets/js/demo.js');
// SlimBoilerplate\Layout\LayoutView::addCss('assets/css/demo.css');
// SlimBoilerplate\Layout\LayoutView::setTitle('This is my title');
// SlimBoilerplate\Layout\LayoutView::setDescription('This is my description');
// SlimBoilerplate\Layout\LayoutView::setKeywords('This, is, my, keywords');
?>

<br/>
<br/>
<br/>
<br/>

<div class="container">
	<div class="row">

		<div class="col-md-3">
			<p>Windsor, UK Stores</p>
			<div class="list-group">
				<a href="basket" class="list-group-item">All Items</a>
				<a href="pizza" class="list-group-item">Pizzas</a>
				<a href="cake" class="list-group-item">Cakes</a>
				<a href="flower" class="list-group-item">Flowers</a>
				<a href="other" class="list-group-item">Others</a>
			</div>
			<hr/>
			<p>Send gift to:</p>
			<div class="row">
				<div class="col-sm-12">
					<input type="text" class="form-control " id="send">
				</div>
			</div>
			<a href="basket" class="btn btn-primary pull-right">Search</a>
			<br/>
			<hr/>
			<p>Item not here? Proceed to checkout page to enter link of requested item to buy.</p>
			<div class="row">
				<div class="col-sm-12">
					<a href="pay" class="btn btn-success pull-right">Checkout</a>
				</div>
			</div>
		</div>

		<div class="col-md-9">

			<div class="row carousel-holder">

				<div class="col-md-12">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img class="slide-image" src="img/flower/5.jpg" alt="">
							</div>
							<div class="item">
								<img class="slide-image" src="img/toy/1.jpg" alt="">
							</div>
							<div class="item">
								<img class="slide-image" src="img/toy/2.jpg" alt="">
							</div>
						</div>
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-sm-4 col-lg-4 col-md-4">
					<div class="thumbnail">
						<img src="img/flower/1.jpg" alt="">
						<div class="caption">
							<h4 class="pull-right">$12.99</h4>
							<h4><a href="#">Assorted Flowers</a>
							</h4>
							<p>See more snippets like this online store item at</p>
							<a href="pay" class="btn btn-success btn-large">Checkout</a>
						</div>
						<div class="ratings">
							<p class="pull-right">15 reviews</p>
							<p>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-4 col-lg-4 col-md-4">
					<div class="thumbnail">
						<img src="img/pizza/2.jpg" alt="">
						<div class="caption">
							<h4 class="pull-right">$15.99</h4>
							<h4><a href="#">Vegetarian</a>
							</h4>
							<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<a href="pay" class="btn btn-success btn-large">Checkout</a>
						</div>
						<div class="ratings">
							<p class="pull-right">12 reviews</p>
							<p>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-4 col-lg-4 col-md-4">
					<div class="thumbnail">
						<img src="img/flower/3.jpg" alt="">
						<div class="caption">
							<h4 class="pull-right">$20.99</h4>
							<h4><a href="#">Pure White Roses</a>
							</h4>
							<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<a href="pay" class="btn btn-success btn-large">Checkout</a>
						</div>
						<div class="ratings">
							<p class="pull-right">31 reviews</p>
							<p>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-4 col-lg-4 col-md-4">
					<div class="thumbnail">
						<img src="img/toy/4.jpg" alt="">
						<div class="caption">
							<h4 class="pull-right">$45.99</h4>
							<h4><a href="#">Bicycle</a>
							</h4>
							<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<a href="pay" class="btn btn-success btn-large">Checkout</a>
						</div>
						<div class="ratings">
							<p class="pull-right">6 reviews</p>
							<p>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</p>
						</div>
					</div>
				</div>

				<div class="col-sm-4 col-lg-4 col-md-4">
					<div class="thumbnail">
						<img src="img/toy/3.jpg" alt="">
						<div class="caption">
							<h4 class="pull-right">$24.99</h4>
							<h4><a href="#">The Hunger Games</a>
							</h4>
							<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<a href="pay" class="btn btn-success btn-large">Checkout</a>
						</div>
						<div class="ratings">
							<p class="pull-right">18 reviews</p>
							<p>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</p>
						</div>
					</div>
				</div>
				
				<div class="col-sm-4 col-lg-4 col-md-4">
					<div class="thumbnail">
						<img src="img/flower/6.jpg" alt="">
						<div class="caption">
							<h4 class="pull-right">$14.99</h4>
							<h4><a href="#">Pink Roses Bouquet</a>
							</h4>
							<p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<a href="pay" class="btn btn-success btn-large">Checkout</a>
						</div>
						<div class="ratings">
							<p class="pull-right">18 reviews</p>
							<p>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star"></span>
								<span class="glyphicon glyphicon-star-empty"></span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>