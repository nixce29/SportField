<?php
foreach ($users as $value) { ?>

<?php }
?>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">User Story</h4>
                <div class="text-center">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addUserModal">Register<i class="mdi mdi-play-circle ml-1"></i></button>
                </div>
                <!-- Add Product Modals -->
                <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="forms-sample" action="<?= site_url('/users/Register') ?>" method="POST">
                                    <div class="form-group row">
                                        <label for="username" class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="username" placeholder=" Input Username" name='username'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="password" class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="password" placeholder=" Input Password" name='password'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" id="email" placeholder=" Input Email" name='email'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-8">
                                            <input type="number" min='0' max='1' class="form-control" id="status" placeholder=" Input Status" name='status'>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="EditUserButton" onclick="addUser('<?= $value->uid ?>','<?= $value->username ?>','<?= $value->password ?>','<?= $value->email ?>','<?= $value->status ?>')">Submit</button>
                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Add Product Modals -->
                <!-- Edit Product -->
                <div class="modal fade" id="EditUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Users</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form class="forms-sample" action="<?= site_url('/users/editUser') ?>" method="POST">
                                    <div class="col-sm-8">
                                        <input type="hidden" class="form-control" id="editUser_id" placeholder=" Input User Id" name='Id'>
                                    </div>
                                    <div class="form-group row">
                                        <label for="editUser_username" class="col-sm-3 col-form-label">Username</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="editUser_username" placeholder=" Input Username" name='username'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="editUser_password" class="col-sm-3 col-form-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="editUser_password" placeholder=" Input Password" name='password'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="editUser_email" class="col-sm-3 col-form-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" id="editUser_email" placeholder=" Input Email" name='email'>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="editUser_status" class="col-sm-3 col-form-label">Status</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="editUser_status" placeholder=" Input Status" name='status'>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="EditUserButton" onclick="editUserSubmit('<?= $value->uid ?>','<?= $value->username ?>','<?= $value->password ?>','<?= $value->email ?>','<?= $value->status ?>')">Edit</button>
                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Edit Product -->
                <!-- Delete Product -->
                <div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-md" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-center" id="DeleteModalLabel">DELETE PRODUCT</h5>
                                </button>
                                <input type="hidden" id="deleteUser_id">
                                <input type="hidden" id="deleteUser_username">
                                <input type="hidden" id="deleteUser_password">
                                <input type="hidden" id="deleteUser_email">
                                <input type="hidden" id="deleteUser_status">

                                <button type="submit" class="btn btn-success" id="DeleteUserButton" onclick="deleteUserSubmit('<?= $value->uid ?>','<?= $value->username ?>','<?= $value->password ?>','<?= $value->email ?>','<?= $value->status ?>')">Delete</button>
                                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ENd Delete Product -->
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="Users_table" class="table">
                                <thead>
                                    <tr>
                                        <th class='text-center'>ID</th>
                                        <th class='text-center'>Username</th>
                                        <th class='text-center'>Password</th>
                                        <th class='text-center'>Email</th>
                                        <th class='text-center'>Status</th>
                                        <th class='text-center'>Edit</th>
                                        <th class='text-center'>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!-- <?php
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
                                    ?> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
        $(document).ready(function() {
            $('#Users_table').DataTable({
                "ajax": {
                    "url": "<?php echo site_url('Users/get_all_users') ?>",
                    "datasrc": "data",
                },
                "columns": [{
                        "data": "uid"
                    },
                    {
                        "data": "username"
                    },
                    {
                        "data": "password"
                    },
                    {
                        "data": "email"
                    },
                    {
                        "data": "status"
                    },

                ],
                "columnDefs": [{
                        "targets": 5,
                        "data": "uid",
                        "render": function(data, type, row, meta) {
                            // console.log(row);
                            editButton = `<button type="button" class="btn btn-warning btn-md" data-toggle="modal" data-target="#EditUserModal" onclick="editUserButton('${row.uid}','${row.username}','${row.password}','${row.email}','${row.status}')">Edit<i class="mdi mdi-play-circle ml-1"></i></button>`
                            return editButton;
                        }
                    },
                    {
                        "targets": 6,
                        "data": "uid",
                        "render": function(data, type, row, meta) {
                            deleteButton = `<button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#deleteUserModal" onclick="DeleteUserButton('${row.uid}','${row.username}','${row.password}','${row.email}','${row.status}')">Delete<i class="mdi mdi-play-circle ml-1"></i></button>`
                            return deleteButton;
                        }
                    }
                ]
            });
        });

        function editUserButton(uid, username, password, email, status) {
            // console.log(uid, username, password, email, status)

            var editUserId = $('#editUser_id').val(uid);
            var editUserUsername = $('#editUser_username').val(username);
            var editUserPassword = $('#editUser_password').val(password);
            var editUserEmail = $('#editUser_email').val(email);
            var editUserStatus = $('#editUser_status').val(status);
            return;
        }

        function editUserSubmit(uid, username, password, email, status) {
            console.log(uid, username, password, email, status)

            var editUserId = $('#editUser_id').val();
            var editUserUsername = $('#editUser_username').val();
            var editUserPassword = $('#editUser_password').val();
            var editUserEmail = $('#editUser_email').val();
            var editUserStatus = $('#editUser_status').val();

            var usersEdits = {
                editUserId: editUserId,
                editUserUsername: editUserUsername,
                editUserPassword: editUserPassword,
                editUserEmail: editUserEmail,
                editUserStatus: editUserStatus
            };
            var editData = $.ajax({
                type: "POST",
                url: "<?= site_url('/Users/Edit_users') ?>",
                data: usersEdits,
                dataType: "text",
                success: function(resultData) {
                    alert('Edit finish');

                    location.reload();
                }

            });
        }

        function DeleteUserButton(uid, username, password, email, status) {
            // console.log(uid, username, password, email, status)

            var deleteUserId = $('#deleteUser_id').val(uid);
            var deleteUserUsername = $('#deleteUser_username').val(username);
            var deleteUserPassword = $('#editUser_password').val(password);
            var deleteUserEmail = $('#deleteUser_email').val(email);
            var deleteUserStatus = $('#deleteUser_status').val(status);
            return;
        }

        function deleteUserSubmit(uid, username, password, email, status) {

            var deleteUserId = $('#deleteUser_id').val();
            var deleteUserUsername = $('#deleteUser_username').val();
            var deleteUserPassword = $('#editUser_password').val();
            var deleteUserEmail = $('#deleteUser_email').val();
            var deleteUserStatus = $('#deleteUser_status').val();

            var usersDelete = {
                deleteUserId: deleteUserId,
                deleteUserUsername: deleteUserUsername,
                deleteUserPassword: deleteUserPassword,
                deleteUserEmail: deleteUserEmail,
                deleteUserStatus: deleteUserStatus
            };
            var deleteData = $.ajax({
                type: "POST",
                url: "<?= site_url('/Users/Delete_users') ?>",
                data: usersDelete,
                dataType: "text",
                success: function(resultData) {
                    alert('Delete finish');

                    location.reload();
                }

            });

        }

        function addUser() {
            var addUserId = $('#id').val();
            var addUserUsername = $('#username').val();
            var addUserPassword = $('#password').val();
            var addUserEmail = $('#email').val();
            var addUserStatus = $('#status').val();
            var usersRegister = {
                addUserId: addUserId,
                addUserUsername: addUserUsername,
                addUserPassword: addUserPassword,
                addUserEmail: addUserEmail,
                addUserStatus: addUserStatus
            };
            var addData = $.ajax({
                type: "POST",
                url: "<?= site_url('/Users/Register') ?>",
                data: usersRegister,
                dataType: "text",
                success: function(resultData) {
                    alert('Register finish');

                    location.reload();
                }

            });
        }
    </script>