<?php
$index = 1;
foreach ($products as $value) { ?>

<?php }
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Product</h4>
                <div class="text-center">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addProductModal">Add Product<i class="mdi mdi-play-circle ml-1"></i></button>
                </div>
                <!-- Add Product Modals -->
                <div class="modal fade" id="addProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <label for="Product_amount" class="col-sm-3 col-form-label">Amount</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="Product_amount" placeholder="Input Product Amount" name='Product_amount'>
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
                <!-- End Add Product Modals -->
                <!-- Edit Product -->
                <div class="modal fade" id="EditProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="forms-sample" action="<?= site_url('/product/Edit_product') ?>" method="POST">
                                    <div class="form-group row">
                                        <!-- <div class="col-sm-1">
                                            <input type="hidden" class="form-control" id="editProduct_id" placeholder=" Input Product Amount" name='Product_id'>
                                        </div> -->
                                        <label for="editProduct_name" class="col-sm-3 col-form-label">Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="editProduct_name" placeholder=" Input product name" name='Product_name'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="editProduct_price" class="col-sm-3 col-form-label">Price</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="editProduct_price" value="$price" placeholder=" Input Product price" name='Product_price'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="editProduct_amount" class="col-sm-3 col-form-label">Amount</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="editProduct_amount" value="$amount" placeholder=" Input Product Amount" name='Product_amount'>
                                        </div>
                                    </div>
                                    <div class="col-sm-1">
                                        <input type="hidden" class="form-control" id="editProduct_id" placeholder=" Input Product Amount" name='Product_id'>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="EditProductButton" onclick="submitEdit('<?= $value->id ?>','<?= $value->name ?>','<?= $value->price ?>','<?= $value->amount ?>')">Edit</button>
                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Edit Product -->
                <!-- Delete Product -->
                <div class="modal fade" id="DeleteProductModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-center" id="DeleteModalLabel">DELETE PRODUCT</h5>
                                </button>
                                <input type="hidden" id="deleteProduct_id">
                                <input type="hidden" id="deleteProduct_name">
                                <input type="hidden" id="deleteProduct_price">
                                <input type="hidden" id="deleteProduct_amount">
                                <button type="submit" class="btn btn-success" id="DeleteProductButton" onclick="submitDelete('<?= $value->id ?>','<?= $value->name ?>','<?= $value->price ?>','<?= $value->amount ?>')">Delete</button>
                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ENd Delete Product -->
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="product_table" class="table">
                                <thead>
                                    <tr>
                                        <th class='text-center'>No.</th>
                                        <th class='text-center'>Product Name</th>
                                        <th class='text-center'>Price</th>
                                        <th class='text-center'>Amount</th>
                                        <th class='text-center'>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                                    $index = 1;
                                    foreach ($products as $value) { ?>
                                        <tr>
                                            <td class='text-center'><?php echo $index++ ?></td>
                                            <td class='text-center'><?php echo $value->name ?></td>
                                            <td class='text-center'><?php echo $value->price ?></td>
                                            <td class='text-center'><?php echo $value->amount ?></td>
                                            <td>
                                                <div class="text-center">
                                                    <button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#EditProductModal" onclick="editProductButton('<?= $value->id ?>','<?= $value->name ?>','<?= $value->price ?>','<?= $value->amount ?>')">EditProduct<i class="mdi mdi-play-circle ml-1"></i></button>
                                                    <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#DeleteProductModal" onclick="DeleteProductButton('<?= $value->id ?>','<?= $value->name ?>','<?= $value->price ?>','<?= $value->amount ?>')">Delete<i class="mdi mdi-play-circle ml-1"></i></button>
                                                </div>
                                            </td>
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
    function submitDelete(id, name, price, amount) {
        var deleteProductId = $('#deleteProduct_id').val();
        var deleteProductName = $('#deleteProduct_name').val();
        var deleteProductPrice = $('#deleteProduct_price').val();
        var deleteProductAmount = $('#deleteProduct_amount').val();
        var productDeletes = {
            deleteProductId: deleteProductId,
            deleteProductName: deleteProductName,
            deleteProductPrice: deleteProductPrice,
            deleteProductAmount: deleteProductAmount
        };
        var deleteData = $.ajax({
            type: "POST",
            url: "<?= site_url('/Product/Delete_product') ?>",
            data: productDeletes,
            dataType: "text",
            success: function(resultData) {
                alert('Delete finish');

                location.reload();
            }

        });
    }

    function DeleteProductButton(id, name, price, amount) {
        console.log(id, name, price, amount)

        var deleteProductId = $('#deleteProduct_id').val(id);
        var deleteProductName = $('#deleteProduct_name').val(name);
        var deleteProductPrice = $('#deleteProduct_price').val(price);
        var deleteProductAmount = $('#deleteProduct_amount').val(amount);
        return;

    }

    function submitEdit(id, name, price, amount) {
        var editProductId = $('#editProduct_id').val();
        var editProductName = $('#editProduct_name').val();
        var editProductPrice = $('#editProduct_price').val();
        var editProductAmount = $('#editProduct_amount').val();
        var productEdits = {
            editProductId: editProductId,
            editProductName: editProductName,
            editProductPrice: editProductPrice,
            editProductAmount: editProductAmount
        };
        var editData = $.ajax({
            type: "POST",
            url: "<?= site_url('/Product/Edit_product') ?>",
            data: productEdits,
            dataType: "text",
            success: function(resultData) {
                alert('Edit finish');

                location.reload();
            }

        });
    }

    function editProductButton(id, name, price, amount) {
        console.log(id, name, price, amount)

        var editProductId = $('#editProduct_id').val(id);
        var editProductName = $('#editProduct_name').val(name);
        var editProductPrice = $('#editProduct_price').val(price);
        var editProductAmount = $('#editProduct_amount').val(amount);
        return;

    }
    $('#Btn-id').click(function() {
        var productName = $('#Product_name').val();
        var productPrice = $('#Product_price').val();
        var productAmount = $('#Product_amount').val();

        var productDetails = {
            productName: productName,
            productPrice: productPrice,
            productAmount: productAmount
        };

        var saveData = $.ajax({
            type: "POST",
            url: "<?= site_url('/Product/AddProduct_form') ?>",
            data: productDetails,
            dataType: "text",
            success: function(resultData) {
                alert('Add Product');
                $('#addProductModal').modal('hide');
                $('#Product_name').val('');
                $('#Product_price').val('');
                $('#Product_amount').val('');
                location.reload();
            }

        });
    });

    $(document).ready(function() {
        $('#product_table').DataTable();
    });
</script>