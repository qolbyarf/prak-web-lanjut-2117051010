<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .box{
            width : 100%;
            height : 100vh;
            display : flex;
            align-items : center;
            justify-content : center;
            flex-direction : column;
        }
    </style>
</head>
<body> -->
    
<?= $this->extend('layouts/app')?>
<?= $this->section('content')?>
<div class="box">
    
    <img src="<?=base_url('poto.jpg');?>" style="width : 250px;" alt="">
    <h1>
        <?=$nama?>
    </h1>
    <h1>
        <?=$npm?>
    </h1>
    <h1>
        <?=$kelas?>
    </h1>
 

    </div>
    <?=$this->endSection()?>

<!-- </body>
</html> -->