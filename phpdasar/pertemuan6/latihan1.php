<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            height: 30px;
            width: 30px;
            background-color: salmon;
            text-align: center;
            line-height: 30px;
            transition: 1s;
            float: left;
            margin: 3px;
        }
        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear: both;
        }
    </style>

</head>
<body>

    <?php 
    $angka = [[1,2,3],[4,5,6],[7,8,9]];
    ?>

    <?php foreach( $angka as $a ) :?>
        <?php foreach ( $a as $b ) :?>
        <div class="kotak"><?= $b;?></div>
        <?php endforeach;?>
        <div class="clear"></div>
    <?php endforeach;?>
</body>
</html>