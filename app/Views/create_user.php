<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form action="<?= base_url('/user/store')?>" method="post">
  <div class="mb-3">
    <label for="nama" class="form-label">Nama</label>
    <input type="nama" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
    
  </div>
  <div class="mb-3">
    <label for="npm" class="form-label">NPM</label>
    <input type="text" class="form-control" id="npm" name="npm">
  </div>
  <div class="mb-3">
    <label for="kelas" class="form-label">Kelas</label>
    <input type="text" class="form-control" id="kelas" name="kelas">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>