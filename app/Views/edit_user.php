<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
<?php $nama_kelas = session()->getFlashdata('nama_kelas');?>

<form action="<?= base_url('/user/' . $user['id'])?>" method="post" enctype="multipart/form-data">

    <div class="mb-3">
        <label for="foto" class="form-label">Foto :</label>
        <img src="<?= $user ['foto'] ?? '<default-foto>' ?>">
        <input type="file" class="form-control" name="foto" id="foto">
    </div>

  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input <?php $nama_kelas = session()->getFlashdata('nama_kelas');?>
    class="<?= (empty(validation_show_error('nama')))?'':'is_valid'?>"
    type="nama" value="<?= $user['nama']?>" id="nama" aria-describedby="emailHelp" name="nama">
    <?php $nama_kelas = session()->getFlashdata('nama_kelas');?>
    <?= (empty(validation_show_error('nama')))?'':'is_valid'?>
<div class="invalid-feedback">
    <?= validation_show_error('nama')?>
  </div>
    
  </div>
  <div class="mb-3">
    <label for="npm" class="form-label">NPM</label>
    <input 
    class="<?= (empty(validation_show_error('npm')))?'' : 'is-invalid'?>
    type="text" id="npm" name="npm" id="npm" value="<?= $user['npm']?>"
    <div class="invalid-feedback">
  <?= validation_show_error('npm') ?><br>
  </div>
  <div class="mb-3">
    <label for="kelas" class="form-label">Kelas</label>

    <select name="kelas" id="kelas">
      <?php
      foreach ($kelas as $item){
        ?>
        <option value="<?= $item['id'] ?>">
        <?= $item['nama_kelas']?>
      </option>
      <?php
      }
      ?>
      </select>
  </div>
  <input type="hidden" name="_method" value="PUT">
  <?= csrf_field()?>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?=$this->endSection()?>