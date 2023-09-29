<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php $nama_kelas = session()->getFlashdata('nama_kelas');?>

<form action="<?= base_url('/user/store')?>" method="post">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input <?php $nama_kelas = session()->getFlashdata('nama_kelas');?>
    class="<?= (empty(validation_show_error('nama')))?'':'is_valid'?>"
    type="nama" id="nama" aria-describedby="emailHelp" name="nama">
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
    type="text" id="npm" name="npm">
    <div class="invalid-feedback">
  <?= validation_show_error('npm') ?><br>
  </div>
  <div class="mb-3">
    <label for="kelas" class="form-label">Kelas</label>
    <!-- <input type="text" class="form-control" id="kelas" name="kelas"> -->
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
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>