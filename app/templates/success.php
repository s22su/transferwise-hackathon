<br/>
<br/>
<br/>
<br/>

<div class="container">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Payment successful</h1>
        </div>
    </div>

	<div class="row">
		<div class="col-lg-12">
			Payment info <small>001</small>
		</div>
	</div>
	<div class="row">
		<table class="table table-striped">
			<tr>
				<td><b>Item Bought:</b></td>
				<td>Assorted Flowers</td>
			</tr>
			<tr>
				<td><b>Name:</b></td>
				<td><?= $data['payment']['name']; ?></td>
			</tr>
			<tr>
				<td><b>Delivery address:</b></td>
				<td>
					<address>
						<?= $data['payment']['address']; ?>
					</address>
				</td>
			</tr>
			<tr>
				<td><b>Phone:</b></td>
				<td><?= $data['payment']['phone']; ?></td>
			</tr>
			<tr>
				<td><b>Price:</b></td>
				<td><?= $data['payment']['price']; ?></td>
			</tr>
		</table>
	</div>
	
	<a href="/" class="btn btn-primary pull-right">Back to Home Page</a>
		
</div>