<?php
include 'base.php';

if (isset($_POST["selesai"])) {
    $g = $_POST["pertanyaan"];
    $m = $masalah;
    if ($g[1] and $g[2] and $g[3] and $g[4] and $g[5] and $g[6] and $g[7]) {
        echo "<h2 class=pertanyaan>" . $m[0] . "</h2>";
    } else if ($g[8] and $g[9] and $g[10] and $g[11]) {
        echo "<h2 class=pertanyaan>" . $m[1] . "</h2>";
    } else if ($g[13] and $g[14] and $g[15]) {
        echo "<h2 class=pertanyaan>" . $m[2] . "</h2>";
    } else if ($g[16] and $g[17] and $g[18]) {
        echo "<h2 class=pertanyaan>" . $m[3] . "</h2>";
    } else if ($g[1] and $g[19] and $g[21]) {
        echo "<h2 class=pertanyaan>" . $m[4] . "</h2>";
    } else if ($g[22] and $g[23] and $g[24]) {
        echo "<h2 class=pertanyaan>" . $m[5] . "</h2>";
    } else if ($g[1] and $g[26] and $g[27] and $g[28]) {
        echo "<h2 class=pertanyaan>" . $m[6] . "</h2>";
    } else if ($g[25] and $g[29] and $g[30] and $g[31]) {
        echo "<h2 class=pertanyaan>" . $m[7] . "</h2>";
    } else if ($g[12] and $g[32] and $g[33] and $g[34]) {
        echo "<h2 class=pertanyaan>" . $m[8] . "</h2>";
    } else if ($g[35] and $g[36] and $g[37]) {
        echo "<h2 class=pertanyaan>" . $m[9] . "</h2>";
    }else if ($g[38] and $g[39] and $g[40]) {
        echo "<h2 class=pertanyaan>" . $m[10] . "</h2>";
    }else{
        echo "<h2 class=pertanyaan>Rule tidak ditemukan </h2>";
    }
}
?>
<html>

<head>
    <link rel="stylesheet" href="pertanyaan.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>

<body>
    <form action="" method="post" id="p">
        <?php $i = 1; ?>
        <div class="container">
            <div class="pertanyaan">
                <?php foreach ($gejala as $g) : ?>
                    <div id="pert" class="pertanyaan<?= $i ?>" hidden>
                        <h3 id="pertanyaan"><?= $i ?>. Apakah <?= $g ?> ? </h3>
                        <input type="radio" class="ya" id="ya<?= $i ?>" name="pertanyaan[<?= $i ?>]" value="1">
                        <label for="">ya</label>
                        <input type="radio" class="tidak" id="tidak<?= $i ?>" name="pertanyaan[<?= $i ?>]" value="0">
                        <label for="">tidak</label>
                        <input type="radio" name="pertanyaan[<?= $i ?>]" value="0" checked hidden>
                    </div>
                    <?php $i += 1 ?>
                <?php endforeach; ?>
                <button type="submit" class="submit" name="selesai">SELESAI</button>   
                </form>             
            </div>
        </div>       
        <a href="index.php"><button class="kembali">Kembali</button></a>
</body>

<script>
    let show = (nomer) => {
        $('.pertanyaan' + nomer + '').removeAttr('hidden');
    }

    let hide = (nomer) => {
        $('.pertanyaan' + nomer + '').attr('hidden', '');
    }

    $(document).ready(function() {
        show(1);
        for (let x = 1; x <= 40; x++) {
            $('#ya' + x + '').click(() => {
                hide(x);
                show(x + 1);
            })
            $('#tidak' + x + '').click(() => {
                hide(x);
                show(x + 1);
            })
        }
    });
</script>

</html>