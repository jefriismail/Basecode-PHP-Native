<?php
    // Pengulangan
    // for, while, do while, foreach
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Latihan 1</title>
    <style>
        .warna-baris{
            background-color : cyan;
        }
    </style>
    </head>
    <body>
        <table border = 1 cellpadding = 10 cellspacing = 0>
            <!-- <?php
                for($baris = 1; $baris <= 3; $baris++){
                    echo "<tr>";
                    for($kolom = 1; $kolom <=5; $kolom++){
                        echo "<td>";
                        echo "$baris, $kolom";
                        echo "</td>";
                    }
                    echo "</tr>";
                }
            ?> -->

            <!-- Templating style -->
            <?php for($baris = 1; $baris <= 3; $baris++) : ?>
                <tr>
                    <?php for($kolom = 1; $kolom <=5; $kolom++) : ?>
                    <!-- Bisa ini -->
                    <!-- <td><?php echo "$baris, $kolom"?></td> -->
                    
                    <!-- Bisa diganti ini -->
                    <!-- <td><?= "$baris, $kolom"?></td> -->

                    <!-- branching -->
                    <?php if($kolom % 2 == 0) :?>
                        <td class="warna-baris">
                    <?php else :?>
                        <td>
                    <?php endif ?>
                    <?= "$baris, $kolom"?></td>
                    <?php endfor ?>
                </tr>
            <?php endfor ?>
        </table>
    </body>
</html>
