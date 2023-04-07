<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 3-Nomor 4</title>
    <style>         
        img{             
            width: 100px;             
            height: 100px;         
            }     
            </style> 
            </head> 
            <body>     
                <?php     
                $star = NULL;     
                $pict = "<img src = 'star.png'>";         
                if (isset($_POST['star'])) {     
                    $star = $_POST['star'];  
                } 
                if (isset($_POST['tambah'])){     
                    $star++; 
                    } 
                    if(isset($_POST['kurang'])){     
                        $star--; 
                        }  
                if (empty($star)) { 
                    ?>             
                <form action="" method="POST">                 
                    <label for="">Jumlah bintang</label>                  
                    <input type="text" name="star"><br> 
                    <button  type="submit" name="kirim">Submit</button>             
                </form>         
                <?php 
                }         
                if(!empty($star)){             
                    echo "Jumlah bintang  $star " 
                    ?>              
                    <br><br>             
                    <?php             
                    for($i = 0; $i < $star; $i++){                 
                        echo "$pict";             
                        }             
                        ?>             
                        <form action="" method="POST">             
                            <input  type="text"  name="star"  value="<?= $star ?>"  hidden>             
                            <button  type="submit"  name="tambah" value="tambah">Tambah</button>             
                            <button  type="submit"  name="kurang" value="kurang">Kurang</button>         
                        </form>         
                        <?php 
                    }         
                    ?>
    </body> 
</html> 