<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Product</h4>
                <div class="text-center">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Click for demo<i class="mdi mdi-play-circle ml-1"></i></button>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="forms-sample" action="<?= site_url('/product/AddProduct_Form') ?>" method="POST">
                                    <div class="form-group row">
                                        <label for="Product_name" class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="Product_name" placeholder="Input product name" name='Product_name'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Product_price" class="col-sm-3 col-form-label">Price</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="Product_price" placeholder="Input Product price" name='Product_price'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="Product_Amount" class="col-sm-3 col-form-label">Amount</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="Product_Amount" placeholder="Input Product Amount" name='Product_Amount'>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="Btn-id">Add Product</button>
                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
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
    $('#Btn-id').click(function() {
        var productName = $('#Product_name').val();
        var productPrice = $('#Product_price').val();
        var productAmount = $('#Product_Amount').val();

        var productDetails = {
            productName: productName,
            productPrice: productPrice,
            productAmount: productAmount
        };

        var saveData = $.ajax({
            type: "POST",
            url: "<?= site_url('/Product/AddProduct_form') ?>",
            data: "productDetails",
            dataType: "text",
            success: function(resultData) {
                alert('Add Product');
            }
        });

    });

    $(document).ready(function() {
        $('#product_table').DataTable();
    });
</script>