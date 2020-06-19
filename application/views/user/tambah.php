<?php
// notifikasi error
echo validation_errors('<div class="alert alert-warning">', '</div>');

// form open
echo form_open(base_url('user/tambah'), ' role="form"');
?>
<div class="card-body">
    <div class="form-group">
        <label for="exampleInputNama">Nama user</label>
        <input type="text" name="nama" class="form-control" id="exampleInputNama" placeholder="Nama user" value="<?php echo set_value('nama') ?>" required>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail">Email</label>
        <input type="email" name="email" class="form-control" id="exampleInputEmail" placeholder="Email" value="<?php echo set_value('email') ?>" required>
    </div>
    <div class="form-group">
        <label for="exampleInputUsername">Username</label>
        <input type="text" name="username" class="form-control" id="exampleInputUsername" placeholder="Username" value="<?php echo set_value('username') ?>" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword" placeholder="Password" value="<?php echo set_value('password') ?>" required>
    </div>
    <div class="form-group">
        <label for="exampleInputLevel">Level Akses</label>
        <select name="akses_level" class="form-control" id="exampleInputLevel">
            <option value="Admin">Admin</option>
            <option value="User">User</option>
        </select>
    </div>
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
    <button type="reset" class="btn btn-info" name="reset">Reset</button>
</div>
<?php echo form_close(); ?>