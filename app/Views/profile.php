<?= $this->extend('layouts/app') ?>
<?= $this->section('content') ?>

<body>

  <img src="<?= base_url('assets/img/gambar.jpg') ?>" class="rounded-circle mx-auto d-block py-3" alt="..." width="140" height="180">
  <table class="mx-auto">
    <tr>
      <td>
        <button class="p-2 bg-secondary text-white" style="width: 300px;"><?= $nama ?></button>
      </td>
    </tr>
    <tr>
      <td>
        <button class="p-2 mt-2 bg-secondary text-white" style="width: 300px;"><?= $npm ?></button>
      </td>
    </tr>
    <tr>
      <td>
        <button class="p-2 mt-2 bg-secondary text-white" style="width: 300px;"><?= $kelas ?></button>
      </td>
    </tr>
  </table>
  <?= $this->endSection('content') ?>