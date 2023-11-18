<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<main class="form-signin w-100 m-auto">
  <form method="POST" action="<?= base_url('/user/store') ?>">
    <h1 class="h3 mt-5 mb-3 fw-normal">Let's sign up</h1>
    <div class="form-floating">
      <input type="text" class="form-control mt-2 <?= session('validation') && session('validation')->hasError('nama') ? 'is-invalid' : '' ?>" id="floatingName" placeholder="Nama" name="nama" value="<?= old('nama') ?>">
      <label for="floatingName">Nama</label>
      <?php if (session('validation') && session('validation')->hasError('nama')) : ?>
        <div class="invalid-feedback">
          <?= session('validation')->getError('nama'); ?>
        </div>
      <?php endif; ?>
    </div>
    </div>
    <div class="form-floating">
      <input type="number" class="form-control mt-2 <?= session('validation') ? 'is-invalid' : '' ?>" id="floatingNpm" placeholder="NPM" name="npm" value="<?= old('npm') ?>">
      <label for="floatingNpm">NPM</label>
      <?php if (session('validation') && session('validation')->hasError('npm')) : ?>
        <div class="invalid-feedback">
          <?= session('validation')->getError('npm'); ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="form-floating">
      <select class="form-select mt-2" aria-label="Default select example" name="kelas">
        <option value="" selected disabled>Pilih Kelas</option>
        <?php
        foreach ($kelas as $item) {
        ?>
          <option value="<?= $item['id'] ?>"><?= $item['nama_kelas'] ?></option>
        <?php } ?>
      </select>
    </div>


    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Insert it</button>
  </form>
</main>
<?= $this->endSection('content') ?>