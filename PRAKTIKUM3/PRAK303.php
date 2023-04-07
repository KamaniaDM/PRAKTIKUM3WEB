<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3-Nomor 3</title>
</head>
<body>
<form action="" method="POST">
    <label for="">Batas Bawah :</label>         
    <input type="number" name="bawah" ></br>         
    <label for="">Batas Atas :</label>
    <input type="number" name="atas" ></br>         
    <input type="submit" value="Cetak" name="Cetak"></br>     
</form></br>
</body>
</html>
<?php
if (isset($_POST['Cetak'])){     
    $bawah = $_POST['bawah'];     
    $atas = $_POST['atas'];
    $i = $bawah;     
    do{         
        if (($i+7)%5==0){             
            echo  "<img  src='star.png'  width='15px' height='15px'>";         
        }else{             
            echo $i;         
        }         
        echo "&nbsp";         
        $i++;     
    }while($i<=$atas); 
}
?>