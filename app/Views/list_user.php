<?= $this->extend('layouts/app')?>

<?= $this->section('content')?>
<center>
<table>
    
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Kelas</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <body>
        <?php
        foreach ($users as $user){
            ?>
            <tr>
                <td><?= $user['id'] ?></td>
                <td><?= $user['nama'] ?></td>
                <td><?= $user['npm'] ?></td>
                <td><?= $user['nama_kelas'] ?></td>
                <td><a href="<?=base_url('/user/' . $user['id'] . '/edit')?>">Edit</a></td>
                <td>
                    <form action="<?= base_url('user/' . $user['id']) ?>" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button type="submit">DELETE</button>
                    </form>
                </td>
            </tr>
            <?php
        }
        ?>
    </body>
</table>
</center>
<?= $this->endSection()?>