<?php
include 'base.php';

if (isset($_POST["selesai"])) {
    $s = $_POST['TOption'];  
    $g = $gejala;
    if($s == "1"){
        echo "<h4>Gejala yang muncul dari masalah ini adalah : "."<br>".$g[0]."<br>".
        $g[1]."<br>".$g[2]."<br>".$g[3]."<br>".$g[4]."<br>".$g[5]."<br>".$g[6]."</h4>";
    }elseif($s == "2"){
        echo "<h4>Gejala yang muncul dari masalah ini adalah : "."<br>".$g[7]."<br>".
        $g[8]."<br>".$g[9]."<br>".$g[10]."</h4>";
    }elseif($s == "3"){
        echo "<h4>Gejala yang muncul dari masalah ini adalah : "."<br>".$g[12]."<br>".
        $g[13]."<br>".$g[14]."</h4>";
    }elseif($s == "4"){
        echo "<h4>Gejala yang muncul dari masalah ini adalah : "."<br>".$g[15]."<br>".
        $g[16]."<br>".$g[17]."</h4>";
    }elseif($s == "5"){
        echo "<h4>Gejala yang muncul dari masalah ini adalah : "."<br>".$g[0]."<br>".
        $g[18]."<br>".$g[20]."</h4>";
    }elseif($s == "6"){
        echo "<h4>Gejala yang muncul dari masalah ini adalah : "."<br>".$g[22]."<br>".
        $g[22]."<br>".$g[23]."</h4>";
    }elseif($s == "7"){
        echo "<h4>Gejala yang muncul dari masalah ini adalah : "."<br>".$g[0]."<br>".
        $g[25]."<br>".$g[26]."<br>".$g[27]."</h4>";
    }elseif($s == "8"){
        echo "<h4>Gejala yang muncul dari masalah ini adalah : "."<br>".$g[24]."<br>".
        $g[28]."<br>".$g[29]."<br>".$g[30]."</h4>";
    }elseif($s == "9"){
        echo "<h4>Gejala yang muncul dari masalah ini adalah : "."<br>".$g[11]."<br>".
        $g[31]."<br>".$g[32]."<br>".$g[33]."</h4>";
    }elseif($s == "10"){
        echo "<h4>Gejala yang muncul dari masalah ini adalah : "."<br>".$g[34]."<br>".
        $g[35]."<br>".$g[36]."</h4>";
    }elseif($s == "11"){
        echo "<h4>Gejala yang muncul dari masalah ini adalah : "."<br>".$g[37]."<br>".
        $g[38]."<br>".$g[39]."</h4>";
    }
}

?>

<html>

<head>
    <link rel="stylesheet" href="pertanyaan.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>

<body>
        <form method="post" action="">
        <div class="container1">
            <div class="custom-select" style="width:200px;">
                <select name="TOption">
                    <option value="0">Pilih kerusakan:</option>
                    <option value="1">Kerusakan Monitor</option>
                    <option value="2">Kerusakan Keyboard</option>
                    <option value="3">Kerusakan Mouse</option>
                    <option value="4">Kerusakan Power Supply</option>
                    <option value="5">Kerusakan Motherboard</option>
                    <option value="6">Kerusakan Harddisk</option>
                    <option value="7">Kerusakan VGA Card</option>
                    <option value="8">Kerusakan CD/DVD Rom</option>
                    <option value="9">Kerusakan RAM</option>
                    <option value="10">Kerusakan Sound Card</option>
                    <option value="11">Kerusakan LAN Card</option>
                </select>
                <button type="submit" class="selesai" name="selesai">SELESAI</button>   
            </div> 
        </div>
        </form>
        <a href="index.php"><button class="kembali">Kembali</button></a>
</body>
</html>