<div id="menghilang">
  <?php echo $this->session->flashdata('alert', true);?>
</div>

<div class="container mb-3">
    <!-- Tombol untuk memicu modal -->
    <button type="button" class="btn btn-info btn-rounded btn-fw mb-3" data-toggle="modal" data-target="#exampleModal">
    Tambah Kategori
    </button>

    <!-- Struktur Modal dengan Form -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <form action="<?= base_url('admin/kategori/simpan')?>" method="post">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nama Kategori Konten</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                        <div class="modal-body">
                            <div class="mb-3"> 
                            <label for="nama_kategori" class="form-label">Nama Kategori</label> 
                            <input type="text" class="form-control" name="nama_kategori" required> 

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
        <h4 class="card-title">Kategori</h4>
        </p>
        <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Kategori</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $no=1; foreach($kategori as $data) { ?> 
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $data['nama_kategori']; ?></td>
                    <td>
                    <a class="btn btn-square btn-danger m-2" onClick="return confirm('Apakah anda yakin menghapus data ini?')"
                     href="<?= base_url('admin/kategori/hapus/'.$data['id_kategori'])?>"><i class="fe fe-trash-2"></i></a>
                    <button type="button" class="btn btn-square btn-warning m-2" data-toggle="modal" data-target="#edit<?= $data['id_kategori']; ?>">
                    <i class="fe fe-edit-3"></i>
                    </button>
                    <div class="modal fade" id="edit<?= $data['id_kategori']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form action="<?= base_url('admin/kategori/update') ?>" method="post">
                            <input type="hidden" name="id_kategori" value="<?= $data['id_kategori']; ?>"> <!-- Pastikan ini id_user, bukan username -->
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit kategori</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3"> 
                                            <label for="nama" class="form-label">Kategori Konten</label> 
                                            <input type="text" class="form-control" value="<?= $data['nama_kategori']; ?>" name="nama_kategori" required> 
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
                <?php $no++; } ?>
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
<!-- tabel akhir -->