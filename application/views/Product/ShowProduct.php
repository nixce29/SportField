<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Product</h4>
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="product_table" class="table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Product Name</th>
                                        <th>Price</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $index = 1;
                                    foreach ($products as $value) { ?>
                                        <tr>
                                            <td><?php echo $index++ ?></td>
                                            <td><?php echo $value->name ?></td>
                                            <td><?php echo $value->price ?></td>
                                            <td><?php echo $value->amount ?></td>
                                        </tr>
                                    <?php }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#product_table').DataTable();
    });
</script>