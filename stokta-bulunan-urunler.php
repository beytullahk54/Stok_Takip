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
    

       <div class="row">
                
        <?php

        include("ayar.php");            
        $stok = $baglanti -> query("SELECT * FROM urunler where  takip='1' ");
        $stok ->execute();
        ?>

                <div class="col-sm-12 col-md-12"> 
                    <div class="panel panel-default">
                    <!-- Default panel contents -->
                       <div class="panel-heading">Stokta Bulunan Ürünler</div>

                    <!-- Table -->
                        <table class="table">
                            <thead><tr><th>Ürün Adı</th><th>Barkod</th><th>Kg</th><th>Cinsi</th><th>Giriş Saati</th><th>Giriş Tarihi</th></tr></thead>
                            <tbody>


                            <?php
                            foreach($stok as $stokcek){
                            $urun_adi=$stokcek["urun_adi"];
                            $barkod=$stokcek["barkod"];
                            $kg=$stokcek["kg"];
                            $cinsi=$stokcek["cinsi"];
                            $giris_saati=$stokcek["giris_saati"];
                            $giris_tarihi=$stokcek["giris_tarihi"];
                            $cikis_saati=$stokcek["cikis_saati"];
                            $cikis_tarihi=$stokcek["cikis_tarihi"];
                            echo "<tr><td>".$urun_adi."</td> <td>".$barkod."</td><td> ".$kg." </td><td>".$cinsi." </td><td>".$giris_saati."</td><td> ".$giris_tarihi."</td></tr>";
                            } 
                                          
                            ?>
                          
                            </tbody>
                        </table>
                    </div>

                </div>





          </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>