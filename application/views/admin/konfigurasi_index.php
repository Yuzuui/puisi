<div id="menghilang">
  <?php echo $this->session->flashdata('alert', true);?>
</div>

<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Konfigurasi</h4>
      <form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
        <div class="form-group">
          <label for="judul_website">Judul Website</label>
          <input type="text" class="form-control" name="judul_website" value="<?= $konfig->judul_website;?>">
        </div>
        <div class="form-group">
          <label for="profil_website">Profil</label>
          <input type="text" class="form-control" name="profil_website" value="<?= $konfig->profil_website;?>">
        </div>
        <div class="form-group">
          <label for="twitter">Twitter</label>
          <input type="text" class="form-control" name="twitter" value="<?= $konfig->twitter;?>">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" value="<?= $konfig->email;?>">
        </div> 
        <div class="form-group">
          <label for="Instagram">Instagram</label>
          <input type="txt" class="form-control" name="instagram" value="<?= $konfig->instagram;?>">
        </div>
        <div class="form-group">
          <label for="alamat">Alamat</label>
          <input type="txt" class="form-control" name="alamat" value="<?= $konfig->alamat;?>">
        </div>
        <div class="form-group">
          <label for="no_wa">Whatsaap</label>
          <input type="txt" class="form-control" name="no_wa" value="<?= $konfig->no_wa;?>">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
      </form>
    </div>
  </div>
</div>