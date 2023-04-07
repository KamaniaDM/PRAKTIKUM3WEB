<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3-Nomor 2</title>
</head>
<body>
    <form action="" method="POST"> 
    <label for="">Tinggi :</label> 
    <input type="number" name="tinggi"></br>         
    <label for= "">Alamat Gambar :</label>  
    <input  type="text" name="alamat"></br>         
    <input type="submit" value="Cetak" name="Cetak">     
    </form> 
</body> 
</html> 
<?php 
if (isset($_POST['Cetak'])){     
    $tinggi = $_POST['tinggi'];     
    $alamat = $_POST['alamat'];     
    $i=0;     
    while( $i<$tinggi ){         
        $j=0;         
        while( $j < $i ){             
            echo "&nbsp ";             
            $j++;         
        }         
        $j=0;         
        while ( $j<$tinggi-$i) {
            echo  "<img  src='$alamat'  width='10px' height='10px'>";             
            $j++;         
            }         
            $i++;         
            echo "<br>";     
            } 
        } 
    ?>