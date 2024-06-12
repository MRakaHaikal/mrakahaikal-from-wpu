<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2 - Membuat Tabel dengan Pengulangan</title>
    <style>
        .warnabaris{
            background-color: aqua;
        }
        .warnakolom {
            background-color: salmon;
        }
    </style>
</head>
<body>
    <h1>Latihan pembuatan tabel dengan pengulangan</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php 
            for ( $i = 1; $i <= 6; $i++ ){
                echo "<tr>";
                    for ( $j = 1; $j <= 10; $j++ ){
                        echo "<td>";
                        echo "$i, $j";
                        echo "</td>";
                    }
                echo "<tr>";
            }
        ?>
    </table>

    <h2>Latihan tabel dengan metode template</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($k=1; $k<=5; $k++) : ?>
            <?php if($k%2== 0) :?>
                <tr class="warnabaris">
            <?php else: ?>
                <tr>
            <?php endif; ?>
                <?php for($l=1; $l<=5; $l++) : ?>
                    <?php if($k%2==1 && $l%2== 0) :?>
                    <td class="warnakolom">
                    <?php else :?>
                    <td>
                    <?php endif;?>    
                        <?= "$k, $l";?>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor;?>

    </table>
</body>
</html>
