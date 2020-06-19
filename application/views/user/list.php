<!-- Content Header (Page header) -->

<p>

    <a href="<?php echo base_url('user/tambah') ?>" class="btn btn-block btn-success">
        <i class="fa fa-plus"> Tambah User</i>
    </a>
</p>

<?php
// notifikasi
if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-xs alert-success">';
    echo '<h5 class="text-center">' . $this->session->flashdata('sukses') . '</h5>';
    echo '</div>';
}
?>


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Username</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($user as $user) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $user->nama ?></td>
                                <td><?php echo $user->email ?></td>
                                <td><?php echo $user->username ?></td>
                                <td><?php echo $user->akses_level ?></td>
                                <td>
                                    <a href="<?php echo base_url('user/edit/' . $user->id_user) ?>" class="btn btn-warning btn-xs">
                                        <i class="fa fa-edit"></i>Edit
                                    </a>
                                    <a href="<?php echo base_url('user/delete/' . $user->id_user) ?>" class="btn btn-danger btn-xs" onclick="return confirm('yakin ingin menghapus data?')">
                                        <i class="fa fa-trash"></i>hapus
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->