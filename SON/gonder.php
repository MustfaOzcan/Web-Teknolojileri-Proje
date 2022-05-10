<?php


if(isset($_POST['gonder']))
{  
    
    echo " <h1>FORM BAŞARIYLA GÖNDERİLMİŞTİR</h1>";
    $isim= $_POST['adi'];
    echo " <h2>MERHABA,</h2>","<h2><i>",$isim ,"<i></h2>";
  
    

    


    

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Veri</title>
    
</head>
<body>

    <h1>~Form Bilgileri~</h1>
    <hr>

    <div>

    
    </div>

    <?php

    $soyad=$_POST['soyadi'];

    $cinsiyet=$_POST['cinsiyet'];
    
    $telefon=$_POST['telefon'];
    
    $email=$_POST['email'];
    $sehir=$_POST['il'];
    $adres=$_POST['adres'];
    
  
    echo "<hr>" ;
    echo "Ad: ".$isim;
    echo "<br>" ;

    echo "Soyad:".$soyad;
    echo "<br>";

    echo "Cinsiyet:".$cinsiyet;
    echo "<br>";

    echo "Telefon: ".$telefon;
    echo "<br>";

    echo "E-Posta: ".$email;
    echo "<br>";

   
    echo "Şehir: ".$sehir;
    echo "<br>";

    echo "Adres: ".$adres;
    echo "<br>";
    echo "<hr>" ;
    echo "<hr>" ;



    ?>

</body>
</html>



