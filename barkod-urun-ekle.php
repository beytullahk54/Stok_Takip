<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stok Takip Otomasyonu</title>

    <link href="public/sytle.css" rel="stylesheet">
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  </head>
  <body>
    
    <div class="panel panel-primary">
  <!-- Default panel contents -->
  <div class="panel-heading">Stok Takip</div>
  <div class="panel-body">
    

<?php

include("ayar.php");      


if($_POST){
    

    $barkod= $_POST["barkod"];
    $stok = $baglanti->prepare("select * from barkodlar where barkod=? "); //Güvenli yol 1
    $stok->execute(array($barkod));
    $stokcek = $stok->fetch();

    $urun_adi=$stokcek["urun_adi"];
    $barkod=$stokcek["barkod"];
    $kg=$stokcek["kg"];
    $cinsi=$stokcek["cinsi"];

    $giris_tarihi=date('d.m.Y');
    $giris_saati=date('H:i:s');

    $ekle=$baglanti->prepare("insert into urunler (urun_adi,barkod,kg,cinsi,giris_saati,giris_tarihi,takip) values(?,?,?,?,?,?,?)"); 
    $ekle -> execute(array($urun_adi,$barkod,$kg,$cinsi,$giris_saati,$giris_tarihi,'1'));

    if($ekle){
        echo "Başarıyla Eklendi.";
      }else{
        echo "Eklenemedi.";
      }
      
  }
      


?>

    <form action="" class="form-horizontal" method="post">
       <div class="row">

      
        <div class="col-sm-12 col-md-12">  
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label" >Barkod</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Barkod" name="barkod">
                </div>
            </div>
        </div>


         <div class="col-sm-12 col-md-12">  
            <div class="form-group">
                 <label for="inputEmail3" class="col-sm-3 control-label"></label>
                <div class="col-sm-6">
                   <button type="submit" class="btn btn-default form-control">Barkoddan Ürün Ekle</button>
                </div>
            </div>
        </div>


        </div>

    </form>

          

  </div>





  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>