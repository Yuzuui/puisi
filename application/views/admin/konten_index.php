<div id="menghilang">
  <?php echo $this->session->flashdata('alert', true);?>
</div>

<div class="container mb-3">
    <!-- Tombol untuk memicu modal -->
    <button type="button" class="btn btn-info btn-rounded btn-fw mb-3" data-toggle="modal" data-target="#exampleModal">
        Tambah
    </button>

    <!-- Struktur Modal dengan Form -->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form action="<?= base_url('admin/konten/simpan') ?>" method="post" enctype="multipart/form-data">
            <div class="modal-dialog lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Konten</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" required>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Kategori</label>
                            <select name="id_kategori" class="form-control">
                                <?php foreach ($kategori as $data) { ?>
                                    <option value="<?= $data['id_kategori'] ?>"><?= $data['nama_kategori'] ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <textarea name="keterangan" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
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



    
<!-- tabel -->
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">konten</h4>
        </p>
        <div class="table-responsive">
            <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategori Konten</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Kreator</th>
                <th scope="col">Foto</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $no=1; foreach($konten as $data) { ?> 
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $data['judul']; ?></td>
                    <td><?= $data['nama_kategori']; ?></td>
                    <td><?= $data['tanggal']; ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td>
                        <a href="<?= base_url('assets/upload/konten/'.$data['foto']) ?>" target="_blamk">
                            <i class="mdi mdi-magnify">Lihat Foto</i>
                        </a>
                    </td>
                    <td>
                    <a class="btn btn-square btn-danger m-2" onClick="return confirm('Apakah anda yakin menghapus data ini?')"
                     href="<?= base_url('admin/konten/hapus/'.$data['foto'])?>"><i class="fe fe-trash-2"></i></a>
                     <button type="button" class="btn btn-square btn-warning m-2" data-toggle="modal" data-target="#konten<?= $no; ?>">
                        <i class="fe fe-edit-3"></i>
                    </button>
                    <!-- Struktur Modal dengan Form -->
                    <div class="modal fade" id="konten<?= $no; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <form action="<?= base_url('admin/konten/update') ?>" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="nama_foto" value="<?= $data['foto']; ?>">
                                <div class="modal-dialog lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?= $data['judul']; ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Tutup">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="judul" class="form-label">Judul</label>
                                                <input type="text" class="form-control" name="judul" value="<?= $data['judul']; ?>" >
                                            </div>
                                            <div class="mb-3">
                                                <label for="keterangan" class="form-label">Kategori</label>
                                                <select name="id_kategori" class="form-control">
                                                    <?php foreach ($kategori as $data2) { ?>
                                                        <option 
                                                    <?php if ($data2['id_kategori'] == $data['id_kategori']) echo "selected"; ?>
                                                        value="<?= $data2['id_kategori'] ?>"><?= $data2['nama_kategori'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="keterangan" class="form-label">Keterangan</label>
                                                <textarea name="keterangan" class="form-control"><?= $data['keterangan']; ?></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Foto</label>
                                                <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
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