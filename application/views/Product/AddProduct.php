<div class="card">
    <div class="card-body">
        <h4 class="card-title">Add Product</h4>
        <form class="forms-sample" action="<?= site_url('/product/AddProduct_Form') ?>" method="POST">
            <div class="form-group row">
                <label for="Product_name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="Product_name" placeholder="Input product name" name='name'>
                </div>
            </div>
            <div class="form-group row">
                <label for="Product_price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="Product_price" placeholder="Input Product price" name='price'>
                </div>
            </div>
            <div class="form-group row">
                <label for="Product_Amount" class="col-sm-2 col-form-label">Amount</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="Product_Amount" placeholder="Input Product Amount" name='amount'>
                </div>
            </div>
            <button type="submit" class="btn btn-inverse-danger mr-2">Add Product</button>
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>
</div>
</div>