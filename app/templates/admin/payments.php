<br><br>
<div class="container">
    <?php if(!isset($_GET['view'])): ?>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Payments list
    <!--                <small>Secondary Text</small>-->
                </h1>
            </div>
        </div>
        <div class="row">
            <table class="table table-hover">
                <tr>
                    <th class="">ID</th>
                    <th class="">Product link</th>
                    <th class="">Price</th>
                    <th class="">View</th>
                </tr>

                <?php foreach($data['payments'] as $payment): ?>
                <tr>
                    <td class=""><?= $payment['id']; ?></td>
                    <td class=""><a href="<?= $payment['link']; ?>" target="blank"><?= $payment['link']; ?></a></td>
                    <td class=""><?= $payment['price']; ?></td>
                    <td class=""><a href="/superadmin?view=<?= $payment['id']; ?>" class="btn btn-success">View</a></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    <?php else: ?>

        <?php //print_r($payment); ?>

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Payment info <small>#<?= $data['payment']['id']; ?></small>
                </h1>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped">
                <tr>
                    <td><b>Name:</b></td>
                    <td><?= $data['payment']['name']; ?></td>
                </tr>
                <tr>
                    <td><b>Delivery address:</b></td>
                    <td><?= $data['payment']['address']; ?></td>
                </tr>
                <tr>
                    <td><b>Phone:</b></td>
                    <td><?= $data['payment']['phone']; ?></td>
                </tr>
                <tr>
                    <td><b>Price:</b></td>
                    <td><?= $data['payment']['price']; ?></td>
                </tr>
                <tr>
                    <td><b>Status:</b></td>
                    <td><button class="btn btn-small btn-success" type="button">
                            Paid <span class="badge"><i class="fa fa-check"></i></span>
                        </button></td>
                </tr>
            </table>
        </div>
    <?php endif; ?>
</div>