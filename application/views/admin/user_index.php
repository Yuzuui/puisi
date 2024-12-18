<div id="menghilang">
  <?php echo $this->session->flashdata('alert', true);?>
</div>

<div class="container mb-3">
    <!-- Tombol untuk memicu modal -->
    <button type="button" class="btn btn-info btn-rounded btn-fw" data-toggle="modal" data-target="#exampleModal">
    Tambah User
    </button>

    <!-- Struktur Modal dengan Form -->

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="<?= base_url('admin/user/simpan')?>" method="post">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Form Input Pengguna</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            <div class="mb-3"> 
                            <label for="username" class="form-label">username</label> 
                            <input type="text" class="form-control" name="username" required> 
                        </div> 
                        <div class="mb-3"> 
                            <label for="nama" class="form-label">Nama</label> 
                            <input type="text" class="form-control" name="nama" required> 
                        </div> 
                        <div class="mb-3"> 
                            <label for="password" class="form-label">Kata Sandi</label> 
                            <input type="password" class="form-control" name="password" required> 
                        </div> 
                        <div class="mb-3"> 
                            <label for="level" class="form-label">Level</label> 
                            <select name="level" class="form-control"> 
                            <option value="Admin">Admin</option> 
                            <option value="Kontributor">Kontributr</option> 
                            </select> 
                        </div> 
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-fw" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-success btn-fw">Simpan</button>
                    </div>
                    </div>
                </div>
            </form>
        </div>

</div>



    
<!-- tabel -->
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Data Pengguna</h4>
        </p>
        <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">Username</th>
                <th scope="col">Nama</th>
                <th scope="col">Level</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach($user as $data) { ?> 
                <tr>
                    <td><?= $data['username']; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['level']; ?></td>
                    <td>
                    <a class="btn btn-square btn-danger m-2" onClick="return confirm('Apakah anda yakin menghapus data ini?')"
                     href="<?= base_url('admin/user/hapus/'.$data['id_user'])?>"><i class="fe fe-trash-2"></i></a>
                    <button type="button" class="btn btn-square btn-warning m-2" data-toggle="modal" data-target="#edit<?= $data['level']; ?>">
                    <i class="fe fe-edit-3"></i>
                    </button>
                    <div class="modal fade" id="edit<?= $data['level']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form action="<?= base_url('admin/user/update') ?>" method="post">
                            <input type="hidden" name="id_user" value="<?= $data['id_user']; ?>"> <!-- Pastikan ini id_user, bukan username -->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3"> 
                                            <label for="nama" class="form-label">Nama</label> 
                                            <input type="text" class="form-control" value="<?= $data['nama']; ?>" name="nama" required> 
                                        </div> 
                                        <div class="mb-3"> 
                                            <label for="username" class="form-label">Username</label> 
                                            <input type="text" class="form-control" value="<?= $data['username']; ?>" name="username" readonly> 
                                        </div> 
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-fw" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-success btn-fw">Simpan Perubahan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                    </td>
                </tr>
                <?php } ?>
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
<!-- tabel akhir -->