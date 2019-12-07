<div class="card">
    <div class="card-body">
        <h4 class="card-title">Register Form</h4>
        <form class="forms-sample" action="<?= site_url('/Users/addUser') ?>" method="POST">
            <div class="form-group row">
                <label for="username" class="col-sm-3 col-form-label">Username</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="password" placeholder="password" name="password">
                </div>
            </div>
            <div class="form-group row">
                <label for="Email" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="Email" placeholder="email" name="email">
                </div>
            </div>
            <div class="form-group row">
                <label for="mobile" class="col-sm-3 col-form-label">Mobile</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="mobile" placeholder="mobile" name="mobile">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-light">Cancel</button>
        </form>
    </div>
</div>