<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Referanslar - Flow Mekanik</title>
<?php include("css.php")?>
</head>
<body>
	<div class="page-wraper">
    <?php include("ust.php")?>
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(<?php echo $ayarlar["strURL"]; ?>/images/banner/1.jpg);">
            	<div class="overlay-main site-bg-black opacity-06"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="wt-title">Referanslar</h2>
                            </div>
                        </div>
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                                    <li>Referanslar</li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
            <!-- OUR TEAM START -->
            <div class="section-full p-t120 p-b90">

                <div class="container">

                    <div class="section-content">
                        <div class="row justify-content-center">
                          <?php
                      				$veri_cek = $db->query("SELECT * FROM referanslar WHERE referans_durum = 1 AND dil_id = '{$lang}' ORDER BY referans_ust_id ASC");
                       				if ($veri_cek->rowCount()){
                      				foreach($veri_cek as $veri_listele){
                      ?>   <div class="col-lg-4 col-md-6 col-sm-12 m-b30">
                                <div class="wt-team-1">
                                    <div class="wt-media">
                                        <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/references/<?php echo $veri_listele["referans_resim"]; ?>" alt="<?php echo 	$veri_listele["referans_baslik"]; ?>">
                                    </div>
                                    <div class="wt-info">
                                        <div class="team-detail">
                                             <h4 class="m-t0 team-name"><a href="#"><?php echo 	$veri_listele["referans_baslik"]; ?></a></h4>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php
                                      }
                                    }else{
                                      "Listelenecek veri bulunamadı.";
                                    }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
            <!-- OUR TEAM SECTION END -->

        </div>
      <?php include("alt.php")?>
</body>

</html>
