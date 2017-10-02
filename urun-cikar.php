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

          if($_POST){
            include("ayar.php");

            $cikis_tarihi=date('d.m.Y');
            $cikis_saati=date('H:i:s');
            $barkod=$_POST["barkod"];
            $duzenle=$baglanti->query("Update urunler set cikis_saati='$cikis_saati' , cikis_tarihi='$cikis_tarihi',takip='0' where barkod='$barkod' ");
            
            
            if($duzenle){

                echo "Ürün Çıkarma İşlemi Başarılı";

              }else{

                echo "Ürün Çıkarma İşlemi Başarılı";

              }
            }
            
          ?>
    <form action="" class="form-horizontal"  method="post">
       <div class="row">

      
        <div class="col-sm-12 col-md-12">  
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Barkod</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" placeholder="Barkod" name="barkod">
                </div>
            </div>
        </div>


         <div class="col-sm-12 col-md-12">  
            <div class="form-group">
                 <label for="inputEmail3" class="col-sm-3 control-label"></label>
                <div class="col-sm-6">
                   <button type="submit" class="btn btn-default form-control">Ürün Satışı Yap</button>
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