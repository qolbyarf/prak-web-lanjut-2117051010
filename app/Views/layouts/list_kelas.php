<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>
<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <?php if (session('validation') && session('validation')->hasError('delete_failed')) : ?>
            <div class="alert alert-danger">
              <?= session('validation')->getError('delete_failed'); ?>
            </div>
          <?php endif; ?>
          <h6>Kelas table</h6>
          <a href="<?= base_url('kelas/create') ?>" class="badge badge-sm bg-gradient-secondary">Tambah Data</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Kelas</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kapasitas Kelas</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($kelas as $kelas) { ?>
                  <tr>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold"><?= $no++ ?></span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-xs font-weight-bold"><?= $kelas['nama_kelas'] ?></span>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-secondary text-xs font-weight-bold"><?= $kelas['kapasitas'] ?></span>
                    </td>
                    <td style="display: flex;" class="align-middle text-center">
                      <a class="btn btn-link text-dark px-3 mb-0" href="<?= base_url('kelas/' . $kelas['id']) ?>"><i class="fas fa-eye text-dark me-2" aria-hidden="true"></i>Detail</a>
                      <a class="btn btn-link text-dark px-3 mb-0" href="<?= base_url('kelas/' . $kelas['id'] . '/edit') ?>"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                      <form action="<?= base_url('kelas/' . $kelas['id']) ?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button class="btn btn-link text-dark mb-0" style="color: red;">
                          <i class="fas fa-trash text-dark me-2" aria-hidden="true"></i>
                          Delete
                        </button>
                      </form>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?= $this->endSection('content') ?>