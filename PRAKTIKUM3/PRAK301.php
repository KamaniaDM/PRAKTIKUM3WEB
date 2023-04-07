<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3-Nomor 1</title>
</head>
<body>
    <form action="" method="POST">        
    <label for="">Jumlah Peserta : </label>         
    <input type="text" name = "peserta" ><br>         
    <input type="submit" name = "cetak" value = "Cetak">       
    </form> 
</body>
</html>
<?php 
if (isset($_POST['cetak'])){     
    $peserta = $_POST['peserta'];     
    $i=1;     
    while ($i <= $peserta){         
        if ($i%2 == 0){             
            echo "<h2><font color='green'>Peserta ke-$i</font></br>";         
            } else {             
                echo "<h2><font color='red'>Peserta ke-$i</font></br>";         
                }         
                $i++;     
                } 
             } 
        ?>