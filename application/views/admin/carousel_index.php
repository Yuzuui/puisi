<div id="menghilang">
  <?php echo $this->session->flashdata('alert', true);?>
</div> 

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Carousel</h4>
            <form action="<?= base_url('admin/carousel/simpan') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group mb-3">
                    <label for="judul_website">Judul</label>
                    <input type="text" class="form-control" name="judul" >
                </div>
                <div class="form-group mb-3">
                    <div class="form-group mb-3">
                        <label for="example-fileinput">Foto</label>
                        <input type="file" name="foto" class="form-control" accept="image/png, image/jpeg">
        
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-dark">Cancel</button>
            </form>
        </div>
    </div>
</div>

<?php foreach ($craousel as $cc){?>
<div class="card col-md-12 mb-3 mt-3" style="width: 18rem;">
  <img src="<?= base_url('assets/upload/carousel/'.$cc['foto']) ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?= $cc['judul'] ?></h5>
    <a class="btn btn-square btn-danger m-2" onClick="return confirm('Apakah anda yakin menghapus data ini?')"
      href="<?= base_url('admin/carousel/hapus/'.$cc['foto'])?>"><i class="fe fe-trash-2"></i>
    </a>
    
  </div>
</div>
<?php } ?>