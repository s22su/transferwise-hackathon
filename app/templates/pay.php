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

	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Pay Here
			</h1>
		</div>
	</div>

	<?php if(isset($success) && $success): ?>
		<div class="alert alert-success">Your payment is received by us!</div>
	<?php endif; ?>

	<?php if(isset($error)): ?>
		<div role="alert" class="alert alert-danger"><b>Some errors occured:</b><br><?= $error ?></div>
	<?php endif; ?>

	<!-- /.row -->
	<form class="" action="/pay" method="post">

	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon1">Link</span>
	  <input type="text" class="form-control" placeholder="www.example.com" aria-describedby="basic-addon1" name="link" value="<?= formValue('link') ?>">
	</div>

	<br/>

	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon2">Price</span>
	  <input type="text" class="form-control" placeholder="$20" aria-describedby="basic-addon1" name="price" value="<?= formValue('price') ?>">
	</div>

	<br/>

	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon3">Delivery Address</span>
	  <input type="text" class="form-control" placeholder="address" aria-describedby="basic-addon1" name="address" value="<?= formValue('address') ?>">
	</div>

	<br/>

	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon4">Name</span>
	  <input type="text" class="form-control" placeholder="Name" aria-describedby="basic-addon1" name="name" value="<?= formValue('name') ?>">
	</div>

	<br/>

	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon5">Phone</span>
	  <input type="text" class="form-control" placeholder="phone" aria-describedby="basic-addon1" name="phone" value="<?= formValue('phone') ?>">
	</div>
	
	<br/>

	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon5">Country</span>
	  <input type="text" class="form-control" placeholder="Country" aria-describedby="basic-addon1" name="country">
	</div>
	
	<br/>
	
	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon5">Bank</span>
	  <input type="text" class="form-control" placeholder="Bank" aria-describedby="basic-addon1" name="bank">
	</div>
	
	<br/>
	
	<div class="input-group">
	  <span class="input-group-addon" id="basic-addon5">Account Number</span>
	  <input type="text" class="form-control" placeholder="account number" aria-describedby="basic-addon1" name="account_number">
	</div>

	<br/>
	
	<div class="input-group">
		<button type="submit" class="btn btn-success btn-lg">Submit</button>
	</div>
	

	</form>

</div>