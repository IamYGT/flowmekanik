<?php require("include/baglan.php"); include("include/fonksiyon.php"); include_once("inc.lang.php"); ?>
<!DOCTYPE html>
<html lang="tr"> 
<head>
    <title>Hizmetlerimiz - Flow Mekanik</title>
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
                        		<h2 class="wt-title">Hizmetlerimiz</h2>
                            </div>
                        </div> 
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="<?php echo $ayarlar["strURL"]; ?>/index">Anasayfa</a></li>
                                    <li>Hizmetlerimiz</li>
                                </ul>
                            </div>                      
                    </div>
                </div>
            </div> 
			 <div class="section-full  p-t120 p-b90 site-bg-gray-light">
                <div class="container-fluid">
                    <!-- TITLE START-->
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                            <div class="sep-leaf-left"></div>
                            <div>Flow Mekanik</div>
                        </div>
                        <h2 class="wt-title">Hizmetlerimiz</h2>
                    </div>
                    <!-- TITLE END-->

                    <div class="section-content">     
                        <div class="owl-carousel project-slider1  project-box-style1-outer m-b30">
                            <!-- COLUMNS 1 --> 
                          
    <?php
				$veri_cek = $db->query("SELECT * FROM hizmetler WHERE haber_durum = 1");
 				if ($veri_cek->rowCount()){ 
				foreach($veri_cek as $veri_listele){
?> 	<div class="item">
                                <div class="project-box-style1">
                                    <div class="project-content">
                                        <div class="project-title">
                                            Flow mekanik 
                                        </div>
                                        <h4 class="project-title-large"><a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"><?php echo 	$veri_listele["haber_baslik"]; ?></a></h4>
                                    </div>
                                   <a href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"> <div class="project-media">
                                        <img src="<?php echo $ayarlar["strURL"]; ?>/uploads/services/<?php echo $veri_listele["haber_resim"]; ?>" alt="<?php echo 	$veri_listele["haber_baslik"]; ?>">
                                    </div> </a>
                                    <div class="project-view">
                                        <a class="  pic-long project-view-btn" href="<?php echo $ayarlar["strURL"]; ?>/hizmet/<?php echo $veri_listele["haber_seo"]; ?>"  >
                                        <i></i>    
                                        </a> 
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
	    
        </div>
      <?php include("alt.php")?>
</body>

</html>
